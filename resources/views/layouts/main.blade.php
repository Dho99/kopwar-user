<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koperasi INTENS | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/fav_logo.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'> --}}
    {{-- Vanilla --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- <link rel="stylesheet" href="/css/signin.css"> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>


    

  </head>
  <body>

    <div class="container-fluid">
        @yield('container-fluid')
    </div>

    <div class="container">
      @yield('container')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" >
    </script>
    <script>
      feather.replace()
    </script>
  </body>
</html>