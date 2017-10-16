<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Http\Requests\AlunoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{
    public function index(){
      $alunos = Aluno::all();
      return view('aluno.list', ['alunos'=> $alunos]);

    }

    public function create(){
        return view ('aluno.create');


    }

    public function store(AlunoRequest $request){
        $novo_aluno = $request->all();
        Aluno::create($novo_aluno);

        return redirect()->route('aluno');

    }

    public function destroy ($id){
        Aluno::find ($id)->delete();
        return redirect()->route('aluno');

    }

    public function edit ($id){
        $aluno = Aluno::find ($id);
        return view('aluno.edit', compact('aluno'));

}

    public function update(AlunoRequest $request, $id){
        $aluno = Aluno::find($id)->update($request->all());
        return redirect()->route('aluno');

    }

}


