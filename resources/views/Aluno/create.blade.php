@extends('app')

@section('content')


    <div class="container">
        <div class="col-sm-9">
        <h1>Novo Aluno</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>'aluno.store']) !!}

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
            {!! Form::text('telefone', null,['class' =>'form-control','','placeholder'=>'(__)____-_____']) !!}
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
                {!! Form::select('oficina_id', \App\Oficina::orderBy('nome_oficina')->pluck('nome_oficina','id')->toArray(), null,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit ('Cadastrar Aluno', ['class'=>'btn btn-primary btn-lg' ]) !!}

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
    });</script>

@endsection