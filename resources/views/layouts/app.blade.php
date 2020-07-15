<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    {{-- <title>@yield('title')</title> --}}
    <title>{{ $title ?? 'Admin' }}</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    @yield('head')
  </head>
  <body>
    @include('layouts.navigation')
      <div class="py-4">
        @include('alert')
        @yield('content')
      </div>
      <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script>
        $(document).ready(function() {
            $('.select2').select2({
              placeholder: "Choose some tags"
            });
        });
      </script>
    </body>
</html>
