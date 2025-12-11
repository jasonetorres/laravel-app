<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $post['title'] }} | Jason Torres</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Base typography for Hashnode content */
        .hashnode-content h2 {
            font-size: 1.875rem;
            line-height: 2.25rem;
            font-weight: 700;
            color: #818cf8; /* text-indigo-400 */
            margin-bottom: 1.5rem;
            border-bottom-width: 1px;
            border-color: #1f2937;
            padding-bottom: 0.75rem;
            margin-top: 3rem;
        }
        .hashnode-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: white;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        .hashnode-content p {
            margin-bottom: 1.5rem;
            color: #9ca3af; /* text-gray-400 */
            line-height: 1.75;
        }
        .hashnode-content ul {
            list-style-type: disc;
            list-style-position: inside;
            color: #9ca3af;
            padding-left: 1rem;
            margin-bottom: 2rem;
        }
        .hashnode-content li {
            margin-bottom: 0.5rem;
        }
        .hashnode-content strong {
            color: #e4e4e7; /* text-gray-200 */
            font-weight: 700;
        }
        .hashnode-content a {
            color: #818cf8;
            text-decoration: none;
            transition: color 0.2s;
        }
        .hashnode-content a:hover {
            color: #a5b4fc;
        }
        .hashnode-content img {
            border-radius: 0.75rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            margin: 2.5rem auto;
            max-width: 100%;
        }
        /* Hide default pre styling so JS can take over smoothly */
        .hashnode-content pre {
            background: transparent;
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body class="antialiased bg-[#050505] text-gray-300 font-sans min-h-screen selection:bg-indigo-500 selection:text-white">

<main class="max-w-3xl mx-auto px-6 py-20">
    <a href="/" class="group inline-flex items-center text-sm font-medium text-gray-500 hover:text-indigo-400 transition-colors mb-16">
        <svg class="w-4 h-4 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Back to Home
    </a>

    <article>
        <header class="mb-16">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-8 tracking-tight leading-tight">
                {{ $post['title'] }}
            </h1>

            @if(isset($post['coverImage']['url']))
                <img
                    src="{{ $post['coverImage']['url'] }}"
                    alt="{{ $post['title'] }}"
                    class="max-w-full rounded-xl shadow-2xl mb-12 mx-auto border border-white/10"
                />
            @endif

            @if(isset($post['subtitle']))
                <p class="text-xl text-gray-400 leading-relaxed max-w-2xl border-l-4 border-indigo-500 pl-4 italic">
                    {{ $post['subtitle'] }}
                </p>
            @endif
        </header>

        <div class="space-y-6 hashnode-content" id="post-content">
            {!! $post['content']['html'] !!}
        </div>

        <div class="mt-24 pt-12 border-t border-gray-800 text-center">
            <p class="text-gray-600 text-sm">
                Originally published on <a href="https://hashnode.com" class="hover:text-indigo-400">Hashnode</a> • {{ \Carbon\Carbon::parse($post['publishedAt'])->format('F j, Y') }}
            </p>
        </div>
    </article>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Select all <pre> tags inside the content area
        const codeBlocks = document.querySelectorAll('.hashnode-content pre');

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
            // Insert the wrapper before the <pre> tag
            pre.parentNode.insertBefore(wrapper, pre);
            // Move <pre> inside contentDiv
            contentDiv.appendChild(pre);
            // Assemble wrapper
            wrapper.appendChild(header);
            wrapper.appendChild(contentDiv);
        });
    });
</script>

</body>
</html>
