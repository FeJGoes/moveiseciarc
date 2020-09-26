<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/uikit.min.css') }}" rel="stylesheet">
        <script src="{{ asset('js/uikit.min.js') }}"></script>
        <script src="{{ asset('js/uikit-icons.min.js') }}"></script>

        <title>@yield('title')</title>
    </head>
    <body>

        @include('web.layout.header')

        <main>
            @yield('content')
        </main>

        @include('web.layout.footer')

        <script src="{{ mix('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
