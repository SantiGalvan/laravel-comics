
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
                    <li class=""><a href="">Characters</a></li>
                    <li class=""><a href="">Comics</a></li>
                    <li class=""><a href="">Movies</a></li>
                    <li class=""><a href="">Tv</a></li>
                    <li class=""><a href="">Games</a></li>
                    <li class=""><a href="">Collectibles</a></li>
                    <li class=""><a href="">Videos</a></li>
                    <li class=""><a href="">Fans</a></li>
                    <li class=""><a href="">News</a></li>
                    <li class=""><a href="">Shop</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
</body>
</html>