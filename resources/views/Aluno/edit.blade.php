@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Editando Aluno: {{$aluno->nome}}</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>["aluno.update", $aluno->id ],'method'=>'put'])!!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', $aluno->nome,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('certidao_nasc', 'Certidão de Nascimento') !!}
            {!! Form::text('certidao_nasc', $aluno->certidao_nasc,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco', 'Endereço') !!}
            {!! Form::text('endereco', $aluno->endereco,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone') !!}
            {!! Form::text('telefone', $aluno->telefone,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('data_nasc', 'Data Nascimento') !!}
            {!! Form::date('data_nasc', $aluno->data_nasc,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('turno', 'Turno Pretendido') !!}
            {!! Form::select('turno', array('Manhã' => 'Manhã', 'Tarde' => 'Tarde', 'Noite' => 'Noite')
            , $aluno->turno ,['class' =>'form-control']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('oficina_id', 'Oficina Desejada') !!}
                {!! Form::select('oficina_id', \App\Oficina::orderBy('nome_oficina')->pluck('nome_oficina','id')->toArray(), $aluno->oficina_id,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit ('Editar Aluno', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>

        {!! Form::close() !!}




    </div>
    </div>
@endsection