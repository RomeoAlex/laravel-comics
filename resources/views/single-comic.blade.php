{{-- richiamo il layout --}}
@extends('layouts.app')

@section('page_title')
    DC COMICS
@endsection
@section('main_classes')
    blue_white
@endsection
{{-- richiamo main_content dal layout --}}
@section('main_content')
    
    {{-- <div class="my_container">
        <div class="comics-wrapper">
            @foreach ($comics as $comic)
                <div class="single_comic">  
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <span>{{ $comic['series'] }}</span>
                </div>
            @endforeach
          

        </div>
    </div> --}}
    <div class="comic-front">
        
    </div>
    <div class="my_container">
        <div class="comic-description-wrapper">
            <div class="comic-description">
                <h2>{{ $comic['title'] }}</h2>
                <div class="price-bar">
                    <div class="price-box">
                        <span class="price-value">U.S. Price</span><span class="price">{{ $comic['price'] }}</span>
                    </div>
                    <div class="check-store">
                        <a href="">Check Availability</a>
                    </div>
                    
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="advertisement">
                <img src="../images/adv.jpg" alt="">
            </div>
        </div>

    </div>
    <div class="specs_main">
        <div class="page_cont">
            <div class="specs_container">
                <div class="specs">
                    <h1>Talent</h1>
                    <div>
                        <h3>Art by:</h3>
                        <p></p>
                    </div>
                    <div>
                        <h3>Written by:</h3>
                        <p></p>
                    </div>
                </div>
                <div class="specs">
                    <h1>Specs</h1>
                    <div>
                        <h3>Series:</h3>
                        <p>{{ $comic['series'] }}</p>
                    </div>
                    <div>
                        <h3>U.S. Price:</h3>
                        <p>{{ $comic['price'] }}</p>
                    </div>
                    <div>
                        <h3>On Sale date:</h3>
                        <p>{{ $comic['sale_date'] }}</p>
                    </div>
                </div>
            </div>
    
    
        </div>
    </div>


@endsection