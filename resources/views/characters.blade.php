<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME', 'Dc Comics')}} | Characters</title>
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
    </main>

    {{-- Footer --}}
    @include('includes.footer')
    
</body>
</html>