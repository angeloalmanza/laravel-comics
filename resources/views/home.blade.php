@extends("layout.master")

@section("contenuto")
@php
    $comics = config("comics");
@endphp

<img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="" class="jumbotron">

<div class="container position-relative">
    <button class="btn btn-primary button-series">Current Series</button>
    <div class="row row-cols-6">
        @foreach($comics as $comic)
            <div class="col mb-3">
                <x-card>
                    <x-slot:thumb>{{$comic['thumb']}}</x-slot>
                    <x-slot:title>{{$comic['title']}}</x-slot>
                </x-card>
            </div>
        @endforeach
    </div>

   <div class="d-flex justify-content-center align-items-center">
        <button class="btn btn-primary mb-4">Load More</button>
   </div>
</div>

<div class="bg-primary shop">
    <ul class="shop-list p-3 text-white">
        <li><img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt=""> Digital Comics</li>
        <li><img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt=""> DC Merchandise</li>
        <li><img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt=""> Subscription</li>
        <li><img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt=""> DC Comic Locator</li>
        <li><img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt=""> DC Power Visa</li>
    </ul>
</div>
@endsection