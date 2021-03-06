@extends('app')

    @section('content')
        <link type="text/css" href="DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- Fonts -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="box box-primary">
                        <div class="box-header">
                        <h3 class="box-title">Lista de Horarios</h3>
                        </div>
                            <div class="box-body">
                                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="horario">
            <thead>
                <tr bgcolor="#1e90ff">
                    <th>Horario</th>
                    <th>Ação</th>
                </tr>

            </thead>
            <tbody>

            @foreach($horarios as $hora)
                <tr>
                    <td>{{$hora->horarios}}</td>
                    <td>
                        <a href="{{route('horario.edit',['id'=>$hora->id])}}" class=" btn-xs btn-success">Editar</a>
                        <a href="{{route('horario.destroy',['id'=>$hora->id])}}" class=" btn-xs btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            </div>
                </div>
                    </div>
                    </div>
                </div>
            </div>
            <script src="DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#horario').DataTable();
                } );
            </script>
    @endsection
