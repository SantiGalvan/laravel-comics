
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
    <header>
        <div class="container header-elements">
            <figure>
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC Comics">
                </a>
            </figure>
            <nav>
                <ul class="header-list">
                    @foreach (config('header_menu') as $link)
                    <li class="{{ Route::is($link['route_name']) ? 'current' : ''}}"><a href="">{{$link['text']}}</a></li>
                    @endforeach

                </ul>
            </nav>
        </div>
    </header>

    {{-- Main --}}
    <main>

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
     <footer>
        <div class="upper-footer">
            <div class="container footer-container">
                <nav>
                    <div class="col">
                        <h4>Dc comics</h4>
                        <ul>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        <h4>Shop</h4>
                        <ul>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Dc</h4>
                        <ul>
                            <li><a href="#">Therms of use</a></li>
                            <li><a href="#">Privacy policy (NEW)</a></li>
                            <li><a href="#">Add Choise</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                            <li><a href="#">CPSC Certification</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Dc comics</h4>
                        <ul>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="logo-bg"></div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container footer-container">
                <div class="actions">
                    <button>Sign-up now!</button>
                </div>
                <div class="follow">
                    <h2>Follow us</h2>
                    <figure>
                        <a href="https://www.facebook.com/?locale=it_IT" target="_blank">
                            <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="Facebook">
                        </a>
                        <a href="https://twitter.com/?lang=it" target="_blank">
                            <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="Twitter">
                        </a>
                        <a href="https://www.youtube.com/" target="_blank">
                            <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="YouTube">
                        </a>
                        <a href="https://www.pinterest.it/" target="_blank">
                            <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="Pinterest">
                        </a>
                        <a href="https://www.pscp.tv/" target="_blank">
                            <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="Periscope">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>