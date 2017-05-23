<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{$titulo or 'Sistema de Gestão de Conteúdo'}}</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script type="text/javascript" src="{{ url('js/main.js') }}"></script>
    </body>
</html>
