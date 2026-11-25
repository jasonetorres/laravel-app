<a
    href="{{ $item['href'] }}"
    class="entry-link group grid gap-2 py-5 outline-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-glow sm:grid-cols-[16.5rem_1fr] sm:items-baseline sm:gap-8"
    @if (str_starts_with($item['href'], 'http')) target="_blank" rel="noopener noreferrer" @endif
>
    <div>
        <time class="block text-xs leading-relaxed text-faint" @if (! empty($item['date'])) datetime="{{ $item['date'] }}" @endif>{{ $item['date_label'] ?? '' }}</time>
        @if (! empty($item['role']))
            <p class="mt-1 text-[11px] uppercase tracking-[0.14em] text-glow">{{ $item['role'] }}</p>
        @elseif (! empty($item['kind']))
            <p class="mt-1 text-[11px] uppercase tracking-[0.14em] text-glow">{{ ['upcoming' => 'Upcoming', 'recording' => 'Talk', 'stream' => 'Stream', 'short' => 'Short', 'podcast' => 'Podcast'][$item['kind']] ?? ucfirst($item['kind']) }}</p>
        @endif
    </div>
    <div>
        <h3 class="text-base font-medium leading-snug text-white">{{ $item['title'] }}</h3>
        <p class="mt-1 text-sm leading-relaxed text-mist">
            {{ $item['source'] }}
            @if (! empty($item['summary']))
                <span class="text-faint"> — {{ $item['summary'] }}</span>
            @endif
        </p>
    </div>
    @if (str_starts_with($item['href'], 'http'))
        <span class="sr-only"> (opens in a new tab)</span>
    @endif
</a>
