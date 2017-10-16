@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Editando Horario: {{$horario->horarios}}</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>["horario.update", $horario->id ],'method'=>'put'])!!}

            <div class="form-group">
                {!! Form::label('horario_semana', 'Horario da Semana') !!}
                {!! Form::text('horario_semana', $horario->horario,['class' =>'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::submit ('Editar Horario', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>


            {!! Form::close() !!}




    </div>
    </div>
@endsection