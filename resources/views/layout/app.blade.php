<html>
  <head>
      <title>App Name @yield('titulo')</title>
  </head>
  <body>
      @section('menu')
        Menu master.
      @show

      <div class= 'container'>
        @yield('contenido')
      </div>
  </body>
</html>
