<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
    <header>
        @yield('header')
        <title>Titulo @yield('title')</title>
    </header>
    <body class="antialiased">
        @yield('component')
    </body>
    <footer>
        @yield('footer')
    </footer>
</html>

