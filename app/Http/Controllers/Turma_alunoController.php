<?php

namespace App\Http\Controllers;

use App\Turma_aluno;
use App\Http\Requests\Turma_alunoRequest;
use Illuminate\Http\Request;

class Turma_alunoController extends Controller
{
    public function index(){
        $turma_alunos = Turma_aluno::all();
        return view('turma_aluno.list', ['turma_alunos'=> $turma_alunos]);

    }

    public function create(){
        return view ('turma_aluno.create');


    }

    public function store(Turma_alunoRequest $request){
        $novo_turma_aluno = $request->all();
        Turma_aluno::create($novo_turma_aluno);

        return redirect()->route('turma_aluno');

    }

    public function destroy ($id){
        Turma_aluno::find ($id)->delete();
        return redirect()->route('turma_aluno');

    }

    public function edit ($id){
        $turma_aluno = Turma_aluno::find ($id);
        return view('turma_aluno.edit', compact('turma_aluno'));

    }

    public function update(Turma_alunoRequest $request, $id){
        $turma_aluno = Turma_aluno::find($id)->update($request->all());
        return redirect()->route('turma_aluno');

    }
}
