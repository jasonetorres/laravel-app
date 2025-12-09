<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jason Torres | Developer</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-[#0a0a0a] text-white font-sans min-h-screen flex flex-col items-center justify-center selection:bg-gray-700 selection:text-white overflow-hidden">

        <main class="w-full max-w-md px-6 py-12 text-center relative z-10">

            <!-- Hero Avatar -->
            <div class="relative mx-auto mb-6 w-24 h-24 sm:w-32 sm:h-32">
                <div class="rounded-full overflow-hidden w-full h-full ring-2 ring-gray-800">
                    <img src="/images/jasont.jpg" alt="Jason Torres" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Name & Title -->
            <h1 class="text-2xl sm:text-3xl font-bold tracking-tight text-white mb-2">
                Jason Torres
            </h1>
            <p class="text-base text-gray-400 font-medium mb-8">
                Community Manager, Developer Advocate, Filmmaker
            </p>

            <!-- Social Links -->
            <div class="flex justify-center space-x-5 mb-8">
                <!-- GitHub -->
                <a href="https://github.com/jasonetorres" class="text-gray-400 hover:text-white transition-colors duration-200">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                </a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/thejasontorres/" class="text-gray-400 hover:text-white transition-colors duration-200">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                    </svg>
                </a>
                <!-- Twitter -->
                <a href="https://x.com/TasonJorres" class="text-gray-400 hover:text-white transition-colors duration-200">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
                <!-- Email -->
                <a href="mailto:jasontorres585@icloud.com" class="text-gray-400 hover:text-white transition-colors duration-200">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a>
            </div>
            <div><a href="/tutorial" class="text-base text-gray-400 hover:text-white font-medium mb-8 transition-colors">How I built this</a></div>
            <div><a href="/aiblog" class="text-base text-gray-400 hover:text-white font-medium mb-8 transition-colors">The Tech Conference That Wasn't Selling Anything</a></div>


        </main>

        <footer class="absolute bottom-6 w-full text-center z-0">
            <div class="flex flex-col items-center space-y-2">
                <p class="text-gray-400 text-xs">&copy; {{ date('Y') }} Jason Torres. All rights reserved.</p>
            </div>
        </footer>

    </body>
</html>
