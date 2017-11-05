@extends('app')

    @section('content')
        <link type="text/css" href="DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- Fonts -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="box box-primary">
                        <div class="box-header">
                        <h3 class="box-title">Lista de Turmas</h3>
                        </div>
                            <div class="box-body">
                                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="turma">
            <thead>
                <tr bgcolor="#1e90ff">
                    <th>Descrição</th>
                    <th>Vagas</th>
                    <th>Data Limite</th>
                    <th>Oficina</th>
                    <th>Horario</th>
                    <th>Dia</th>
                    <th>Ação</th>
                </tr>

            </thead>
            <tbody>

            @foreach($turmas as $tur)
                <tr>
                    <td>{{$tur->descricao}}</td>
                    <td>{{$tur->vagas}}</td>
                    <td>{{ date( 'd/m/Y' , strtotime($tur->data_limite))}}</td>
                    <td>{{$tur->oficina->nome_oficina}}</td>
                    <td>{{$tur->horario->horarios}}</td>
                    <td>{{$tur->dia_id}}</td>
                    <td>
                        <a href="{{route('turma.edit',['id'=>$tur->id])}}" class=" btn-xs btn-success">Editar</a>
                        <a href="{{route('turma.destroy',['id'=>$tur->id])}}" class=" btn-xs btn-danger">Excluir</a>
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
                $('#turma').DataTable();
            } );
        </script>
    @endsection
