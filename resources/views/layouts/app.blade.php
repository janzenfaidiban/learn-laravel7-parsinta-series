<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    @yield('head')

  </head>
  <body>

    @include('layouts.navigation')
    <div class="py-4">
      @yield('content')
    </div>

    @yield('script')
  </body>
</html>
