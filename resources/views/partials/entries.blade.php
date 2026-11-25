<ul class="mt-4 divide-y divide-white/10 border-t border-white/10">
    @foreach ($items as $item)
        <li>
            @include('partials.entry', ['item' => $item])
        </li>
    @endforeach
</ul>
