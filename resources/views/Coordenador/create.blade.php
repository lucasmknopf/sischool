@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Novo Coordenador</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>'coordenador.store']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', null,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('rg', 'RG') !!}
            {!! Form::text('rg', null,['class' =>'form-control']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('cpf', 'CPF') !!}
                {!! Form::text('cpf', null ,['class' =>'form-control','','placeholder'=>'000.000.000-00']) !!}
            </div>

        <div class="form-group">
            {!! Form::label('endereco', 'Endereço') !!}
            {!! Form::text('endereco', null,['class' =>'form-control','','placeholder'=>'R.        , Nº:']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone') !!}
            {!! Form::text('telefone', null,['class' =>'form-control','','placeholder'=>'(__)____-_____']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('data_nasc', 'Data Nascimento') !!}
            {!! Form::date('data_nasc', '2017-10-14 00:00:00',['class' =>'form-control']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', null,['class' =>'form-control','','placeholder'=>'meuemial@exemplo.com']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Senha ') !!}
                {!! Form::password('password', null,['class' =>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit ('Cadastrar Coordenador', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>

        {!! Form::close() !!}




    </div>
    </div>

    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>

    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>

    <script>
        $(document).ready(function(){
            $('#telefone').mask('(00)0000-0000');
            $('.date').unmask();
        });
        $(document).ready(function(){
            $('#cpf').mask('000.000.000-00');
            $('.date').unmask();
        });
    </script>
    <script>
    function TestaCPF('strCPF == #cpf') {
    var Soma;
    var Resto;
    Soma = 0;
    //strCPF  = RetiraCaracteresInvalidos(strCPF,11);
    if (strCPF == "00000000000")
    return false;
    for (i=1; i<=9; i++)
    Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11))
    Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) )
    return false;
    Soma = 0;
    for (i = 1; i <= 10; i++)
    Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11))
    Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) )
    return false;
    return true;
    }</script>


@endsection