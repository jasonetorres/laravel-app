<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $profile['name'] }} | Developer Advocate at JetBrains</title>
    <meta name="description" content="Jason Torres is a Developer Advocate at JetBrains, a live streamer, and a filmmaker. Talks, writing, and videos.">
    <meta name="author" content="Jason Torres">
    <meta name="theme-color" content="#08090c">
    <link rel="canonical" href="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Jason Torres">
    <meta property="og:title" content="Jason Torres | Developer Advocate at JetBrains">
    <meta property="og:description" content="Developer Advocate at JetBrains. Live streamer and filmmaker. Talks, writing, and videos.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ url($profile['photo']) }}">
    <meta property="og:image:alt" content="{{ $profile['photo_alt'] }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Jason Torres | Developer Advocate at JetBrains">
    <meta name="twitter:description" content="Developer Advocate at JetBrains. Live streamer and filmmaker. Talks, writing, and videos.">
    <meta name="twitter:image" content="{{ url($profile['photo']) }}">
    <meta name="twitter:image:alt" content="{{ $profile['photo_alt'] }}">
    <link rel="alternate" type="application/rss+xml" title="Jason Torres" href="{{ url('/rss') }}">
    @include('partials.fonts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => $profile['name'],
            'jobTitle' => 'Developer Advocate',
            'worksFor' => ['@type' => 'Organization', 'name' => 'JetBrains'],
            'url' => url('/'),
            'image' => url($profile['photo']),
            'email' => $profile['email'],
            'homeLocation' => ['@type' => 'Place', 'name' => $profile['location']],
            'sameAs' => [
                'https://github.com/jasonetorres',
                'https://www.linkedin.com/in/thejasontorres',
                'https://www.linkedin.com/newsletters/musings-of-an-idiot-7414020052481413120/',
                'https://x.com/TasonJorres',
                'https://www.youtube.com/@TheJasonTorres',
                'https://thejasontorres.com/',
                'https://lookatmyboyjason.com/',
                'https://film2code.vercel.app',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
</head>
<body class="min-h-screen bg-ink font-sans text-mist antialiased">
    <a class="skip-link" href="#content">Skip to content</a>

    <header class="sticky top-0 z-20 border-b border-white/10 bg-ink/85 backdrop-blur-md">
        <div class="mx-auto flex max-w-5xl flex-wrap items-center justify-between gap-x-6 gap-y-3 px-5 py-3 sm:px-8">
            <a href="{{ url('/') }}" class="rounded-sm text-sm font-medium text-white outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow">
                Jason Torres
            </a>
            <nav aria-label="On this page" class="flex flex-wrap gap-x-5 gap-y-2 text-sm">
                <a class="rounded-sm text-faint outline-none hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow" href="#featured">Featured</a>
                <a class="rounded-sm text-faint outline-none hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow" href="#talks">Talks</a>
                <a class="rounded-sm text-faint outline-none hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow" href="#writing">Writing</a>
                <a class="rounded-sm text-faint outline-none hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow" href="#videos">Videos</a>
            </nav>
        </div>
    </header>

    <main id="content" tabindex="-1" class="mx-auto max-w-5xl scroll-mt-20 px-5 pb-24 outline-none sm:px-8">
        <section class="rise grid items-center gap-8 py-12 sm:grid-cols-[auto_1fr] sm:py-20" aria-labelledby="intro-heading">
            <img
                src="{{ $profile['photo'] }}"
                alt="{{ $profile['photo_alt'] }}"
                width="640"
                height="640"
                class="h-28 w-28 rounded-2xl object-cover ring-1 ring-white/15 shadow-[0_0_48px_rgba(246,196,83,0.18)] sm:h-40 sm:w-40"
            >
            <div>
                <p class="text-xs uppercase tracking-[0.18em] text-glow">{{ $profile['role'] }}</p>
                <h1 id="intro-heading" class="mt-3 text-4xl font-semibold leading-tight text-white sm:text-5xl">
                    {{ $profile['name'] }}
                </h1>
                <p class="mt-4 max-w-xl text-base leading-relaxed text-mist sm:text-lg">
                    {{ $profile['tagline'] }}
                    <span class="text-faint">{{ $profile['location'] }}.</span>
                </p>
                <a
                    href="{{ $profile['newsletter']['href'] }}"
                    class="mt-6 inline-flex min-h-11 items-center rounded-full bg-glow px-4 text-sm font-medium text-ink outline-none hover:bg-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    {{ $profile['newsletter']['cta'] }}
                    <span class="sr-only">, {{ $profile['newsletter']['title'] }} (opens in a new tab)</span>
                </a>
                <ul class="mt-4 flex flex-wrap gap-2">
                    @foreach ($profile['links'] as $link)
                        <li>
                            <a
                                href="{{ $link['href'] }}"
                                class="inline-flex min-h-11 items-center rounded-full border border-white/15 px-3.5 text-sm text-mist outline-none hover:border-glow/60 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow"
                                @if (str_starts_with($link['href'], 'http')) target="_blank" rel="me noopener noreferrer" @endif
                            >
                                {{ $link['label'] }}
                                @if (str_starts_with($link['href'], 'http'))
                                    <span class="sr-only"> (opens in a new tab)</span>
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section id="featured" class="rise scroll-mt-24" aria-labelledby="featured-heading" style="animation-delay: 70ms">
            <div class="flex items-baseline gap-4">
                <span class="text-xs text-glow" aria-hidden="true">01</span>
                <div>
                    <h2 id="featured-heading" class="text-2xl font-semibold text-white sm:text-3xl">Featured</h2>
                    <p class="mt-2 text-sm text-faint">Five appearances worth starting with.</p>
                </div>
            </div>
            <ul class="mt-6 grid gap-3 sm:grid-cols-2">
                @foreach ($featured as $item)
                    <li>
                        <a
                            href="{{ $item['href'] }}"
                            class="entry-link card-lift group block h-full rounded-2xl border border-white/10 bg-white/[0.03] p-5 outline-none hover:border-glow/45 hover:bg-white/[0.05] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow"
                            @if (str_starts_with($item['href'], 'http')) target="_blank" rel="noopener noreferrer" @endif
                        >
                            <div class="flex items-center justify-between gap-3 text-[11px] uppercase tracking-[0.14em]">
                                <span class="text-glow">{{ $item['role'] ?? 'Featured' }}</span>
                                <time datetime="{{ $item['date'] }}">{{ $item['date_label'] }}</time>
                            </div>
                            <h3 class="mt-3 text-lg font-medium leading-snug text-white">{{ $item['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-mist">{{ $item['source'] }}</p>
                            @if (! empty($item['summary']))
                                <p class="mt-2 text-sm leading-relaxed text-faint">{{ $item['summary'] }}</p>
                            @endif
                            @if (str_starts_with($item['href'], 'http'))
                                <span class="sr-only"> (opens in a new tab)</span>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>

        <section id="talks" class="mt-16 scroll-mt-24 sm:mt-24" aria-labelledby="talks-heading">
            <div class="flex items-baseline gap-4">
                <span class="text-xs text-glow" aria-hidden="true">02</span>
                <div>
                    <h2 id="talks-heading" class="text-2xl font-semibold text-white sm:text-3xl">Talks &amp; Appearances</h2>
                    <p class="mt-2 text-sm text-faint">Newest first. {{ count($talks) }} listed.</p>
                </div>
            </div>
            @include('partials.entries', ['items' => $talks])
        </section>

        <section id="writing" class="mt-16 scroll-mt-24 sm:mt-24" aria-labelledby="writing-heading">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div class="flex items-baseline gap-4">
                    <span class="text-xs text-glow" aria-hidden="true">03</span>
                    <div>
                        <h2 id="writing-heading" class="text-2xl font-semibold text-white sm:text-3xl">Writing</h2>
                        <p class="mt-2 text-sm text-faint">Newest first, starting with the newsletter.</p>
                    </div>
                </div>
                <a href="{{ url('/rss') }}" class="rounded-sm text-sm text-faint outline-none hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow">RSS</a>
            </div>
            <a
                href="{{ $profile['newsletter']['href'] }}"
                class="card-lift mt-6 flex flex-col gap-4 rounded-2xl border border-glow/40 bg-glow/10 p-5 outline-none hover:border-glow focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow sm:flex-row sm:items-center sm:justify-between"
                target="_blank"
                rel="noopener noreferrer"
            >
                <span>
                    <span class="text-[11px] uppercase tracking-[0.14em] text-glow">Newsletter</span>
                    <span class="mt-2 block text-xl font-medium text-white">{{ $profile['newsletter']['title'] }}</span>
                    <span class="mt-2 block text-sm leading-relaxed text-mist">{{ $profile['newsletter']['summary'] }}</span>
                </span>
                <span class="inline-flex min-h-11 shrink-0 items-center justify-center rounded-full bg-glow px-4 text-sm font-medium text-ink">
                    {{ $profile['newsletter']['cta'] }}
                    <span class="sr-only"> (opens in a new tab)</span>
                </span>
            </a>
            @include('partials.entries', ['items' => $writing])
        </section>

        <section id="videos" class="mt-16 scroll-mt-24 sm:mt-24" aria-labelledby="videos-heading" x-data="{ filter: 'all' }">
            <div class="flex items-baseline gap-4">
                <span class="text-xs text-glow" aria-hidden="true">04</span>
                <div>
                    <h2 id="videos-heading" class="text-2xl font-semibold text-white sm:text-3xl">Videos &amp; Streams</h2>
                    <p class="mt-2 text-sm text-faint">Recordings, streams, shorts, and a podcast. Newest first.</p>
                </div>
            </div>

            <div class="mt-6 flex flex-wrap gap-2" role="group" aria-label="Filter videos">
                @foreach (['all' => 'All', 'recording' => 'Talks', 'stream' => 'Streams', 'short' => 'Shorts', 'podcast' => 'Podcast'] as $value => $label)
                    <button
                        type="button"
                        class="min-h-11 rounded-full border px-3.5 text-sm outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-glow"
                        :class="filter === '{{ $value }}' ? 'border-glow/50 bg-glow/15 text-white' : 'border-white/10 text-faint hover:border-white/25 hover:text-white'"
                        :aria-pressed="filter === '{{ $value }}'"
                        @click="filter = '{{ $value }}'"
                    >{{ $label }}</button>
                @endforeach
            </div>

            <ul class="mt-2 divide-y divide-white/10 border-t border-white/10">
                @foreach ($videos as $item)
                    <li x-show="filter === 'all' || filter === '{{ $item['kind'] }}' || (filter === 'stream' && '{{ $item['kind'] }}' === 'upcoming')">
                        @include('partials.entry', ['item' => $item])
                    </li>
                @endforeach
            </ul>
        </section>
    </main>

    <footer class="border-t border-white/10">
        <div class="mx-auto flex max-w-5xl flex-col gap-4 px-5 py-8 text-sm text-faint sm:flex-row sm:items-center sm:justify-between sm:px-8">
            <p>&copy; {{ date('Y') }} Jason Torres.</p>
            <ul class="flex flex-wrap gap-x-5 gap-y-2">
                @foreach ($profile['also'] as $link)
                    <li>
                        <a
                            href="{{ $link['href'] }}"
                            class="rounded-sm text-faint outline-none hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow"
                            target="_blank"
                            rel="noopener noreferrer"
                        >{{ $link['label'] }}<span class="sr-only"> (opens in a new tab)</span></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </footer>
</body>
</html>
