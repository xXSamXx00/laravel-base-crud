@extends('layouts.app')

@section('title', 'Comic')

@section('content')

<div class="single_comic">
    <div class="blue_bar position-relative">
        <div class="container px_container">
            <div class="card_comic position-absolute">
                <img class="position-relative" src="{{ $comic->thumb }}" alt="Comics">
                <div class="text">
                    <p class="position-absolute">Comic Book</p>
                    <p class="position-absolute">View Gallery</p>
                </div>
            </div>
        </div>
    </div>
    <div class="info_comic">
        <div class="container px_container">
            <div class="row">
                <div class="details col-8">
                    <h2>{{ $comic->title }}</h2>
                    <div class="price">
                        <div class="available">
                            <p>U.S. Price: <span>{{ $comic->price }}</span></p>
                            <p>Available</p>
                        </div>
                        <button>Check Availability &dtrif;</button>
                    </div>
                    <p class="description">{{ $comic->description }}</p>
                </div>
                <div class="advertisement col-4 d-flex flex-column align-items-end">
                    <h3>Advertisement</h3>
                    <img src="{{ asset('img/image.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="details_comic">
        <div class="container px_container">
            <div class="row gx-5">
                <div class="talent col-6">
                    <h4>Talent</h4>
                    <div class="art_by">
                        <p class="col-3">Art by:</p>
                    </div>
                    <div class="written_by">
                        <p class="col-3">Written by:</p>
                    </div>
                </div>
                <div class="specs col-6">
                    <h4>Specs</h4>
                    <div class="serie d-flex">
                        <p class="col-4">Series:</p>
                        <p class="col-8">{{ $comic->series }}</p>
                    </div>
                    <div class="price d-flex">
                        <p class="col-4">U.S. Price:</p>
                        <p class="col-8">{{ $comic->price }}</p>
                    </div>
                    <div class="sale_date d-flex">
                        <p class="col-4">On Sale Date:</p>
                        <p class="col-8">{{ $comic->sale_date }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection