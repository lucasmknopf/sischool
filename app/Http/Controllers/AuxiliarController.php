<?php

namespace App\Http\Controllers;

use App\Auxiliar;
use App\Http\Requests\AuxiliarRequest;
use Illuminate\Http\Request;


class AuxiliarController extends Controller
{
    public function construct(){

        //$this->middleware('auth');
    }

    public function index(){
        return view('auxiliar.index');
    }

    public function login(){

        return view('login-auxi');

    }

    public function postlogin(Request $request){

        $validator = validator($request->all(),[
            'email'=>'required|min:3|max:100',
            'password'=>'required|min:3|max:100',

        ]);

        if ($validator->fails()){
            return redirect('/auxiliar/login')
                ->withErrors($validator)
                ->withInput();
        }
        $credentials=['email'=>$request->get('email'),'password'=>$request->get('password')];

        if (auth()->guard('auxi')->attempt($credentials)){
            return redirect('/auxiliar');
        }else{
            return redirect('/auxiliar/login')
                ->withErrors(['errors'=>'Login Inválido!'])
                ->withInput();
        }
    }

    public function logout(){

        auth()->guard('auxi')->logout();
        return redirect('/auxiliar/login');
    }
    
    public function listar(){
        $auxiliars = Auxiliar::all();
        return view('auxiliar.list', ['auxiliars'=> $auxiliars]);

    }

    public function create(){
        return view ('auxiliar.create');


    }

    public function store(AuxiliarRequest $request){
        $novo_auxiliar = $request->all();
        Auxiliar::create($novo_auxiliar);

        return redirect()->route('auxiliar');

    }

    public function destroy ($id){
        Auxiliar::find ($id)->delete();
        return redirect()->route('auxiliar');

    }

    public function edit ($id){
        $auxiliar = Auxiliar::find ($id);
        return view('auxiliar.edit', compact('auxiliar'));

    }

    public function update(AuxiliarRequest $request, $id){
        $auxiliar = Auxiliar::find($id)->update($request->all());
        return redirect()->route('auxiliar');

    }
}
