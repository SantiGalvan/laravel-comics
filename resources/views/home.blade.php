
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME', 'Dc Comics')}} | Home</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/ico" >

    <!-- Style -->
    @vite('resources/js/app.js')
</head>
<body>

    {{-- Header --}}
    @include('includes.header')

    {{-- Main --}}
    <main>

        {{-- Section Jumbotron --}}
        <section id="section-jumbotron"></section>

        {{-- Section Content --}}
        <section id="section-content">
            <div class="container container-card">
                @foreach (config('comics') as $comic)
                <div class="dc-card">
                    <figure>
                        <img src="{{$comic['thumb']}}" alt="">
                    </figure>
                    <h3>{{$comic['title']}}</h3>
                </div>
                @endforeach
            </div>
        </section>

        {{-- Section Links --}}
        <section id="section-links">
            <div class="container links-content">
                <div class="links-col">
                    <a href="#">
                        <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="Digital comics">
                    </a>
                    <h4>Digital comics</h4>
                </div>
                <div class="links-col">
                    <a href="#">
                        <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="Dc merchandise">
                    </a>
                    <h4>Dc merchandise</h4>
                </div>
                <div class="links-col">
                    <a href="#">
                        <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="Subscriptions">
                    </a>
                    <h4>Subscriptions</h4>
                </div>
                <div class="links-col">
                    <a href="#">
                        <img class="img-small" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="Comic shop locator">
                    </a>
                    <h4>Comic shop locator</h4>
                </div>
                <div class="links-col">
                    <a href="#">
                        <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="Dc power visa">
                    </a>
                    <h4>Dc power visa</h4>
                </div>
            </div>
        </section>
    </main>

    {{-- Footer --}}
    @include('includes.footer')
    
</body>
</html>