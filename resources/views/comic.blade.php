@extends('layouts.main')

@section('title', 'Comic')

@section('cdns')

{{-- FotAwesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('main-content')

{{-- Section View --}}
<section id="section-view">
    <div class="container">
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="">
            <h4>View Gallery</h4>
            <span>Comic book</span>
        </div>
    </div>
</section>

{{-- Section Comic --}}
<section id="section-comic">
    <div class="container">
        <div class="comic-container">
            <div class="comic-info">
                <h1>{{$comic['title']}}</h1>
                <div class="comic-price">
                    <div class="price">
                        <div class="price-info">
                            <h4>U.S. Price: <span>{{$comic['price']}}</span></h4>
                        </div>
                        <div class="price-text">
                            <h4>Available</h4>
                        </div>
                    </div>
                    <div class="check">
                        <p>Check availability <i class="fa-solid fa-sort-down" ></i></p>
                    </div>
                </div>
                <div class="comic-description">
                    <p>{{$comic['description']}}</p>
                </div>
            </div>
            <div class="comic-gallery">
                <h4>Advertisement</h4>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="ADV">
            </div>
        </div>
    </div>
</section>

{{-- Section Info --}}
<section id="section-info"></section>

@endsection