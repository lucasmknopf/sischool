@extends('app')

    @section('content')
        <link type="text/css" href="DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- Fonts -->

        <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="box box-primary">
                        <div class="box-header">
                        <h3 class="box-title">Lista de Coordenadors</h3>
                        </div>
                            <div class="box-body">
                                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="coordenador">
            <thead>
                <tr bgcolor="#1e90ff">
                    <th>Nome</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>DT. Nascimento</th>
                    <th>E-mail</th>
                    <th>Ação</th>
                </tr>

            </thead>
            <tbody>

            @foreach($coordenadors as $coord)
                <tr>
                    <td>{{$coord->nome}}</td>
                    <td>{{$coord->rg}}</td>
                    <td>{{$coord->cpf}}</td>
                    <td>{{$coord->telefone}}</td>
                    <td>{{$coord->endereco}}</td>
                    <td>{{ date( 'd/m/Y' , strtotime($coord->data_nasc))}}</td>
                    <td>{{$coord->email}}</td>

                    <td>
                        <a href="{{route('coordenador.edit',['id'=>$coord->id])}}" class=" btn-xs btn-success">Editar</a>
                        <a href="{{route('coordenador.destroy',['id'=>$coord->id])}}" class=" btn-xs btn-danger">Excluir</a>
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
                    $('#coordenador').DataTable();
                } );
            </script>
    @endsection
