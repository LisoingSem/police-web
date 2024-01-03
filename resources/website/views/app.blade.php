<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon_io/apple-touch-icon.png') }}">
      <link rel="icon" href="{{ asset('assets/images/police-icon-removebg-preview.png') }}">
      <link rel="manifest" href="{{ asset('assets/favicon_io/site.webmanifest') }}">

      @yield('meta')
      @vite(['resources/website/sass/app.scss', 'resources/website/js/app.js'])

</head>

<body>
      @yield('body')

      <div class="backToTopBtn">
            <i class="fa-solid fa-chevron-up"></i>
      </div>
      @yield('script')
      @vite('resources/website/js/body.js')
</body>

</html>