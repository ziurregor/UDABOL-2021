<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" type="text/css" />
  <link href="responsive-tables.css" type="text/css" media="screen" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script type="text/javascript" src="responsive-tables.js"></script>
</body>
</html>
