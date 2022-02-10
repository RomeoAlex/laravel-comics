{{-- richiamo il layout --}}
@extends('layouts.app')

@section('page_title')
    DC COMICS
@endsection
@section('main_classes')
    black_rear
@endsection
{{-- richiamo main_content dal layout --}}
@section('main_content')
    
    <div class="my_container">
        <div class="comics-wrapper">
            @foreach ($comics as $comic)
                <div class="single_comic">  
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <span>{{ $comic['series'] }}</span>
                </div>
            @endforeach
          

        </div>
    </div>


@endsection