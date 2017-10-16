<?php

namespace App\Http\Controllers;

use App\Turma;
use App\Http\Requests\TurmaRequest;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function index(){
        $turmas = Turma::all();
        return view('turma.list', ['turmas'=> $turmas]);

    }

    public function create(){
        return view ('turma.create');


    }

    public function store(TurmaRequest $request){
        $novo_turma = $request->all();
        Turma::create($novo_turma);

        return redirect()->route('turma');

    }

    public function destroy ($id){
        Turma::find ($id)->delete();
        return redirect()->route('turma');

    }

    public function edit ($id){
        $turma = Turma::find ($id);
        return view('turma.edit', compact('turma'));

    }

    public function update(TurmaRequest $request, $id){
        $turma = Turma::find($id)->update($request->all());
        return redirect()->route('turma');

    }
}
