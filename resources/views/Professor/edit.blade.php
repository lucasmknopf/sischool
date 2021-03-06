@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Editando Professor: {{$professor->nome}}</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>["professor.update", $professor->id ],'method'=>'put'])!!}

            <div class="form-group">
                {!! Form::label('nome', 'Nome') !!}
                {!! Form::text('nome', $professor->nome,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('rg', 'RG') !!}
                {!! Form::text('rg', $professor->rg,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('cpf', 'CPF') !!}
                {!! Form::text('cpf', $professor->cpf,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('endereco', 'Endereço') !!}
                {!! Form::text('endereco',$professor->endereco,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('telefone', 'Telefone') !!}
                {!! Form::text('telefone', $professor->telefone,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('data_nasc', 'Data Nascimento') !!}
                {!! Form::date('data_nasc', $professor->data_nasc,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', $professor->email,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Senha ') !!}
                {!! Form::password('password', null,['class' =>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit ('Editar Professor', ['class'=>'btn btn-primary btn-lg' ]) !!}

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