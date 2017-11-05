@extends('app')

    @section('content')
        <link type="text/css" href="DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- Fonts -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="box box-primary">
                        <div class="box-header">
                        <h3 class="box-title">Lista de Professors</h3>
                        </div>
                            <div class="box-body">
                                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="professor">
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

            @foreach($professors as $prof)
                <tr>
                    <td>{{$prof->nome}}</td>
                    <td>{{$prof->rg}}</td>
                    <td>{{$prof->cpf}}</td>
                    <td>{{$prof->telefone}}</td>
                    <td>{{$prof->endereco}}</td>
                    <td>{{ date( 'd/m/Y' , strtotime($prof->data_nasc))}}</td>
                    <td>{{$prof->email}}</td>

                    <td>
                        <a href="{{route('professor.edit',['id'=>$prof->id])}}" class=" btn-xs btn-success">Editar</a>
                        <a href="{{route('professor.destroy',['id'=>$prof->id])}}" class=" btn-xs btn-danger">Excluir</a>
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
                $('#professor').DataTable();
            } );
        </script>
    @endsection
