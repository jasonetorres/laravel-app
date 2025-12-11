<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Build This Portfolio | Jason Torres</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #050505; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #555; }

        /* Reset pre tags so the JS can style them properly */
        pre { background: transparent; padding: 0; margin: 0; }

        /* Syntax Highlighting Colors */
        .cmd { color: #a5b4fc; } /* Indigo */
        .comment { color: #6b7280; } /* Gray */
        .string { color: #86efac; } /* Green */
        .keyword { color: #facc15; } /* Yellow */
        .tag { color: #f87171; } /* Red */
    </style>
</head>
<body class="antialiased bg-[#050505] text-gray-300 font-sans min-h-screen selection:bg-indigo-500 selection:text-white">

<main class="max-w-4xl mx-auto px-6 py-20">

    <a href="/" class="group inline-flex items-center text-sm font-medium text-gray-500 hover:text-indigo-400 transition-colors mb-16">
        <svg class="w-4 h-4 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Back to Home
    </a>

    <article class="tutorial-content">
        <header class="mb-16">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-8 tracking-tight leading-tight">
                Building a "Headless" Portfolio in Laravel
            </h1>

            <div class="bg-[#111] border-l-4 border-indigo-500 p-6 rounded-r-xl">
                <h3 class="text-lg font-bold text-white mb-2">The Mission</h3>
                <p class="text-gray-400 leading-relaxed mb-4">
                    I needed a <strong>one-stop shop</strong>. My content was scattered—blogs on Hashnode, talks on YouTube, code on GitHub. I wanted to own the experience without losing the benefits of those platforms.
                </p>
                <p class="text-gray-400 leading-relaxed">
                    Most importantly, I wanted to build it in <strong>Laravel</strong>—the ecosystem I love—and deploy it to the new <strong>Laravel Cloud</strong>.
                </p>
            </div>
        </header>

        <div class="space-y-24">

            <section>
                <div class="flex items-center mb-6">
                    <span class="bg-indigo-500 text-white text-xs font-bold px-2 py-1 rounded uppercase tracking-wide mr-3">Step 1</span>
                    <h2 class="text-3xl font-bold text-white">The Setup</h2>
                </div>
                <p class="mb-6 text-gray-400 leading-relaxed">
                    We start with a standard Laravel installation. We don't need a heavy frontend framework like React or Vue for this. We just need <strong>Alpine.js</strong> for the interactive "tabs" on the home screen.
                </p>

                <pre><code><span class="comment"># 1. New Project (with Git initialized)</span>
<span class="cmd">laravel new</span> portfolio --git --no-interaction

<span class="comment"># 2. Add Alpine.js (in head tag)</span>
&lt;script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"&gt;&lt;/script&gt;</code></pre>
            </section>

            <section>
                <div class="flex items-center mb-6">
                    <span class="bg-indigo-500 text-white text-xs font-bold px-2 py-1 rounded uppercase tracking-wide mr-3">Step 2</span>
                    <h2 class="text-3xl font-bold text-white">The "Headless" Blog Engine</h2>
                </div>
                <p class="mb-6 text-gray-400 leading-relaxed">
                    I write on Hashnode because the editor is great. I didn't want to copy-paste articles into my database. Instead, I treat Hashnode as a <strong>Headless CMS</strong>.
                </p>
                <p class="mb-6 text-gray-400">
                    We use Laravel's HTTP client to fetch posts via <strong>GraphQL</strong>. This happens in <code class="text-sm bg-[#222] px-1 rounded">routes/web.php</code>.
                </p>

                @verbatim
                    <pre><code><span class="keyword">use</span> Illuminate\Support\Facades\Http;

Route::<span class="cmd">get</span>('/', function () {
    <span class="comment">// 1. The Query: Fetch top 20 posts with metadata</span>
    $query = &lt;&lt;&lt;'GQL'
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

    <span class="comment">// 2. The Request: Hit Hashnode's API</span>
    $response = Http::<span class="cmd">post</span>('https://gql.hashnode.com', [
        'query' => $query,
        'variables' => [
            'host' => 'film2code.vercel.app' <span class="comment">// My Hashnode Domain</span>
        ]
    ]);

    <span class="comment">// 3. Pass data to the view</span>
    $posts = $response->json('data.publication.posts.edges', []);

    <span class="comment">// ... (YouTube logic continues below)</span>

    <span class="keyword">return</span> view('welcome', ['posts' => $posts]);
});</code></pre>
                @endverbatim
            </section>

            <section>
                <div class="flex items-center mb-6">
                    <span class="bg-indigo-500 text-white text-xs font-bold px-2 py-1 rounded uppercase tracking-wide mr-3">Step 3</span>
                    <h2 class="text-3xl font-bold text-white">Dynamic YouTube Streams</h2>
                </div>
                <p class="mb-6 text-gray-400 leading-relaxed">
                    Initially, I hardcoded my YouTube links. But that's manual work. I upgraded the route to fetch my latest videos automatically using the <strong>YouTube Data API</strong>.
                </p>
                <p class="mb-6 text-gray-400">
                    <strong>The Trick:</strong> Instead of searching for videos (expensive API cost), I convert my Channel ID (`UC...`) to an Uploads Playlist ID (`UU...`) and fetch that playlist. It's faster and cheaper.
                </p>

                @verbatim
                    <pre><code><span class="comment">// Inside the same Route::get('/') function...</span>

$apiKey = env('YOUTUBE_API_KEY');
$channelId = env('YOUTUBE_CHANNEL_ID');

if ($apiKey && $channelId) {
    <span class="comment">// TRICK: Change 'UC' to 'UU' to get the Uploads Playlist</span>
    $uploadsPlaylistId = 'UU' . substr($channelId, 2);

    $youtubeResponse = Http::get('https://www.googleapis.com/youtube/v3/playlistItems', [
        'part' => 'snippet',
        'playlistId' => $uploadsPlaylistId,
        'maxResults' => 5,
        'key' => $apiKey,
    ]);

    $videos = $youtubeResponse->json('items', []);
}</code></pre>
                @endverbatim
            </section>

            <section>
                <div class="flex items-center mb-6">
                    <span class="bg-indigo-500 text-white text-xs font-bold px-2 py-1 rounded uppercase tracking-wide mr-3">Step 4</span>
                    <h2 class="text-3xl font-bold text-white">The Multimedia Tabs</h2>
                </div>
                <p class="mb-6 text-gray-400 leading-relaxed">
                    A portfolio isn't just writing. I needed a place for my <strong>YouTube</strong> streams and <strong>Conference Talks</strong>.
                </p>
                <p class="mb-6 text-gray-400">
                    We use <strong>Alpine.js</strong> to toggle visibility between these sections without reloading the page.
                </p>

                @verbatim
                    <pre><code><span class="comment">&lt;!-- Alpine State Wrapper --&gt;</span>
&lt;div <span class="keyword">x-data</span>="{ activeTab: 'writing' }"&gt;

    <span class="comment">&lt;!-- 1. Writing Tab (Dynamic) --&gt;</span>
    &lt;div <span class="keyword">x-show</span>="activeTab === 'writing'"&gt;
        @foreach($posts as $edge)
                                &lt;a href="/blog/{{ $edge['node']['slug'] }}"&gt;
                                {{ $edge['node']['title'] }}
                                &lt;/a&gt;
                            @endforeach
    &lt;/div&gt;

    <span class="comment">&lt;!-- 2. Streaming Tab (Dynamic YouTube Cards) --&gt;</span>
    &lt;div <span class="keyword">x-show</span>="activeTab === 'streaming'"&gt;
        @foreach($videos as $video)
                                &lt;a href="https://youtube.com/..." class="card"&gt;
                                &lt;div class="badge"&gt;{{ $video['snippet']['channelTitle'] }}&lt;/div&gt;
                                &lt;h3&gt;{{ $video['snippet']['title'] }}&lt;/h3&gt;
                                &lt;/a&gt;
                            @endforeach
    &lt;/div&gt;

&lt;/div&gt;</code></pre>
                @endverbatim
            </section>

            <section>
                <div class="flex items-center mb-6">
                    <span class="bg-indigo-500 text-white text-xs font-bold px-2 py-1 rounded uppercase tracking-wide mr-3">Step 5</span>
                    <h2 class="text-3xl font-bold text-white">Why We Needed JavaScript</h2>
                </div>

                <div class="bg-[#111] border border-white/10 p-6 rounded-xl mb-8">
                    <h3 class="text-white font-bold mb-2">The Problem</h3>
                    <p class="text-gray-400 text-sm mb-4">
                        Hashnode returns raw HTML. Their code blocks are simple <code class="text-indigo-400">&lt;pre&gt;</code> tags. They look boring.
                    </p>
                    <h3 class="text-white font-bold mb-2">The Solution</h3>
                    <p class="text-gray-400 text-sm">
                        I couldn't change the HTML coming from the API easily. So, I wrote a <strong>JavaScript DOM Manipulation script</strong>. It runs on page load, finds every boring <code class="text-indigo-400">&lt;pre&gt;</code> tag, and "wraps" it inside a custom DIV structure that looks like a Mac Terminal window.
                    </p>
                </div>

                <p class="mb-4 text-gray-400">Here is the script that powers the code blocks you are reading right now:</p>

                <pre><code><span class="cmd">document.addEventListener</span>("DOMContentLoaded", () => {
    <span class="comment">// 1. Find all raw code blocks</span>
    const codeBlocks = document.querySelectorAll('.content pre');

    codeBlocks.forEach(pre => {
        <span class="comment">// 2. Create the "Mac" Header</span>
        const header = document.createElement('div');
        header.className = "terminal-header";
        header.innerHTML = `&lt;span class="dot red"&gt;&lt;/span&gt;&lt;span class="dot yellow"&gt;&lt;/span&gt;`;

        <span class="comment">// 3. Create the Wrapper</span>
        const wrapper = document.createElement('div');
        wrapper.className = 'terminal-window';

        <span class="comment">// 4. Move the &lt;pre&gt; inside the wrapper</span>
        pre.parentNode.insertBefore(wrapper, pre);
        wrapper.appendChild(header);
        wrapper.appendChild(pre);
    });
});</code></pre>
            </section>

            <section>
                <div class="flex items-center mb-6">
                    <span class="bg-indigo-500 text-white text-xs font-bold px-2 py-1 rounded uppercase tracking-wide mr-3">Step 6</span>
                    <h2 class="text-3xl font-bold text-white">Deploying to Laravel Cloud</h2>
                </div>
                <p class="mb-6 text-gray-400 leading-relaxed">
                    This was the easiest part. Laravel Cloud is built for this.
                </p>

                <div class="bg-[#111] p-6 rounded-xl border border-white/10">
                    <ol class="space-y-4 text-gray-300 list-decimal list-inside">
                        <li><strong>Push to GitHub:</strong> <code class="text-sm bg-[#222] px-1 rounded">git push origin main</code></li>
                        <li><strong>Connect Account:</strong> Log into Laravel Cloud and select the repo.</li>
                        <li><strong>Environment:</strong> I added my <code class="text-yellow-300">APP_KEY</code> and set <code class="text-yellow-300">APP_DEBUG=false</code>.</li>
                        <li><strong>Deploy:</strong> The platform handles the build, SSL, and scaling automatically.</li>
                    </ol>
                </div>
            </section>

        </div>

        <div class="mt-24 pt-12 border-t border-gray-800 text-center">
            <p class="text-gray-600 text-sm">Jason Torres &copy; {{ date('Y') }}.</p>
        </div>

    </article>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Select all <pre> tags inside the tutorial content
        const codeBlocks = document.querySelectorAll('.tutorial-content pre');

        codeBlocks.forEach(pre => {
            // 1. Create the Main Terminal Container
            const wrapper = document.createElement('div');
            wrapper.className = "rounded-xl overflow-hidden bg-[#111] border border-white/10 shadow-2xl shadow-indigo-500/10 my-8 transform hover:scale-[1.01] transition-transform duration-300";

            // 2. Create the Window Header (Red/Yellow/Green dots)
            const header = document.createElement('div');
            header.className = "flex items-center px-4 py-3 bg-[#161616] border-b border-white/5";
            header.innerHTML = `
                <div class="flex space-x-2">
                    <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                </div>
                <div class="flex-1 text-center mr-12">
                    <span class="text-xs text-zinc-500 font-medium font-mono">Code Snippet</span>
                </div>
            `;

            // 3. Create the Content Container
            const contentDiv = document.createElement('div');
            contentDiv.className = "p-6 overflow-x-auto";

            // 4. Style the original <pre> tag
            pre.className = "font-mono text-sm text-gray-300 leading-relaxed whitespace-pre";

            // 5. Move elements around
            pre.parentNode.insertBefore(wrapper, pre);
            contentDiv.appendChild(pre);
            wrapper.appendChild(header);
            wrapper.appendChild(contentDiv);
        });
    });
</script>

</body>
</html>
