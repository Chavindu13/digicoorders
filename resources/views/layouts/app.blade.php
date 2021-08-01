<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Digico Orders</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @include('inc.messages')
      @yield('content')
    </div>

    <footer id="footer" class="text-center">
      <p>Copyright &copy; 2021 Digico Orders</p>
    </footer>
  </body>
</html>