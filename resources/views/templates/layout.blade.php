<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Gestão de Conteúdo</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="/css/painel/dashboard.css">
        @stack('styles')
    </head>
    <body>
        <asside id="menu">
                <div class="dados-usuario"></div>
                <ul class="lista-links">
                    <li>
                        <a href="/painel"><span class="glyphicon glyphicon-home"></span> Dashboard</a>
                    </li>
                    <li>
                        <a href="/painel/membros"><span class="glyphicon glyphicon-user"></span> Membros</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-list-alt"></span> Blog</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-font"></span> Empresa</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-briefcase"></span> Portifólio</a>
                    </li>
                </ul>
        </asside>
        <section id="conteudo">
            <div class="barra-superior">
                @stack('titulo')
            </div>
            <div class="dados">
                @yield('content')
            </div>
        </section>
        
        @stack('scripts')
    </body>
</html>
