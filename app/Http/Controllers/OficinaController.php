<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oficina;
use App\Http\Requests\OficinaRequest;
use App\Http\Controllers\Controller;

class OficinaController extends Controller
{
    public function index(){
        $oficinas = Oficina::all();
        return view('oficina.list', ['oficinas'=> $oficinas]);

    }

    public function create(){
        return view ('oficina.create');


    }

    public function store(OficinaRequest $request){
        $novo_oficina = $request->all();
        Oficina::create($novo_oficina);

        return redirect()->route('oficina');

    }

    public function destroy ($id){
        Oficina::find ($id)->delete();
        return redirect()->route('oficina');

    }

    public function edit ($id){
        $oficina = Oficina::find ($id);
        return view('oficina.edit', compact('oficina'));

    }

    public function update(OficinaRequest $request, $id){
        $oficina = Oficina::find($id)->update($request->all());
        return redirect()->route('oficina');

    }

}
