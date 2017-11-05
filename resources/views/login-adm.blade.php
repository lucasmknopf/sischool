<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISCHOOL</title>

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
<nav class="navbar navbar-inverse navbar-fixed-top logins">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">SISCHOOL - Bem Vindo Coordenador</a>
    </div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Login Coordenador</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{url('/coordenador/login')}}">
{!! csrf_field() !!}

    <div class="form-group{{$errors->has('email')?'has-error':''}}">
        <label class="col-md-4 control-label">Email</label>
    <div class="col-md-6">
        <input type="email" class="form-control" name="email" value="{{old('email')}}">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{$errors->first('email')}}</strong>

            </span>
            @endif
    </div>
    </div>
    <div class="form-group {{$errors->has('password')?'has-error':''}}">
        <label class="col-md-4 control-label">password</label>

        <div class="col-md-6">
            <input type="password" class="form-control" name="password"/>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{$errors->first('password')}}</strong>

                </span>
            @endif
        </div>


    </div>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
                <label>
                    <input  type="checkbox" name="relembrar">Guardar senha
                </label>
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-sign-in"></i> Login
            </button>

            <a class="btn btn-danger" href="/"><i class="fa fa-sign-out"></i>Voltar</a>

        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>