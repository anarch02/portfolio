<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rakhmatjonov</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

      <!-- Favicons -->
    <link href="{{Vite::asset('resources/img/favicon.png')}}" rel="icon">
    <link href="{{Vite::asset('resources/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <!-- ======= Header ======= -->
    <x-header></x-header>
    <!-- End Header -->

 
  @yield('content')

  <!-- ======= Footer ======= -->
 
  <x-footer></x-footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    </div>
</body>
</html>
