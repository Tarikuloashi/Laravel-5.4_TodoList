<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('includes.navbar')
    <div class="container">
      @include('includes.messages')
        @yield('content')
    </div>

    <footer id="footer" class="text-center">
      <p>Copyright &copy:2018 TodoList</p>
    </footer>
  </body>
</html>
