<?php

namespace App\Http\Controllers;

use App\Professor;
use App\Http\Requests\ProfessorRequest;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function construct(){

        //$this->middleware('auth');
    }

    public function index(){
        return view('professor.index');
    }

    public function login(){

        return view('login-prof');

    }

    public function postlogin(Request $request){

        $validator = validator($request->all(),[
            'email'=>'required|min:3|max:100',
            'password'=>'required|min:3|max:100',

        ]);

        if ($validator->fails()){
            return redirect('/professor/login')
                ->withErrors($validator)
                ->withInput();
        }
        $credentials=['email'=>$request->get('email'),'password'=>$request->get('password')];

        if (auth()->guard('prof')->attempt($credentials)){
            return redirect('/professor');
        }else{
            return redirect('/professor/login')
                ->withErrors(['errors'=>'Login Inválido!'])
                ->withInput();
        }
    }

    public function logout(){

        auth()->guard('prof')->logout();
        return redirect('/professor/login');
    }

  public function listar(){
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
