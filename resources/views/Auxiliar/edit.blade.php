@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Editando Auxiliar: {{$auxiliar->nome}}</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>["auxiliar.update", $auxiliar->id ],'method'=>'put'])!!}

            <div class="form-group">
                {!! Form::label('nome', 'Nome') !!}
                {!! Form::text('nome', $auxiliar->nome,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('rg', 'RG') !!}
                {!! Form::text('rg', $auxiliar->rg,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('cpf', 'CPF') !!}
                {!! Form::text('cpf', $auxiliar->cpf,['class' =>'form-control','','placeholder'=>'000.000.000-00']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('endereco', 'Endereço') !!}
                {!! Form::text('endereco',$auxiliar->endereco,['class' =>'form-control','','placeholder'=>'R.        , Nº:']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('telefone', 'Telefone') !!}
                {!! Form::text('telefone', $auxiliar->telefone,['class' =>'form-control','','placeholder'=>'(__)____-_____']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('data_nasc', 'Data Nascimento') !!}
                {!! Form::date('data_nasc', $auxiliar->data_nasc,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', $auxiliar->email,['class' =>'form-control','','placeholder'=>'meuemial@exemplo.com']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Senha ') !!}
                {!! Form::password('password', null,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit ('Editar Auxiliar', ['class'=>'btn btn-primary btn-lg' ]) !!}

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
@endsection