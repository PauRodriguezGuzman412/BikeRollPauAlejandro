<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

