@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Nova Turma</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>'turma.store']) !!}

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição') !!}
            {!! Form::text('descricao', null,['class' =>'form-control']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('vagas', 'Vagas') !!}
                {!! Form::text('vagas', null,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('data_limite', 'Data Limite') !!}
                {!! Form::date('data_limite', null,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('oficina_id', 'Oficina') !!}
                {!! Form::select('oficina_id', \App\Oficina::orderBy('nome_oficina')->pluck('nome_oficina','id')->toArray(), null,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('horario_id', 'Horario') !!}
                {!! Form::select('horario_id', \App\Horario::orderBy('id')->pluck('horarios','id')->toArray(), null,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('dia_id', 'Dia') !!}
                {!! Form::select('dia_id', \App\Dia::orderBy('id')->pluck('dia_semana','id')->toArray(), null,['class' =>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit ('Cadastrar Turma', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>

        {!! Form::close() !!}




    </div>
    </div>
@endsection