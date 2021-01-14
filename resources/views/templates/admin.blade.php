<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
  <link href="{{ mix('css/style.css') }}" rel="stylesheet">
  @yield('css')
  <title>@yield('title')</title>
</head>

<body>
  @includeUnless(!empty($hideHeader), 'includes.admin.header')
  <main>
    @includeUnless(!empty($hideSidebar), 'includes.admin.sidebar')

    @yield('content')
  </main>

  <script src="{{ mix('js/app.js') }}"></script>
  @stack('scripts')
</body>

</html>
