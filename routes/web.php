<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $talks = config('content.talks', []);
    $featured = collect($talks)
        ->filter(fn (array $talk) => ! empty($talk['featured']))
        ->sortBy('feature_order')
        ->values()
        ->all();

    return view('welcome', [
        'profile' => config('content.profile'),
        'talks' => $talks,
        'featured' => $featured,
        'writing' => config('content.writing', []),
        'videos' => config('content.videos', []),
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

    $response = Http::timeout(4)->connectTimeout(2)->post('https://gql.hashnode.com', [
        'query' => $query,
        'variables' => [
            'host' => 'film2code.vercel.app',
            'slug' => $slug,
        ],
    ]);

    $post = $response->json('data.publication.post');

    if (! $post) {
        abort(404);
    }

    return view('post', ['post' => $post]);
});

Route::get('/rss', function () {
    $posts = config('content.writing', []);

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<?xml-stylesheet type="text/xsl" href="'.asset('rss.xsl').'"?>'."\n";
    $xml .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
    $xml .= '<channel>';
    $xml .= '<title>Jason Torres</title>';
    $xml .= '<link>'.url('/').'</link>';
    $xml .= '<description>Writing from Jason Torres, Developer Advocate at JetBrains.</description>';
    $xml .= '<language>en-us</language>';
    $xml .= '<atom:link href="'.url('/rss').'" rel="self" type="application/rss+xml" />';

    foreach ($posts as $post) {
        $postUrl = str_starts_with($post['href'], 'http') ? $post['href'] : url($post['href']);
        $timestamp = strtotime($post['date'] ?? 'now');
        $pubDate = date(DATE_RSS, $timestamp ?: time());
        $description = $post['summary'] ?? ($post['source'] ?? '');

        $xml .= '<item>';
        $xml .= '<title>'.htmlspecialchars($post['title']).'</title>';
        $xml .= '<link>'.htmlspecialchars($postUrl).'</link>';
        $xml .= '<guid>'.htmlspecialchars($postUrl).'</guid>';
        $xml .= '<pubDate>'.$pubDate.'</pubDate>';
        $xml .= '<description>'.htmlspecialchars($description).'</description>';
        $xml .= '</item>';
    }

    $xml .= '</channel>';
    $xml .= '</rss>';

    return response($xml, 200, ['Content-Type' => 'application/rss+xml; charset=UTF-8']);
});
