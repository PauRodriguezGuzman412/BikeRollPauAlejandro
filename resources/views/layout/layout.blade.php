<!DOCTYPE html>
<style type="text/css">
    @font-face {
        font-family: Poppins;
        src: url('{{ public_path('Poppins/Poppins-Regular.tff') }}');
    }
    </style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
    <header>
        @yield('header')
        <title>Titulo @yield('title')</title>
    </header>
    <body class="antialiased">
        @yield('nav')
        @yield('component')
    </body>
    <footer>
        @yield('footer')
    </footer>
</html>

