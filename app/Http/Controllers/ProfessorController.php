<?php

namespace App\Http\Controllers;

use App\Professor;
use App\Http\Requests\ProfessorRequest;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index(){
        $professors = Professor::all();
        return view('professor.list', ['professors'=> $professors]);

    }

    public function create(){
        return view ('professor.create');


    }

    public function store(ProfessorRequest $request){
        $novo_professor = $request->all();
        Professor::create($novo_professor);

        return redirect()->route('professor');

    }

    public function destroy ($id){
        Professor::find ($id)->delete();
        return redirect()->route('professor');

    }

    public function edit ($id){
        $professor = Professor::find ($id);
        return view('professor.edit', compact('professor'));

    }

    public function update(ProfessorRequest $request, $id){
        $professor = Professor::find($id)->update($request->all());
        return redirect()->route('professor');

    }
}
