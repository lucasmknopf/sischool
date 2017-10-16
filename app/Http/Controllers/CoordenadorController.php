<?php

namespace App\Http\Controllers;


use App\Coordenador;
use App\Http\Requests\CoordenadorRequest;
use Illuminate\Http\Request;

class CoordenadorController extends Controller
{
    public function index(){
        $coordenadors = Coordenador::all();
        return view('coordenador.list', ['coordenadors'=> $coordenadors]);

    }

    public function create(){
        return view ('coordenador.create');


    }

    public function store(CoordenadorRequest $request){
        $novo_coordenador = $request->all();
        Coordenador::create($novo_coordenador);

        return redirect()->route('coordenador');

    }

    public function destroy ($id){
        Coordenador::find ($id)->delete();
        return redirect()->route('coordenador');

    }

    public function edit ($id){
        $coordenador = Coordenador::find ($id);
        return view('coordenador.edit', compact('coordenador'));

    }

    public function update(CoordenadorRequest $request, $id){
        $coordenador = Coordenador::find($id)->update($request->all());
        return redirect()->route('coordenador');

    }

}
