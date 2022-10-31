<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | CASALCO</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  @include('client.styles.font')
  @include('client.styles.global')
  @include('client.styles.page-level-plugin')
  @include('client.styles.theme')

</head>
<body class="corporate">
  @include('client.layout.topbar')
  @include('client.layout.header')
  @yield('client_content')

  {{-- @include('client.layout.pre-footer') --}}
  @include('client.layout.footer')

  @include('client.scripts.core-plugins')
  @include('client.scripts.page-level-js')
</body>
</html>