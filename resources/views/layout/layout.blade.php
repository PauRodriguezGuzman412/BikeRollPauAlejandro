<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}">    
<script src="{{ asset('js/jquery.3.6.3.min.js')}}"></script>
    <style type="text/css">
    @font-face {
        font-family: Poppins;
        src: url('{{ public_path('Poppins/Poppins-Regular.tff') }}');
    }
    </style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
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

