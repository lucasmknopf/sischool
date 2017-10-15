<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/estiloP.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/Painel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    @yield('styles')

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DevMedia</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa  fa-area-chart fa-2x"></i></a></li>
                <li><a href="#"><i class="fa  fa-calendar-o fa-2x"></i></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa  fa-user fa-2x"></i> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Minha Conta</a></li>
                        <li><a href="#">Trocar Senha</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Fazer Logof</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid teste-panel">
    <div class="row-fluid">
        <div class="col-sm-3">
            <!--inicio menu navegação lateral-->

            <div class="panel panel-primary">
                <div id="colGroup1" role="tab" class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#colListGroup1"
                           aria-controls="colListGroup1"
                           aria-expanded="false"
                           data-toggle="collapse">
                            <span class="fa fa-file fa-2x"></span>
                            Gerenciar Posts</a>
                    </h4>
                </div>
                <div role="tabpanel" class="panel-collapse
                         collapse" id="colListGroup1"
                     aria-expanded="false">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#">Criar novo Posts</a></li>
                        <li class="list-group-item">
                            <a href="#">Alterar Posts</a></li>
                        <li class="list-group-item">
                            <a href="#">Excluir Posts</a></li>
                    </ul>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
            <!--/.menu navegação lateral-->

            <!--inicio menu navegação lateral-->

            <div class="panel panel-default">
                <div id="colGroup1" role="tab" class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#colListGroup2"
                           aria-controls="colListGroup2"
                           aria-expanded="false"
                           data-toggle="collapse">
                            <span class="fa fa-users fa-2x"></span>
                            Gerenciar Usuarios</a>
                    </h4>
                </div>
                <div role="tabpanel" class="panel-collapse
                         collapse" id="colListGroup2"
                     aria-expanded="false">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#">Criar novo Usuario</a></li>
                        <li class="list-group-item">
                            <a href="#">Alterar Usuario</a></li>
                        <li class="list-group-item">
                            <a href="#">Excluir Usuario</a></li>
                    </ul>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
            <!--/.menu navegação lateral-->
        </div>

        <div class="col-sm-9">

            <div class="conteudo_painel">
                <div class="conteudo_painel_int">

                    @yield('content')

                </div>
            </div>
        </div>

    </div>
</div>






</body>
</html>