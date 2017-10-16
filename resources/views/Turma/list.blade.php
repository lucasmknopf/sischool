@extends('app')

    @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="box box-primary">
                        <div class="box-header">
                        <h3 class="box-title">Lista de Turmas</h3>
                        </div>
                            <div class="box-body">
                                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
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
                    <td>{{$tur->data_limite}}</td>
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
    @endsection
