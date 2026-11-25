<ul class="mt-4 divide-y divide-line border-t border-line">
    @foreach ($items as $item)
        <li>
            @include('partials.entry', ['item' => $item])
        </li>
    @endforeach
</ul>
