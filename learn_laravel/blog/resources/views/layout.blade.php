<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
 <title>Laravel</title>
    <!-- Mobile Specific Metas
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      

  <!-- CSS
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

  </head>
  <body>
    @include('layouts.nav')
    

    <div class="container">
        @yield('content')
    </div>

    @yield('foot')

    @include('layouts.footer')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
