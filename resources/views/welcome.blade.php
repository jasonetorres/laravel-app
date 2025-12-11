<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jason Torres | Developer</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #111;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 3px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #444;
        }
    </style>
</head>
<body class="antialiased bg-[#050505] text-white font-sans min-h-screen flex flex-col items-center justify-center selection:bg-indigo-500 selection:text-white overflow-hidden">

<main class="w-full max-w-md px-6 py-12 text-center relative z-10">

    <div class="relative mx-auto mb-6 w-24 h-24 sm:w-32 sm:h-32">
        <div class="rounded-full overflow-hidden w-full h-full ring-4 ring-[#111] shadow-2xl">
            <img src="/images/jasont.jpg" alt="Jason Torres" class="w-full h-full object-cover">
        </div>
    </div>

    <h1 class="text-3xl font-bold tracking-tight text-white mb-2">
        Jason Torres
    </h1>
    <p class="text-base text-zinc-500 font-medium mb-6">
        Community Manager, Developer Advocate, Filmmaker
    </p>

    <div class="flex justify-center space-x-6 mb-10">
        <a href="https://github.com/jasonetorres" class="text-zinc-500 hover:text-white transition-colors duration-200">
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
        </a>
        <a href="https://www.linkedin.com/in/thejasontorres/" class="text-zinc-500 hover:text-white transition-colors duration-200">
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" /></svg>
        </a>
        <a href="https://x.com/TasonJorres" class="text-zinc-500 hover:text-white transition-colors duration-200">
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
        </a>
        <a href="mailto:jasontorres585@icloud.com" class="text-zinc-500 hover:text-white transition-colors duration-200">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
        </a>
    </div>

    <div
        x-data="{ activeTab: 'writing' }"
        class="w-full max-w-2xl mx-auto rounded-xl overflow-hidden bg-[#111] border border-white/10 shadow-2xl shadow-indigo-500/20"
    >
        <div class="flex items-center px-2 py-2 bg-[#161616] border-b border-white/5">
            <div class="hidden sm:flex space-x-2 px-4">
                <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
            </div>

            <div class="flex flex-1 justify-center sm:justify-end space-x-1">
                <button
                    @click="activeTab = 'writing'"
                    :class="activeTab === 'writing' ? 'bg-[#2a2a2a] text-white shadow-sm ring-1 ring-white/5' : 'text-zinc-500 hover:text-zinc-300 hover:bg-white/5'"
                    class="px-4 py-1.5 text-sm font-medium rounded-md transition-all duration-200"
                >
                    Writing
                </button>
                <button
                    @click="activeTab = 'speaking'"
                    :class="activeTab === 'speaking' ? 'bg-[#2a2a2a] text-white shadow-sm ring-1 ring-white/5' : 'text-zinc-500 hover:text-zinc-300 hover:bg-white/5'"
                    class="px-4 py-1.5 text-sm font-medium rounded-md transition-all duration-200"
                >
                    Speaking
                </button>
                <button
                    @click="activeTab = 'streaming'"
                    :class="activeTab === 'streaming' ? 'bg-[#2a2a2a] text-white shadow-sm ring-1 ring-white/5' : 'text-zinc-500 hover:text-zinc-300 hover:bg-white/5'"
                    class="px-4 py-1.5 text-sm font-medium rounded-md transition-all duration-200"
                >
                    Streaming
                </button>
            </div>
        </div>

        <div class="p-6 bg-[#111] h-[400px]">

            <div x-show="activeTab === 'writing'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="h-full overflow-y-auto pr-2 custom-scrollbar space-y-6 text-left">


                <a href="/aiblog" class="block group">
                    <h3 class="text-lg font-bold text-zinc-100 group-hover:text-indigo-400 transition-colors">
                        The Tech Conference That Wasn't Selling Anything
                    </h3>
                    <p class="text-zinc-500 mt-2 text-sm leading-relaxed">
                        Reflections on community over commerce and why the best events feel less like sales pitches.
                    </p>
                </a>

                <div class="h-px bg-white/5 w-full"></div>

                <a href="/tutorial" class="block group">
                    <h3 class="text-lg font-bold text-zinc-100 group-hover:text-indigo-400 transition-colors">
                        How I built this portfolio
                    </h3>
                    <p class="text-zinc-500 mt-2 text-sm leading-relaxed">
                        A look under the hood of this site using Laravel, Tailwind, and a minimal design philosophy.
                    </p>
                </a>

                <div class="h-px bg-white/10 w-full"></div>

                {{-- 1. HASHNODE DYNAMIC POSTS --}}
                @if(isset($posts) && count($posts) > 0)
                    @foreach($posts as $edge)
                        @php $post = $edge['node']; @endphp

                        <a href="/blog/{{ $post['slug'] }}" class="block group">
                            <h3 class="text-lg font-bold text-zinc-100 group-hover:text-indigo-400 transition-colors">
                                {{ $post['title'] }}
                            </h3>
                            <p class="text-zinc-500 mt-2 text-sm leading-relaxed line-clamp-2">
                                {{ $post['brief'] }}
                            </p>
                            <p class="text-xs text-zinc-600 mt-2">
                                {{ \Carbon\Carbon::parse($post['publishedAt'])->format('M d, Y') }}
                            </p>
                        </a>
                        <div class="h-px bg-white/10 w-full"></div>
                    @endforeach
                @endif

            </div>

            <div x-show="activeTab === 'speaking'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 style="display: none;"
                 class="h-full overflow-y-auto pr-2 custom-scrollbar text-left">

                <a href="https://m.youtube.com/watch?v=1WzKujMoyM4" class="block group">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-bold text-purple-400 uppercase tracking-wider border border-purple-500/20 bg-purple-500/10 px-2 py-1 rounded">Magnolia Conf 2025</span>
                    </div>
                    <h3 class="text-lg font-bold text-zinc-100 group-hover:text-purple-400 transition-colors">
                        The Schematic to Community as told by Rick Astley
                    </h3>
                    <p class="text-zinc-500 mt-2 text-sm leading-relaxed">
                        never giving up never letting down is just the beginning.
                    </p>
                </a>
            </div>

            <div x-show="activeTab === 'streaming'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 style="display: none;"
                 class="h-full overflow-y-auto pr-2 custom-scrollbar space-y-4">

                @if(isset($videos) && count($videos) > 0)
                    @foreach($videos as $video)
                        <a href="https://www.youtube.com/watch?v={{ $video['snippet']['resourceId']['videoId'] }}"
                           target="_blank"
                           class="block group p-4 rounded-xl bg-[#161616] border border-white/5 hover:border-red-500/30 transition-all duration-300">

                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center space-x-2 bg-red-500/10 px-2 py-1 rounded border border-red-500/20">
                                    <span class="w-1.5 h-1.5 bg-red-500 rounded-full animate-pulse"></span>
                                    <span class="text-[10px] font-bold text-red-500 uppercase tracking-wider">
                                        {{ $video['snippet']['channelTitle'] ?? 'Tech Commute' }}
                                    </span>
                                </div>

                                <svg class="w-4 h-4 text-zinc-600 group-hover:text-red-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </div>

                            <h3 class="text-base font-bold text-zinc-100 group-hover:text-red-400 transition-colors">
                                {{ html_entity_decode($video['snippet']['title']) }}
                            </h3>

                            <p class="text-zinc-500 mt-2 text-sm leading-relaxed line-clamp-2">
                                {{ $video['snippet']['description'] }}
                            </p>
                        </a>
                    @endforeach
                @else
                    <div class="p-8 text-center border border-white/5 rounded-xl bg-[#161616]">
                        <p class="text-zinc-500 text-sm">Loading streams...</p>
                    </div>
                @endif

            </div>

        </div>
    </div>

</main>

<footer class="fixed bottom-6 w-full text-center z-0 pointer-events-none">
    <div class="flex flex-col items-center space-y-2">
        <p class="text-zinc-700 text-xs">&copy; {{ date('Y') }} Jason Torres.</p>
    </div>
</footer>

</body>
</html>
