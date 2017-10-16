@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Editando Coordenador: {{$coordenador->nome}}</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>["coordenador.update", $coordenador->id ],'method'=>'put'])!!}

            <div class="form-group">
                {!! Form::label('nome', 'Nome') !!}
                {!! Form::text('nome', $coordenador->nome,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('rg', 'RG') !!}
                {!! Form::text('rg', $coordenador->rg,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('cpf', 'CPF') !!}
                {!! Form::text('cpf', $coordenador->cpf,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('endereco', 'Endereço') !!}
                {!! Form::text('endereco',$coordenador->endereco,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('telefone', 'Telefone') !!}
                {!! Form::text('telefone', $coordenador->telefone,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('data_nasc', 'Data Nascimento') !!}
                {!! Form::date('data_nasc', $coordenador->data_nasc,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', $coordenador->email,['class' =>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit ('Editar Coordenador', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>


            {!! Form::close() !!}




    </div>
    </div>
@endsection