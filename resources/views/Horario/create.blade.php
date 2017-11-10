@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-9">
        <h1>Novo Horario</h1>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        {!! Form::open(['route'=>'horario.store']) !!}

        <div class="form-group">
            {!! Form::label('horario', 'Horario') !!}
            {!! Form::text('horario', null,['class' =>'form-control','','placeholder'=>'00:00']) !!}
        </div>



            <div class="form-group">
                {!! Form::submit ('Cadastrar Horario', ['class'=>'btn btn-primary btn-lg' ]) !!}

            </div>

        {!! Form::close() !!}




    </div>
    </div>

    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>

    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>

    <script>
        $(document).ready(function(){
            $('#horario').mask('00:00');
            $('.date').unmask();
        });

    </script>
@endsection