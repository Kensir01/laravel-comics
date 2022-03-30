@extends('layouts.base')

@section('pageTitle', 'Single Comic')

@section('content')
<main class="main_comic-details">
    <section class="blue_band">
    </section>
    <section class="comic-details__top">
        <div class="container_comic-details__top">
            <a href="/">
                <div style="background-image: url({{$comic['thumb']}})"> 
                    <p class="top_text">comic book</p>
                    <p class="bottom_text">view gallery</p>
                </div>
            </a>
            <h1>
                {{$comic['title']}}
            </h1> 
            <div class="price-box">
                <div class="price-box__left">
                    <span>U.S PRICE: {{$comic['price']}}</span>
                    <span>Available</span>
                </div>
                <div class="price-box__right">
                    <span>Check Availability</span>
                </div>
            </div>
            <div class="text-box">
                {{$comic['description']}}
            </div>
        </div>
        <div class="adv_container">
            <p>ADVERTISEMENT</p>
            <img src="/img/adv.jpg" alt="">
        </div>
    </section>

    <section class="comic-details__bottom">
        <div class="container_comic-details__bottom__left">
            <div class="row row_1">
                <h2>Talent</h2>
            </div>
            <div class="row row_2">
                    <h4>Art by:</h4>
                <div>
                    @foreach ( $comic['artists'] as $artist )
                    <a href=""> {{$artist}}</a>
                    @endforeach
                </div>
            </div>
            <div class="row row_3">
                    <h4>Written by</h4>
                <div>
                    @foreach ( $comic['writers'] as $writer )
                    <a href=""> {{$writer}}</a>
                    @endforeach
                </div>

            </div>    
        </div>
        <div class="container_comic-details__bottom__right">
            <div class="row row_1">
                <h2>Specs</h2>
            </div>
            <div class="row row_2">
                    <h4>Series:</h4>
                <div>
                    <a href=""> {{$comic['series']}}</a>
                </div>
            </div>
            <div class="row row_3">
                    <h4>U.S. Price:</h4>
                <div>
                    <span>{{$comic['price']}}</span>
                </div>
            </div>   
            <div class="row row_4">
                    <h4>On Sale Date:</h4>
                <div>
                    <span>{{$comic['sale_date']}}</span>
                </div>
            </div>   

        </div>

        <div class="container_comic-details__bottom_bottom">
            <div class="col col-1 ">
                <h5>DIGITAL COMICS</h5>
                <div>
                    <img src="/img/buy-comics-digital-comics.png" alt="">
                </div>
            </div>
            
            <div class="col col-2">
                <h5>SHOP DC</h5>
                <div>
                    <img src="/img/buy-comics-merchandise.png" alt="">

                </div>
            </div>

            <div class="col col-3 ">
                <h5>COMIC SHOP LOCATOR</h5>
                <div>
                    <img src="/img/buy-comics-shop-locator.png" alt="">

                </div>
            </div>

            <div class="col col-4">
                    <h5>SUBSCRIPTIONS</h5>
                    <div>
                        <img src="/img/buy-comics-subscriptions.png" alt="">

                    </div>
            </div>

        </div>
    </section>
</main>

@endsection