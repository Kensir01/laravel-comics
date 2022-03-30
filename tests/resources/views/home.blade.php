@extends('layouts.base')

@section('pageTitle', 'Comics')

@section('content')
<main class="main_home">

    <div class="container">
        @foreach ($comics as $key => $comic)
        <a class="" href="{{route('comic_details', ['comic_id' => $key])}}">
            <div class="card_box">
                <img src="{{$comic['thumb']}}">
                    <h4 class="card_title">{{$comic['title']}}</h4>
                </div>
        </a>
        @endforeach
        <div class="load_more top">
            CURRENT SERIES
        </div>
        
    </div>
    <div class="load_more">
        LOAD MORE
    </div>
    <div class="cta">
        <ul class="nav">
            <li>
                <img src="/img/buy-comics-digital-comics.png" alt="">
                <a href="">DIGITAL COMICS</a>
            </li>
            <li>
                <img src="/img/buy-comics-merchandise.png" alt="">
                <a href="">DC MERCHANDISE</a>
            </li>
            <li>
                <img src="/img/buy-comics-subscriptions.png" alt="">
                <a href="">SUBSCRIPTION </a>
            </li>
            <li>
                <img src="/img/buy-comics-shop-locator.png" alt="">
                <a href="">COMIC SHOP LOCATOR</a>
            </li>
            <li>
                <img id="power-visa" src="/img/buy-dc-power-visa.svg" alt="">
                <a href=""> DC POWER VISA</a>
            </li>
        </ul>
    </div>
</main>

@endsection