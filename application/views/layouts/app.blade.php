<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library Labs | @yield('page-title')</title>

    <link href="application/html/assets/css/app.css" rel="stylesheet">
    <link href="application/html/assets/css/bootstrap.css" rel="stylesheet">
    <link href="application/html/assets/css/morris.css" rel="stylesheet">
    <link href="application/html/assets/css/sb-admin.css" rel="stylesheet">
    <link href="application/html/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/"><i class="fa fa-fw fa-book"></i> Labs Library</a>
        </div>

        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="/"><i class="fa fa-fw fa-sign-in"></i> Dandrade </a>
            </li>
        </ul>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="clientes.index"><i class="fa fa-fw fa-users"></i> Usuários</a>
                </li>
                <li>
                    <a href="autores.index"><i class="fa fa-fw fa-user"></i> Autores</a>
                </li>
                <li>
                    <a href="editoras.index"><i class="fa fa-fw fa-building"></i> Editoras</a>
                </li>
                <li>
                    <a href="livros.index"><i class="fa fa-fw fa-book"></i> Livros</a>
                </li>
                <li>
                    <a href="livrosautores.index"><i class="fa fa-fw fa-bookmark"></i> Livros/Autores</a>
                </li>
                <li>
                    <a href="leitores.index"><i class="fa fa-fw fa-user-md"></i> Leitores</a>
                </li>
                <li>
                    <a href="emprestimos.index"><i class="fa fa-fw fa-calendar"></i> Empréstimos</a>
                </li>
                <li>
                    <a href="relatorios.index"><i class="fa fa-fw fa-flag"></i> Relatórios</a>
                </li>
                <li>
                    <a href="logout"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-sign-out"></i> Logout
                    </a>

                    <form id="logout-form" action="logout" method="POST" style="display: none;">
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div style="min-height: 100vh;" id="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="application/html/assets/js/app.js"></script>
</body>
</html>
