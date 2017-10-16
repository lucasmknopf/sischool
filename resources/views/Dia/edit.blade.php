@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Editando Dia: {{$dia->dia_semana}}</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>["dia.update", $dia->id ],'method'=>'put'])!!}

            <div class="form-group">
                {!! Form::label('dia_semana', 'Dia da Semana') !!}
                {!! Form::text('dia_semana', $dia->dia_semana,['class' =>'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::submit ('Editar Dia', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>


            {!! Form::close() !!}




    </div>
    </div>
@endsection