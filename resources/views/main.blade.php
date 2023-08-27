<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Purrfect || @yield('title')</title>
    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="{{ asset('images/favicon.ico') }}"
      type="image/x-icon"
    />
    @yield('head')
  </head>
  @yield('body')
  <script
    src="https://kit.fontawesome.com/6d3b596002.js"
    crossorigin="anonymous"
  ></script>
</html>
