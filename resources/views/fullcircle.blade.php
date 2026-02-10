<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The Architecture of a Year: Why I Built FullCircle</title>
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

<main class="max-w-3xl mx-auto px-6 py-20">
    <a
        href="/"
        class="group inline-flex items-center text-sm font-medium text-gray-500 hover:text-indigo-400 transition-colors mb-16"
    >
        <svg
            class="w-4 h-4 mr-2 transform group-hover:-translate-x-1 transition-transform"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Back to Home
    </a>

    <article>
        <header class="mb-16">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-8 tracking-tight leading-tight">
                The Architecture of a Year: Why We Can’t Afford to Waste Time
            </h1>

            <img
                src="https://i.postimg.cc/5ym7WrY6/fullcirclethumb.png"
                alt="FullCircle Application Interface"
                class="max-w-full rounded-xl shadow-2xl mb-12 mx-auto border border-white/10"
            />

            <p class="text-xl text-gray-400 leading-relaxed max-w-2xl border-l-4 border-indigo-500 pl-4 italic">
                Time is our only non-renewable resource. I realized that <strong class="text-gray-100">forgetting how you spent your time is a form of wasting it.</strong> FullCircle was built to capture momentum, personally and professionally.
            </p>
        </header>

        <div class="space-y-20">
            <section>
                <h2 class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3">
                    1. Capturing Momentum 🚀
                </h2>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    Most of us reach "Performance Review" season and blank out. We forget the small wins in February because we’re exhausted by November. FullCircle acts as a <strong>Proof of Growth</strong>. By maintaining a strict chronological record, you create a holistic map of your year.
                </p>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    In most social apps, "The Algorithm" decides what is relevant. In FullCircle, **Time is the only King**. We implemented a dual-sort system to ensure that even if you upload a dozen memories at once, your timeline remains an accurate, unshakeable ledger of your life.
                </p>

                <div class="rounded-xl overflow-hidden bg-[#111] border border-white/10 shadow-2xl shadow-indigo-500/10 my-8">
                    <div class="flex items-center px-4 py-3 bg-[#161616] border-b border-white/5">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                        </div>
                        <div class="flex-1 text-center mr-12">
                            <span class="text-xs text-zinc-500 font-medium font-mono">Chronological Integrity (SQL)</span>
                        </div>
                    </div>
                    <div class="p-6 overflow-x-auto">
                        <pre class="font-mono text-sm text-gray-300 leading-relaxed whitespace-pre"><code>-- Ensuring order by event date AND creation time
-- This prevents "out of order" memories on the same day
SELECT * FROM logs
WHERE user_id = $1
ORDER BY event_date DESC, created_at DESC;</code></pre>
                    </div>
                </div>
            </section>

            <hr class="border-gray-800" />

            <section>
                <h2 class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3">
                    2. The AI Career Coach: JSON Export 🛠️
                </h2>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    While other platforms lock your data in a "walled garden," FullCircle gives it back to you. The <strong>JSON Export</strong> provides a structured narrative of your life. This isn't just about backup; it's about interoperability with the next generation of tools.
                </p>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    By owning a machine-readable history of your year, you can leverage Large Language Models (LLMs) to do the heavy lifting for you. Whether you are building a resume or preparing for a high-stakes meeting, your history is no longer a collection of vague memories—it is a database of value.
                </p>

                <div class="rounded-xl overflow-hidden bg-[#111] border border-white/10 shadow-2xl shadow-indigo-500/10 my-8">
                    <div class="flex items-center px-4 py-3 bg-[#161616] border-b border-white/5">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                        </div>
                        <div class="flex-1 text-center mr-12">
                            <span class="text-xs text-zinc-500 font-medium font-mono">Workflow: JSON to AI Pitch</span>
                        </div>
                    </div>
                    <div class="p-6 overflow-x-auto">
                        <pre class="font-mono text-sm text-gray-300 leading-relaxed whitespace-pre"><code>1. Click 'Export' to get your full yearly log
2. Upload the .json file to your preferred LLM
3. Prompt: "Analyze this data. What are my top 5
   professional milestones and how do they
   justify a 15% salary increase?"
4. Result: A data-backed, persuasive growth narrative.</code></pre>
                    </div>
                </div>

                <p class="mb-8 text-gray-400 leading-relaxed">
                    The logic behind the export is clean and comprehensive, mapping every detail from trip names to visibility settings. This ensures that the context of your moments remains intact, even outside of the app environment.
                </p>

                <div class="rounded-xl overflow-hidden bg-[#111] border border-white/10 shadow-2xl shadow-indigo-500/10 my-8">
                    <div class="flex items-center px-4 py-3 bg-[#161616] border-b border-white/5">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                        </div>
                        <div class="flex-1 text-center mr-12">
                            <span class="text-xs text-zinc-500 font-medium font-mono">src/components/Profile.tsx (Export Logic)</span>
                        </div>
                    </div>
                    <div class="p-6 overflow-x-auto">
                        <pre class="font-mono text-sm text-gray-300 leading-relaxed whitespace-pre"><code>const exportLogs = () => {
  const exportData = logs.map(log => ({
    date: log.event_date,
    title: log.title,
    description: log.description || '',
    location: log.location || '',
    trip: log.trip_name || '',
    visibility: log.is_public ? 'Public' : 'Private'
  }));

  const blob = new Blob([JSON.stringify(exportData, null, 2)],
    { type: 'application/json' });
  const url = URL.createObjectURL(blob);
  // ... download logic
};</code></pre>
                    </div>
                </div>
            </section>

            <hr class="border-gray-800" />

            <section>
                <h2 class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3">
                    3. Habitual Reflection: Streaks & Badges 🔥
                </h2>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    Growth requires consistency. To help bridge the gap between "having an experience" and "logging it," we built a gamified engine for habit formation.
                </p>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    Whether it's the "Wanderer" badge for visiting 10 different locations or maintaining a "Fire" streak, the app rewards the intentional act of memory-keeping. Features like <strong>"On This Day"</strong> constantly close the loop, showing you exactly how far you've come.
                </p>

                <div class="rounded-xl overflow-hidden bg-[#111] border border-white/10 shadow-2xl shadow-indigo-500/10 my-8">
                    <div class="flex items-center px-4 py-3 bg-[#161616] border-b border-white/5">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                        </div>
                        <div class="flex-1 text-center mr-12">
                            <span class="text-xs text-zinc-500 font-medium font-mono">Achievement System Seed</span>
                        </div>
                    </div>
                    <div class="p-6 overflow-x-auto">
                        <pre class="font-mono text-sm text-gray-300 leading-relaxed whitespace-pre"><code>Badges Unlocked:
- 'Memory Keeper': Create 25 posts
- 'Explorer': Visit 5 different places
- 'On Fire': Post 3 days in a row
- 'Year Warrior': Post 365 days in a row</code></pre>
                    </div>
                </div>
            </section>

            <hr class="border-gray-800" />

            <section>
                <h2 class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3">
                    4. Why a Web App? (PWA Advantage) 📱
                </h2>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    It was critical that FullCircle be accessible everywhere without the friction of an app store. By building it as a **Progressive Web App (PWA)**, it lives on the web but feels native on your phone. You get instant updates, offline capabilities, and it takes up almost no space on your device.
                </p>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    To get the full experience, you should save it to your home screen:
                </p>
                <div class="bg-[#111] rounded-xl p-6 border border-white/10 mb-8">
                    <h4 class="text-white font-bold mb-4">How to Install FullCircle:</h4>
                    <ul class="list-disc list-inside space-y-3 text-gray-400">
                        <li><strong class="text-gray-200">On iOS (Safari):</strong> Tap the <span class="text-indigo-400">Share</span> icon (square with arrow) and select <strong class="text-gray-200">"Add to Home Screen"</strong>.</li>
                        <li><strong class="text-gray-200">On Android (Chrome):</strong> Tap the <span class="text-indigo-400">three dots</span> menu and select <strong class="text-gray-200">"Install app"</strong> or <strong class="text-gray-200">"Add to Home screen"</strong>.</li>
                    </ul>
                </div>
                <p class="text-center mt-12">
                    <a href="https://fullcircle.bolt.host" target="_blank" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-8 rounded-full transition-all transform hover:scale-105 shadow-xl shadow-indigo-500/20">
                        Launch FullCircle App
                    </a>
                </p>
            </section>

            <hr class="border-gray-800" />

            <section>
                <h2 class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3">
                    Conclusion
                </h2>
                <p class="mb-8 text-gray-400 leading-relaxed italic max-w-2xl border-l-4 border-indigo-500 pl-4">
                    I built FullCircle to be a philosophical stand against the "fragmented self."
                </p>
                <p class="mb-8 text-gray-400 leading-relaxed max-w-2xl">
                    It’s about taking those scattered pixels and sentences across social media and bringing them back into a single, coherent circle. Stop wasting time by forgetting it. Capture it, own it, and use it to build what comes next.
                </p>
            </section>
        </div>

        <div class="mt-24 pt-12 border-t border-gray-800 text-center">
            <p class="text-gray-600 text-sm">Jason Torres &copy; 2026. All rights reserved.</p>
        </div>
    </article>
</main>

</body>
</html>
