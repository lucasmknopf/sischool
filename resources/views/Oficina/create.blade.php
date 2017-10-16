@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Nova Oficina</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>'oficina.store']) !!}

        <div class="form-group">
            {!! Form::label('nome_oficina', 'Nome') !!}
            {!! Form::text('nome_oficina', null,['class' =>'form-control']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('professor_id', 'Professor') !!}
                {!! Form::select('professor_id', \App\Professor::orderBy('nome')->pluck('nome','id')->toArray(), null,['class' =>'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::submit ('Cadastrar Oficina', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>

        {!! Form::close() !!}




    </div>
    </div>
@endsection