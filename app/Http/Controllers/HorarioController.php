<?php

namespace App\Http\Controllers;

use App\Horario;
use App\Http\Requests\HorarioRequest;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index(){
        $horarios = Horario::all();
        return view('Horario.list', ['horarios'=> $horarios]);

    }

    public function create(){
        return view ('Horario.create');


    }

    public function store(HorarioRequest $request){
        $novo_horario = $request->all();
        Horario::create($novo_horario);

        return redirect()->route('Horario');

    }

    public function destroy ($id){
        Horario::find ($id)->delete();
        return redirect()->route('Horario');

    }

    public function edit ($id){
        $horario = Horario::find ($id);
        return view('Horario.edit', compact('horario'));

    }

    public function update(HorarioRequest $request, $id){
        $horario = Horario::find($id)->update($request->all());
        return redirect()->route('Horario');

    }

}
