<footer>
    {{-- Footer top  --}}
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <ul class="col1">
                    <div>
                        <li class="macro-list">
                            <h3>{{ $list[0]['nomeLista'] }}</h3>
                            <ul>
                                @foreach ($list[0]['elementiLista'] as $item)
                                    <li>
                                        <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="macro-list">
                            <h3>{{ $list[3]['nomeLista'] }}</h3>
                            <ul>
                                @foreach ($list[0]['elementiLista'] as $item)
                                    <li>
                                        <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </div>
                    <div>
                        <li class="macro-list">
                            <h3>{{ $list[1]['nomeLista'] }}</h3>
                            <ul>
                                @foreach ($list[0]['elementiLista'] as $item)
                                    <li>
                                        <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </div>
                    <div>
                        <li class="macro-list">
                            <h3>{{ $list[2]['nomeLista'] }}</h3>
                            <ul>
                                @foreach ($list[0]['elementiLista'] as $item)
                                    <li>
                                        <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </div>

                </ul>
                <div class="col2">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo-bg">
                </div>
            </div>
        </div>
    </div>
    {{-- Fine footer top --}}
    {{-- Footer bottom --}}
    <div class="footer-bottom">
        <div class="container">
            <div class="sing-up">
                <h4>sing-up now</h4>
            </div>
            <nav class="contacts">
                <h3>follow us</h3>
                <ul>
                    @foreach ($footerIconList as $item)
                        <li>
                            <a href={{ $item['url'] }}>
                                <img src="{{ Vite::asset('resources/img/' . $item['name']) }}"
                                    alt="{{ $item['name'] }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    {{-- Fine foter bottom --}}
</footer>
