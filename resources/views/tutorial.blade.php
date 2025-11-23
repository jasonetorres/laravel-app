<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Build This Portfolio | Jason Torres</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[#0a0a0a] text-gray-300 font-sans min-h-screen selection:bg-indigo-500 selection:text-white">

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
                    🚀 How to Build & Deploy a Simple Laravel Portfolio
                </h1>
                <p class="text-xl text-gray-400 leading-relaxed max-w-2xl border-l-4 border-indigo-500 pl-4 italic">
                    Hey there! Let's walk through creating a minimal, high-impact dark-themed portfolio page using **Laravel and Tailwind CSS**, and then deploy it to Laravel Cloud in minutes. No complex setups, just pure speed.
                </p>
            </header>

            <div class="space-y-20">
                
                <section>
                    <h2 class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3">1. Prerequisites</h2>
                    <p class="mb-8 text-gray-400 leading-relaxed">Before we dive into the code, you'll need to make sure your local machine is set up for modern Laravel development. Check off the following tools:</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center p-4 bg-[#181818] border border-gray-700 rounded-xl shadow-lg hover:border-indigo-500 transition-colors">
                            <div class="w-3 h-3 rounded-full bg-green-500 mr-3 animate-pulse"></div>
                            <span class="text-gray-200 font-medium">PHP 8.2+</span>
                        </div>
                        <div class="flex items-center p-4 bg-[#181818] border border-gray-700 rounded-xl shadow-lg hover:border-indigo-500 transition-colors">
                            <div class="w-3 h-3 rounded-full bg-green-500 mr-3 animate-pulse"></div>
                            <span class="text-gray-200 font-medium">Composer</span>
                        </div>
                        <div class="flex items-center p-4 bg-[#181818] border border-gray-700 rounded-xl shadow-lg hover:border-indigo-500 transition-colors">
                            <div class="w-3 h-3 rounded-full bg-green-500 mr-3 animate-pulse"></div>
                            <span class="text-gray-200 font-medium">Node.js & NPM</span>
                        </div>
                        <div class="flex items-center p-4 bg-[#181818] border border-gray-700 rounded-xl shadow-lg hover:border-indigo-500 transition-colors">
                            <div class="w-3 h-3 rounded-full bg-green-500 mr-3 animate-pulse"></div>
                            <span class="text-gray-200 font-medium">Git</span>
                        </div>
                    </div>
                </section>
                
                <hr class="border-gray-800" />

                <section>
                    <h2 class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3">2. Create the Project</h2>
                    <p class="mb-8 text-gray-400 leading-relaxed">With your tools ready, let's fire up a new Laravel project. We'll use the <code class="text-sm bg-gray-800 text-yellow-300 px-1.5 py-0.5 rounded font-mono">--git</code> flag to save us a step in repository setup.</p>
                    
                    <div class="rounded-xl overflow-hidden bg-white border border-gray-200 shadow-2xl shadow-indigo-500/50 my-8 transform hover:scale-[1.01] transition-transform duration-300">
                        <div class="flex items-center px-4 py-3 bg-gray-100 border-b border-gray-200">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                            </div>
                            <div class="flex-1 text-center mr-12">
                                <span class="text-xs text-gray-500 font-medium">Terminal Command</span>
                            </div>
                        </div>
                        <div class="p-6 overflow-x-auto">
                            <pre class="font-mono text-sm text-gray-800 leading-relaxed"><code>laravel new portfolio --git --no-interaction

<span class="text-gray-500"># Navigate into your project</span>
cd portfolio</code></pre>
                        </div>
                    </div>
                    <p class="text-gray-500 text-sm mt-4 italic">**Tip:** This creates a 'portfolio' directory. Head into it before the next step!</p>
                </section>
                
                <hr class="border-gray-800" />

                <section>
                    <h2 class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3">3. Minimal Design Setup</h2>
                    <p class="mb-8 text-gray-400 leading-relaxed">Time to make this look like a portfolio. We're going for a clean, centered, single-column layout using **Tailwind CSS** (which Laravel includes by default). Open <code class="text-sm bg-gray-800 text-yellow-300 px-1.5 py-0.5 rounded font-mono">resources/views/welcome.blade.php</code> and completely replace its content with the minimal setup below:</p>
                    
                    <div class="rounded-xl overflow-hidden bg-white border border-gray-200 shadow-2xl shadow-indigo-500/50 my-8 transform hover:scale-[1.01] transition-transform duration-300">
                        <div class="flex items-center px-4 py-3 bg-gray-100 border-b border-gray-200">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                            </div>
                            <div class="flex-1 text-center mr-12">
                                <span class="text-xs text-gray-500 font-medium">resources/views/welcome.blade.php</span>
                            </div>
                        </div>
                        <div class="p-6 overflow-x-auto">
                            <pre class="font-mono text-sm text-gray-800 leading-relaxed"><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="dark"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;title&gt;My Portfolio&lt;/title&gt;
    @vite(['resources/css/app.css', 'resources/js/app.js'])
&lt;/head&gt;
&lt;body class="bg-[#0a0a0a] text-white flex items-center justify-center min-h-screen"&gt;
    &lt;main class="text-center"&gt;
        &lt;!-- Avatar (make sure you add this image!) --&gt;
        &lt;img src="/images/avatar.jpg" class="w-32 h-32 rounded-full mx-auto mb-6 ring-4 ring-indigo-500 ring-offset-2 ring-offset-[#0a0a0a] shadow-xl"&gt;
        
        &lt;!-- Content --&gt;
        &lt;h1 class="text-3xl font-bold mb-2 text-white"&gt;Your Name&lt;/h1&gt;
        &lt;p class="text-gray-400 mb-6"&gt;Developer & Designer&lt;/p&gt;
        
        &lt;!-- Socials --&gt;
        &lt;div class="flex justify-center space-x-4"&gt;
            &lt;!-- Add your SVG icons here for GitHub, LinkedIn, etc. --&gt;
        &lt;/div&gt;
    &lt;/main&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                        </div>
                    </div>
                </section>
                
                <hr class="border-gray-800" />

                <section>
                    <h2 class="text-3xl font-bold text-indigo-400 mb-6 border-b border-gray-800 pb-3">4. Deployment to Laravel Cloud</h2>
                    <p class="mb-8 text-gray-400 leading-relaxed">The final step! **Laravel Cloud** makes taking your project live incredibly simple. You just need to push your code to a repository and link it up.</p>
                    
                    <h3 class="text-xl font-semibold text-white mt-8 mb-4">A. Commit & Push to GitHub</h3>
                    <p class="mb-4 text-gray-400 leading-relaxed">If you haven't already set up your GitHub repository, use these commands:</p>
                    
                    <div class="rounded-xl overflow-hidden bg-white border border-gray-200 shadow-2xl shadow-indigo-500/50 my-8 transform hover:scale-[1.01] transition-transform duration-300">
                        <div class="flex items-center px-4 py-3 bg-gray-100 border-b border-gray-200">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                            </div>
                            <div class="flex-1 text-center mr-12">
                                <span class="text-xs text-gray-500 font-medium">Terminal (Git Commands)</span>
                            </div>
                        </div>
                        <div class="p-6 overflow-x-auto">
                            <pre class="font-mono text-sm text-gray-800 leading-relaxed"><code>git add .
git commit -m "feat: implement minimal portfolio design"
git branch -M main
git remote add origin https://github.com/yourusername/portfolio.git
git push -u origin main</code></pre>
                        </div>
                    </div>

                    <h3 class="text-xl font-semibold text-white mt-8 mb-4">B. Connect & Deploy on Laravel Cloud</h3>
                    <div class="bg-[#181818] border border-indigo-500/50 rounded-xl p-6 shadow-xl">
                        <ol class="list-none pl-0 space-y-4 text-gray-300">
                            <li class="flex items-start">
                                <span class="bg-indigo-600 text-white w-6 h-6 rounded-full flex items-center justify-center mr-3 flex-shrink-0 font-bold">1</span>
                                <span>Log in to the **Laravel Cloud Dashboard**.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-indigo-600 text-white w-6 h-6 rounded-full flex items-center justify-center mr-3 flex-shrink-0 font-bold">2</span>
                                <span>Click the **"New Project"** button.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-indigo-600 text-white w-6 h-6 rounded-full flex items-center justify-center mr-3 flex-shrink-0 font-bold">3</span>
                                <span>Connect your GitHub account and select your **`portfolio`** repository.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-indigo-600 text-white w-6 h-6 rounded-full flex items-center justify-center mr-3 flex-shrink-0 font-bold">4</span>
                                <span>Follow the final prompts and click **"Deploy"**! Your site is live!</span>
                            </li>
                        </ol>
                    </div>
                </section>

            </div>

            <div class="mt-24 pt-12 border-t border-gray-800 text-center">
                <p class="text-gray-600 text-sm">That's it! Built with 💖 and **Laravel & Tailwind CSS**.</p>
            </div>

        </article>
    </main>

</body>
</html>