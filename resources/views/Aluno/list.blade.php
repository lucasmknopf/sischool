@extends('app')

    @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="box box-primary">
                        <div class="box-header">
                        <h3 class="box-title">Lista de Alunos</h3>
                        </div>
                            <div class="box-body">
                                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr bgcolor="#1e90ff">
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Certidão de Nascimento</th>
                    <th>DT. Nascimento</th>
                    <th>Turno</th>
                    <th>Oficina Desejada</th>
                </tr>

            </thead>
            <tbody>

            @foreach($alunos as $alu)
                <tr>
                    <td>{{$alu->nome}}</td>
                    <td>{{$alu->telefone}}</td>
                    <td>{{$alu->endereco}}</td>
                    <td>{{$alu->certidao_nasc}}</td>
                    <td>{{$alu->data_nasc}}</td>
                    <td>{{$alu->turno}}</td>
                    <td>{{$alu->oficina_id}}</td>
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
    @endsection
