<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Enigma Project</title>

        <link href="{{ asset('dist/built.min.css') }}" rel="stylesheet">

        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
        </style>

    </head>
    <body>
        <div class="container">

            @if (Session::has('message'))
            <div class="flash alert">
                <p>{{ Session::get('message') }}</p>
            </div>
            @endif

            @yield('main')

        </div>
        <script src="{{ asset('dist/built.min.js') }}"></script>
    </body>
</html>