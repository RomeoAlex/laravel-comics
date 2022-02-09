{{-- creo il layout che verrà utilizzato nella home --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- yeld per cambiare il title della pagina dinamicamente --}}
    <title>@yield('page_title')</title>
    {{-- includo il css  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    @include('partials.topbar')
    {{-- includo l'header da partials --}}
    @include('partials.header')
    @include('partials.jumbotron')
    <main>
        @yield('main_content')
    </main>
    {{-- includo il footer da partials --}}
    @include('partials.footer')
</body>
</html>