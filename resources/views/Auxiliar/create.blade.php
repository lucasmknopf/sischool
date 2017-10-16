@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Novo Auxiliar</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>'auxiliar.store']) !!}

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
                {!! Form::text('cpf', null,['class' =>'form-control']) !!}
            </div>

        <div class="form-group">
            {!! Form::label('endereco', 'Endereço') !!}
            {!! Form::text('endereco', null,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone') !!}
            {!! Form::text('telefone', null,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('data_nasc', 'Data Nascimento') !!}
            {!! Form::date('data_nasc', '2017-10-14 00:00:00',['class' =>'form-control']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', null,['class' =>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit ('Cadastrar Auxiliar', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>

        {!! Form::close() !!}




    </div>
    </div>
@endsection