@extends('app')

    @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="box box-primary">
                        <div class="box-header">
                        <h3 class="box-title">Lista de Auxiliars</h3>
                        </div>
                            <div class="box-body">
                                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
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
                    <td>{{$aux->data_nasc}}</td>
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
    @endsection
