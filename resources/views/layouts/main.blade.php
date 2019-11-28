<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>L6 Microservices</title>

    </head>
    <body>
        @include('layouts.header')

        <div id="app">
            @yield('content')
        </div>

        @include('layouts.footer')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
