<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enigma Project</title>

    <link href="{{ asset('dist/built.min.css') }}" rel="stylesheet">
    
  </head>
  <body>
      <div class="container">

        @yield('content')
        
      </div>
    <script src="{{ asset('dist/built.min.js') }}"></script>
  </body>
</html>