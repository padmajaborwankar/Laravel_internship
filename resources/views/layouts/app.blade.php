<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="{{asset('css/app.css')}}">
        <title>{{config('app.name','noname')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <h1>Hello</h1>
        @yield('content');
    </body>
</html>
