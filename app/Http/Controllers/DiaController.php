<?php

namespace App\Http\Controllers;

use App\Dia;
use App\Http\Requests\DiaRequest;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    public function index(){
        $dias = Dia::all();
        return view('dia.list', ['dias'=> $dias]);

    }

    public function create(){
        return view ('dia.create');


    }

    public function store(DiaRequest $request){
        $novo_dia = $request->all();
        Dia::create($novo_dia);

        return redirect()->route('dia');

    }

    public function destroy ($id){
        Dia::find ($id)->delete();
        return redirect()->route('dia');

    }

    public function edit ($id){
        $dia = Dia::find ($id);
        return view('dia.edit', compact('dia'));

    }

    public function update(DiaRequest $request, $id){
        $dia = Dia::find($id)->update($request->all());
        return redirect()->route('dia');

    }

}
