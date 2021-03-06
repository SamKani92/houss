<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Houss - @yield('title')</title>
        <link href="{{ mix('/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>