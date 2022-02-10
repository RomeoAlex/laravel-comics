{{-- richiamo il layout --}}
@extends('layouts.app')

@section('page_title')
    DC COMICS
@endsection

{{-- richiamo main_content dal layout --}}
@section('main_content')
<div class="main_section">
    <div class="my_container">
        <div class="comics-wrapper">
            <div class="single_comic">
                @foreach ($comic as $comics)
                    
                @endforeach
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                <span>TITOLO</span>
            </div>
          

        </div>
    </div>
</div>

@endsection