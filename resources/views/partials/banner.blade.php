<div class="banner">
    <div class="container">
        <ul>
            @foreach ($banner as $item)
                <li>
                    <a href="{{ $item['url'] }}">
                        <img src="{{ Vite::asset('resources/img/' . $item['src']) }}" alt="{{ $item['name'] }}">
                        <p>{{ $item['name'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
