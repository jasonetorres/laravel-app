<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The Tech Conference That Wasn't Selling Anything: My Key Takeaways from Flower City AI</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="antialiased bg-[#0a0a0a] text-gray-300 font-sans min-h-screen selection:bg-indigo-500 selection:text-white"
>
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
            <h1
                class="text-4xl sm:text-5xl font-extrabold text-white mb-8 tracking-tight leading-tight"
            >
                The Tech Conference That Wasn't Selling Anything: My Key Takeaways from Flower City AI
            </h1>

            <!-- IMAGE 1: After Title -->
            <img
                src="https://i.postimg.cc/nhj33nm7/IMG-7753.jpg"
                alt="Flower City AI conference banner"
                class="max-w-full rounded-xl shadow-2xl mb-12 mx-auto"
            />

            <p
                class="text-xl text-gray-400 leading-relaxed max-w-2xl border-l-4 border-indigo-500 pl-4 italic"
            >
                I realized this was a true community effort—unlike many conferences where talks
                revolve around a developer advocate pitching a product to hit team MRRs or KPIs,
                this event was simply about <strong
                >people, both in and out of tech, genuinely curious about the future of artificial
                    intelligence.</strong
                >
            </p>
        </header>

        <div class="space-y-20">
            <section>
                <h2
                    class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3"
                >
                    1. Community and 10-Year Predictions 🔮
                </h2>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    The opening keynote, delivered by event founder and organizer
                    <strong>Max Irwin</strong>
                    (<a
                        href="https://www.linkedin.com/in/maxirwin/"
                        class="text-indigo-400 hover:text-indigo-300"
                        target="_blank"
                    >Max Irwin</a
                    >),
                    reflected on the community's evolution: from Year 1 (<strong>basic education</strong>)
                    to the current Year 3 theme of <strong>societal impact</strong>. Max emphasized
                    the event thrives on <strong>community inertia</strong>, not advertising, a
                    point proven by how I received my ticket from my friend
                    <a
                        href="https://www.linkedin.com/in/nharris31/"
                        class="text-indigo-400 hover:text-indigo-300"
                        target="_blank"
                    >N. Harris</a
                    >.
                </p>

                <!-- IMAGE 2: After Noah Harris -->
                <img
                    src="https://i.postimg.cc/GhSMP44h/IMG-7766.jpg"
                    alt="Noah Harris speaking at Flower City AI"
                    class="max-w-full rounded-lg shadow-lg mb-12 mx-auto"
                />

                <h3 class="text-xl font-semibold text-white mt-8 mb-4">
                    Max Irwin's 10-Year Forecast:
                </h3>
                <ul
                    class="list-disc list-inside space-y-3 text-gray-400 pl-4"
                >
                    <li>
                        <strong>Economic Shift:</strong> A
                        <strong
                        >huge resurgence in the trades and domestic manufacturing</strong
                        >
                        as younger generations pivot away from desk work.
                    </li>
                    <li>
                        <strong>Ad Tech Struggles:</strong> The
                        <strong>digital advertising economy is struggling</strong>, with search
                        summaries causing click-through rates on ads and search results to drop
                        by as much as <strong>50%</strong>.
                    </li>
                    <li>
                        <strong>New Services:</strong> Expect
                        <strong
                        >fully personalized education</strong
                        >,
                        <strong>AI-powered personal advocates</strong>, and new
                        <strong>digital therapies</strong>.
                    </li>
                    <li>
                        <strong>Legal Battles:</strong> The
                        <strong>New York Times vs. OpenAI lawsuit</strong> may last <strong>20
                            years</strong>.
                    </li>
                </ul>
            </section>

            <hr class="border-gray-800" />

            <section>
                <h2
                    class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3"
                >
                    2. Generative AI in Healthcare: The In-House Advantage 🩺
                </h2>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    <strong>Carly Hochreiter</strong> from <strong>URMC</strong> shared their
                    strategy for developing generative AI tools in-house, highlighting cost and
                    customization benefits over vendor solutions.
                </p>

                <h3 class="text-xl font-semibold text-white mt-8 mb-4">
                    Pre Chart Pro Tool & Pilot Results:
                </h3>
                <p class="mb-4 text-gray-400 leading-relaxed italic">
                    The tool targets <strong>pre-charting</strong>, where providers spend
                    <strong>~1/3 of their EHR time</strong>. It uses <strong>9 clinical data
                        streams</strong> and a hybrid LLM approach (GPT-4/4O, temperature=0).
                </p>

                <!-- REBUILT TO MATCH ORIGINAL TERMINAL SNIPPET EXACTLY -->
                <div
                    class="rounded-xl overflow-hidden bg-white border border-gray-200 shadow-2xl shadow-indigo-500/50 my-8 transform hover:scale-[1.01] transition-transform duration-300"
                >
                    <div
                        class="flex items-center px-4 py-3 bg-gray-100 border-b border-gray-200"
                    >
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                        </div>
                        <div class="flex-1 text-center mr-12">
                                <span class="text-xs text-gray-500 font-medium"
                                >URMC Pilot Metrics (8 Weeks)</span
                                >
                        </div>
                    </div>
                    <div class="p-6 overflow-x-auto">
                            <pre
                                class="font-mono text-sm text-gray-800 leading-relaxed whitespace-pre"
                            ><code>Usability:       81%   # Rated easy to navigate
Helpfulness:     63%   # Highest benefit for complex patients
Time Savings:    63%   # Reported reduction in EHR time
Risk Reduction:  50%   # Reduced risk of missing information</code></pre
                            >
                    </div>
                </div>
            </section>

            <hr class="border-gray-800" />

            <section>
                <h2
                    class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3"
                >
                    3. Innovation and Infrastructure: The Rochester AI Hub Initiative 🚀
                </h2>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    This talk provided a concrete local mandate: the
                    <strong>Rochester AI Hub Initiative</strong>, aiming to make Rochester a
                    <strong>top 5 global AI hub</strong>.
                </p>

                <div
                    class="rounded-xl overflow-hidden bg-white border border-gray-200 shadow-2xl shadow-indigo-500/50 my-8 transform hover:scale-[1.01] transition-transform duration-300"
                >
                    <div
                        class="flex items-center px-4 py-3 bg-gray-100 border-b border-gray-200"
                    >
                        <div class="flex-1 text-center mr-12">
                                <span class="text-xs text-gray-500 font-medium"
                                >Rochester AI Hub Financials & Goals</span
                                >
                        </div>
                    </div>
                    <div class="p-6 overflow-x-auto">
                            <pre
                                class="font-mono text-sm text-gray-800 leading-relaxed whitespace-pre"
                            ><code>Total Funding Target:       $100M
Local Companies Involved:    80+
National Partners:           12
Infrastructure Goal:         Top 5 Global AI Hub
Focus Areas:                 Talent Pipeline, GPU Access, Research, Startups</code></pre
                            >
                    </div>
                </div>
            </section>

            <!-- IMAGE 3: Between Part 3 and Part 4 -->
            <img
                src="https://i.postimg.cc/L8YxxmPt/IMG-7764.jpg"
                alt="Rochester AI Hub illustration"
                class="max-w-full rounded-xl shadow-2xl my-16 mx-auto"
            />

            <section>
                <h2
                    class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3"
                >
                    4. The Data on Sustainable AI Usage ♻️
                </h2>
                <p class="mb-8 text-gray-400 leading-relaxed">
                    This crucial session on the environmental impact of AI was delivered by
                    <strong>Madhura Anand</strong>
                    (<a
                        href="https://www.linkedin.com/in/madhura-anand/"
                        class="text-indigo-400 hover:text-indigo-300"
                        target="_blank"
                    >Madhura Anand</a
                    >), a data professional with the <strong>City of Rochester</strong> focused
                    on policy and sustainability.
                </p>

                <h3 class="text-xl font-semibold text-white mt-8 mb-4">
                    The Problem: Inference is the Energy Monster
                </h3>
                <div
                    class="rounded-xl overflow-hidden bg-white border border-gray-200 shadow-2xl shadow-indigo-500/50 my-8"
                >
                    <div class="p-6 overflow-x-auto">
                            <pre
                                class="font-mono text-sm text-gray-800 leading-relaxed whitespace-pre"
                            ><code>Inference Dominates:  70% to 80% of model's total energy consumption
Energy Scale:         ChatGPT-4 model for one year needs ~441,000 megawatts
                      (enough power for 35,000 homes)
Inefficiency:         Response length biggest factor (85% correlation)
                      Large models waste 10-30x more energy for simple tasks</code></pre
                            >
                    </div>
                </div>

                <h3 class="text-xl font-semibold text-white mt-8 mb-4">
                    Solutions: Individual and Systemic
                </h3>
                <ul class="list-disc list-inside space-y-3 text-gray-400 pl-4">
                    <li>
                        <strong>Individual Action:</strong> Set max token limits (e.g., 200-300
                        tokens), choose smaller models, and stop prompts immediately.
                    </li>
                    <li>
                        <strong>Systemic Change:</strong> Hardware fixes needed for GPU chips
                        wasting 40% to 60% energy. Policy must require standardized, auditable
                        disclosure of energy, carbon, and water usage.
                    </li>
                </ul>
            </section>

            <hr class="border-gray-800" />

            <section>
                <h2
                    class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3"
                >
                    Conclusion
                </h2>
                <p class="mb-8 text-gray-400 leading-relaxed italic max-w-2xl border-l-4 border-indigo-500 pl-4">
                    The Flower City AI event successfully framed the technology not just as a
                    fascinating tool for personal and societal advancement, but as a critical
                    responsibility.
                </p>
                <p class="mb-8 text-gray-400 leading-relaxed max-w-2xl">
                    I realized this was a true community effort—unlike many conferences where
                    talks revolve around a developer advocate pitching a product to hit team MRRs
                    or KPIs, this event was simply about
                    <strong
                    >people, both in and out of tech, genuinely curious about the future of
                        artificial intelligence.</strong
                    >
                </p>
                <p class="mb-8 text-gray-400 leading-relaxed max-w-2xl">
                    We stand at a crossroads where we must navigate the "fascinating and
                    terrifying" future by actively participating in its design
