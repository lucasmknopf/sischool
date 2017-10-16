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
                {!! Form::text('cpf', $auxiliar->cpf,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('endereco', 'Endereço') !!}
                {!! Form::text('endereco',$auxiliar->endereco,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('telefone', 'Telefone') !!}
                {!! Form::text('telefone', $auxiliar->telefone,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('data_nasc', 'Data Nascimento') !!}
                {!! Form::date('data_nasc', $auxiliar->data_nasc,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', $auxiliar->email,['class' =>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit ('Editar Auxiliar', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>


            {!! Form::close() !!}




    </div>
    </div>
@endsection