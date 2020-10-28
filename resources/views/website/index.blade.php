<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />

        <link rel="stylesheet" href="{{ mix('css/style.css') }}" >
        <link rel="stylesheet" href="{{ mix('css/uikit.min.css') }}">
        <script src="{{ mix('js/uikit.min.js') }}"></script>
        <script src="{{ mix('js/uikit-icons.min.js') }}"></script>

        <title>@yield('title')</title>
    </head>
    <body>

        @include('website.layout.header')

        <main>
            @yield('content')
        </main>

        @include('website.layout.footer')

        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_API')}}&libraries=places&callback=initMap&language=pt-br">
        </script>
        <script src="{{ mix('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
