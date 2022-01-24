@extends('layouts.app')

@section('title', 'Movies')

@section('content')

<div class="container">
    <h2>Current Movies</h2>
    <div class="series row">
        @foreach($movies as $movie)
        <div class="col-2">
            <a href="{{ route('movie', $movie->id) }}">
                <div class="card_comics">
                    <img src="{{ $movie['thumb'] }}" alt="Movies">
                    <h3>{{ $movie->title }}</h3>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="button">
        <button>Load More</button>
    </div>
</div>
<div class="menu_dc">
    <div class="container">
        <div class="icon">
            <div class="img">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt>
            </div>
            <h3>Digital comics</h3>
        </div>
        <div class="icon">
            <div class="img">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt>
            </div>
            <h3>DC merchandise</h3>
        </div>
        <div class="icon">
            <div class="img">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt>
            </div>
            <h3>Subscription</h3>
        </div>
        <div class="icon">
            <div class="img">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt>
            </div>
            <h3>Comic shop locator</h3>
        </div>
        <div class="icon">
            <div class="img">
                <img style="height: 40px" src="{{ asset('img/buy-dc-power-visa.svg') }}" alt>
            </div>
            <h3>DC power visa</h3>
        </div>
    </div>
</div>

@endsection