@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Novo Aluno</h1>

        {!! Form::open(['url'=>'aluno/store']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', null,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('certidao_nasc', 'Certidão de Nascimento') !!}
            {!! Form::text('certidao_nasc', null,['class' =>'form-control']) !!}
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
            {!! Form::label('turno', 'Turno Pretendido') !!}
            {!! Form::select('turno', array('Manhã' => 'Manhã', 'Tarde' => 'Tarde', 'Noite' => 'Noite')
            ,'selecione o turno',['class' =>'form-control']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('oficina_id', 'Oficina Desejada') !!}
                {!! Form::text('oficina_id', null,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit ('cadastrar aluno', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>

        {!! Form::close() !!}




    </div>
    </div>
@endsection