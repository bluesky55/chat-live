<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        @livewireStyles
        <title>@yield('title')</title>
    </head>
    <body style="background-color: black">
        {{ $slot }}
        <script src="/js/bootstrap.bundle.min.js"></script>
        @livewireScripts
    </body>
</html>
