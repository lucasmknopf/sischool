@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Novo Dia</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>'dia.store']) !!}

        <div class="form-group">
            {!! Form::label('dia_semana', 'Dia da Semana') !!}
            {!! Form::text('dia_semana', null,['class' =>'form-control']) !!}
        </div>



            <div class="form-group">
                {!! Form::submit ('Cadastrar Dia', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>

        {!! Form::close() !!}




    </div>
    </div>
@endsection