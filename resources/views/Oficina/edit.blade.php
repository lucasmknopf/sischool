@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Editando Oficina: {{$oficina->nome_oficina}}</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>["oficina.update", $oficina->id ],'method'=>'put'])!!}

            <div class="form-group">
                {!! Form::label('nome_oficina', 'Nome') !!}
                {!! Form::text('nome_oficina', $oficina->nome_oficina,['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('professor_id', 'Professor') !!}
                {!! Form::select('professor_id', \App\Professor::orderBy('nome')->pluck('nome','id')->toArray(), $oficina->professor_id,['class' =>'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::submit ('Editar Oficina', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>


            {!! Form::close() !!}




    </div>
    </div>
@endsection