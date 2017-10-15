<?php

namespace App\Http\Controllers;

use App\Aluno;
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

    public function store(Request $request){
        $novo_aluno = $request->all();
        Aluno::create($novo_aluno);

        return redirect()->route('aluno');

    }


}


