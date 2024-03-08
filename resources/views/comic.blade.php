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
            </div>
            <div class="comic-gallery"></div>
        </div>
    </div>
</section>

{{-- Section Info --}}
<section id="section-info"></section>

@endsection