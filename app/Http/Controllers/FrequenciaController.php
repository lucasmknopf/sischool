<?php

namespace App\Http\Controllers;

use App\Frequencia;
use App\Http\Requests\FrequenciaRequest;
use Illuminate\Http\Request;

class FrequenciaController extends Controller
{
    public function index(){
        $frequencias = Frequencia::all();
        return view('frequencia.list', ['frequencias'=> $frequencias]);

    }

    public function create(){
        return view ('frequencia.create');


    }

    public function store(FrequenciaRequest $request){
        $novo_frequencia = $request->all();
        Frequencia::create($novo_frequencia);

        return redirect()->route('frequencia');

    }

    public function destroy ($id){
        Frequencia::find ($id)->delete();
        return redirect()->route('frequencia');

    }

    public function edit ($id){
        $frequencia = Frequencia::find ($id);
        return view('frequencia.edit', compact('frequencia'));

    }

    public function update(FrequenciaRequest $request, $id){
        $frequencia = Frequencia::find($id)->update($request->all());
        return redirect()->route('frequencia');

    }

}
