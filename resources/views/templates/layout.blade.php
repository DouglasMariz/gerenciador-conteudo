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
                <div class="dados-usuario">
                    {{ Auth::user()->name }}
                </div>
                <ul class="lista-links">
                    <li>
                        <a href="/painel"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="/painel/membros"><i class="glyphicon glyphicon-user"></i> Membros</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list-alt"></i> Blog</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-font"></i> Empresa</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-briefcase"></i> Portifólio</a>
                    </li>
                </ul>
        </asside>
        <section id="conteudo">
            <div class="barra-superior">
                <a href="{{ route('logout') }}" class="btn btn-sair" 
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Sair
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @stack('titulo')
            </div>
            <div class="dados">
                @yield('content')
            </div>
        </section>
        
        @stack('scripts')
    </body>
</html>
