@extends('app')

    @section('content')
      <!--  <link type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
         -->
        <link type="text/css" href="DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
      <!-- Fonts -->

            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="box box-primary">
                        <div class="box-header">
                        <h3 class="box-title">Lista de Alunos</h3>
                        </div>
                            <div class="box-body">
                                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="alunos">
            <thead>
                <tr bgcolor="#1e90ff">
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Certidão de Nascimento</th>
                    <th>DT. Nascimento</th>
                    <th>Turno</th>
                    <th>Oficina Desejada</th>
                    <th>Ação</th>
                </tr>

            </thead>
            <tbody>

            @foreach($alunos as $alu)
                <tr>
                    <td>{{$alu->nome}}</td>
                    <td>{{$alu->telefone}}</td>
                    <td>{{$alu->endereco}}</td>
                    <td>{{$alu->certidao_nasc}}</td>
                    <td>{{ date( 'd/m/Y' , strtotime($alu->data_nasc))}}</td>
                    <td>{{$alu->turno}}</td>
                    <td>{{$alu->oficina->nome_oficina}}</td>
                    <td>
                        <a href="{{route('aluno.edit',['id'=>$alu->id])}}" class=" btn-xs btn-success">Editar</a>
                        <a href="{{route('aluno.destroy',['id'=>$alu->id])}}" class=" btn-xs btn-danger">Excluir</a>
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
       <!-- <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    -->
      <script src="DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#alunos').DataTable();
        } );
        </script>
    @endsection
