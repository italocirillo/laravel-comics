<main class="app-card-hero">
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <button class="button current-series">
            <a href="#">
                <h1>Current series</h1>
            </a>
        </button>
        <div class="row">
            @foreach ($comics as $card)
                <div class="card">
                    <div class="cornice">
                        <img src="{{ $card['thumb'] }}" alt="$card['series']">
                    </div>
                    <h4>{{ $card['series'] }}</h4>
                </div>
            @endforeach
        </div>
        <div class="load-more">
            <button class="button">
                <a href="#">load more</a>
            </button>
        </div>
    </div>
</main>
