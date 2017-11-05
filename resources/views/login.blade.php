<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISCHOOL</title>

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/estiloP.css') }}" rel="stylesheet">

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    @yield('styles')

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top logins">
    <div class="container-fluid">
               <a class="navbar-brand" href="/">SISCHOOL - AREA RESTRITA</a>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">


        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 prof">
            <a href="professor/login">
                <img src="img/prod.jpg" class=" img-responsive grayscale">
                <h4 class="descricao">Professor</h4>
               </img>
            </a>

        </div>

        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 aux">
            <a href="auxiliar/login">
                <img src="img/auxi.jpg" class=" img-responsive grayscale">
                <h4 class="descricao">Auxiliar</h4></img>
            </a>

        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 coord">
            <a href="coordenador/login">
                <img src="img/coord.jpg" class=" img-responsive grayscale">
                <h4 class="descricao ">Coordenador</h4></img>
            </a>

        </div>

    </div>
</div>
</div>

<div class="roda_pe">


</div>

</body>


</html>