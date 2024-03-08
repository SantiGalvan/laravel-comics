@extends('layouts.main')

@section('title', 'Comic')

@section('main-content')

{{-- Section View --}}
<section id="section-view"></section>

{{-- Section Comic --}}
<section id="section-comic">
    <div class="container">
        <div class="comic-container">
            <div class="comic-info">
                <h1>{{$comic['title']}}</h1>
                <div class="comic-price"></div>
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