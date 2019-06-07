<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="{{ asset('css/styles.css')}}" rel="stylesheet">

    {{-- @stack('styles') --}}
    </head>
    <body>
        @include('layout.header')
            <div class="container">
                <div class="content">
                        @yield('appContent')
                </div>
            </div>
        @include('layout.footer')
    </body>
</html>
