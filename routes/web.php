<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

// --- 1. HOMEPAGE ROUTE (Fetches Hashnode Posts, YouTube Videos, & LinkedIn Newsletter) ---
Route::get('/', function () {

    //  FETCH HASHNODE POSTS
    $hashnodeQuery = <<<'GQL'
    query GetPosts($host: String!) {
        publication(host: $host) {
            posts(first: 20) {
                edges {
                    node {
                        title
                        brief
                        slug
                        publishedAt
                    }
                }
            }
        }
    }
    GQL;

    $hashnodeResponse = Http::post('https://gql.hashnode.com', [
        'query' => $hashnodeQuery,
        'variables' => [
            'host' => 'film2code.vercel.app'
        ]
    ]);

    $posts = $hashnodeResponse->json('data.publication.posts.edges', []);

    //  FETCH YOUTUBE VIDEOS
    $videos = [];
    $apiKey = env('YOUTUBE_API_KEY');
    $channelId = env('YOUTUBE_CHANNEL_ID');

    if ($apiKey && $channelId) {
        $uploadsPlaylistId = 'UU' . substr($channelId, 2);

        $youtubeResponse = Http::get('https://www.googleapis.com/youtube/v3/playlistItems', [
            'part' => 'snippet',
            'playlistId' => $uploadsPlaylistId,
            'maxResults' => 5,
            'key' => $apiKey,
        ]);

        $videos = $youtubeResponse->json('items', []);
    }

    //  FETCH LINKEDIN NEWSLETTER
    $linkedinPosts = [];
    $linkedinRssUrl = 'https://linkedinrss.cns.me/7414020052481413120';
    $linkedinResponse = Http::get($linkedinRssUrl);

    if ($linkedinResponse->successful()) {
        $xml = simplexml_load_string($linkedinResponse->body());
        foreach ($xml->channel->item as $item) {
            $linkedinPosts[] = [
                'title' => (string) $item->title,
                'link'  => (string) $item->link,
                'brief' => (string) $item->description,
                'date'  => (string) $item->pubDate,
            ];
        }
    }

    //  RETURN VIEW WITH ALL DATA SETS
    return view('welcome', [
        'posts' => $posts,
        'videos' => $videos,
        'linkedinPosts' => array_slice($linkedinPosts, 0, 5) // Display latest 5 editions
    ]);
});

// ---  STATIC ROUTES ---
Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/santatracker', function () {
    return view('santatracker');
});

Route::get('/2025blog', function () {
    return view('2025blog');
});

Route::get('/aiblog', function () {
    return view('aiblog');
});
Route::get('/fullcircle', function () {
    return view('fullcircle');
});

// ---  DYNAMIC SINGLE POST ROUTE ---
Route::get('/blog/{slug}', function ($slug) {
    $query = <<<'GQL'
    query GetPost($slug: String!, $host: String!) {
        publication(host: $host) {
            post(slug: $slug) {
                title
                subtitle
                publishedAt
                coverImage {
                    url
                }
                content {
                    html
                }
            }
        }
    }
    GQL;

    $response = Http::post('https://gql.hashnode.com', [
        'query' => $query,
        'variables' => [
            'host' => 'film2code.vercel.app',
            'slug' => $slug
        ]
    ]);

    $post = $response->json('data.publication.post');

    if (! $post) {
        abort(404);
    }

    return view('post', ['post' => $post]);
});

// ---  RSS FEED ROUTE ---
Route::get('/rss', function () {
    $query = <<<'GQL'
    query GetPosts($host: String!) {
        publication(host: $host) {
            title
            posts(first: 20) {
                edges {
                    node {
                        title
                        brief
                        slug
                        publishedAt
                    }
                }
            }
        }
    }
    GQL;

    $response = Http::post('https://gql.hashnode.com', [
        'query' => $query,
        'variables' => [
            'host' => 'film2code.vercel.app'
        ]
    ]);

    $data = $response->json('data.publication');
    $posts = $data['posts']['edges'] ?? [];
    $siteTitle = $data['title'] ?? 'Jason Torres Portfolio';

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<?xml-stylesheet type="text/xsl" href="' . asset('rss.xsl') . '"?>' . "\n";
    $xml .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
    $xml .= '<channel>';
    $xml .= '<title>' . htmlspecialchars($siteTitle) . '</title>';
    $xml .= '<link>' . url('/') . '</link>';
    $xml .= '<description>Latest updates and writings from Jason Torres.</description>';
    $xml .= '<language>en-us</language>';
    $xml .= '<atom:link href="' . url('/rss') . '" rel="self" type="application/rss+xml" />';

    foreach ($posts as $edge) {
        $post = $edge['node'];
        $postUrl = url('/blog/' . $post['slug']);
        $pubDate = date(DATE_RSS, strtotime($post['publishedAt']));

        $xml .= '<item>';
        $xml .= '<title>' . htmlspecialchars($post['title']) . '</title>';
        $xml .= '<link>' . $postUrl . '</link>';
        $xml .= '<guid>' . $postUrl . '</guid>';
        $xml .= '<pubDate>' . $pubDate . '</pubDate>';
        $xml .= '<description>' . htmlspecialchars($post['brief']) . '</description>';
        $xml .= '</item>';
    }

    $xml .= '</channel>';
    $xml .= '</rss>';

    return response($xml, 200, ['Content-Type' => 'application/xml']);
});
