@extends('app')

    @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="box box-primary">
                        <div class="box-header">
                        <h3 class="box-title">Lista de Oficinas</h3>
                        </div>
                            <div class="box-body">
                                <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr bgcolor="#1e90ff">
                    <th>Nome</th>
                    <th>Professor</th>
                    <th>Ação</th>
                </tr>

            </thead>
            <tbody>

            @foreach($oficinas as $ofic)
                <tr>
                    <td>{{$ofic->nome_oficina}}</td>
                    <td>{{$ofic->professor->nome}}</td>


                    <td>
                        <a href="{{route('oficina.edit',['id'=>$ofic->id])}}" class=" btn-xs btn-success">Editar</a>
                        <a href="{{route('oficina.destroy',['id'=>$ofic->id])}}" class=" btn-xs btn-danger">Excluir</a>
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
