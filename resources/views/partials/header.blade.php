<header>
    <div class="container">
        <div class="sezione-logo">
            <a href="#">
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </a>
        </div>
        <nav>
            <ul>
                @foreach ($links as $link)
                    <li class="$link ? 'active' : ''">
                        <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
