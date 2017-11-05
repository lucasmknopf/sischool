@extends('app')

    @section('content')
        <link type="text/css" href="DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- Fonts -->

            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="box box-primary">
                        <div class="box-header">
                        <h3 class="box-title">Lista de Auxiliars</h3>
                        </div>
                            <div class="box-body">
                                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="auxiliar">
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

            @foreach($auxiliars as $aux)
                <tr>
                    <td>{{$aux->nome}}</td>
                    <td>{{$aux->rg}}</td>
                    <td>{{$aux->cpf}}</td>
                    <td>{{$aux->telefone}}</td>
                    <td>{{$aux->endereco}}</td>
                    <td>{{ date( 'd/m/Y' , strtotime($aux->data_nasc))}}</td>
                    <td>{{$aux->email}}</td>

                    <td>
                        <a href="{{route('auxiliar.edit',['id'=>$aux->id])}}" class=" btn-xs btn-success">Editar</a>
                        <a href="{{route('auxiliar.destroy',['id'=>$aux->id])}}" class=" btn-xs btn-danger">Excluir</a>
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
                $('#auxiliar').DataTable();
            } );
        </script>
    @endsection
