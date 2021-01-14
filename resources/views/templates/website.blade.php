<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
  <link href="{{ mix('css/style.css') }}" rel="stylesheet">
  <title>@yield('title')</title>
</head>

<body>
  @include('includes.website.header')

  <main>
    @yield('content')
  </main>

  @include('includes.website.footer')

  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_API')}}&libraries=places&callback=initMap&language=pt-br">
  </script>
  <script src="{{ mix('js/app.js') }}"></script>
  @stack('scripts')
</body>

</html>
