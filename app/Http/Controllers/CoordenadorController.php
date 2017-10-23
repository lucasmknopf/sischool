<?php

namespace App\Http\Controllers;


use App\Coordenador;
use App\Http\Requests\CoordenadorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CoordenadorController extends Controller
{
    public function listcoo(){
        $coordenadors = Coordenador::all();
        return view('coordenador.list', ['coordenadors'=> $coordenadors]);

    }


    public function construct(){

        //$this->middleware('auth');
    }

    public function index(){
        return view('coordenador.index');
    }

    public function login(){

        return view('login-adm');

    }

    public function postlogin(Request $request){

        $validator = validator($request->all(),[
            'email'=>'required|min:3|max:100',
            'password'=>'required|min:3|max:100',

        ]);

        if ($validator->fails()){
            return redirect('/coordenador/login')
                ->withErrors($validator)
                ->withInput();
        }
        $credentials=['email'=>$request->get('email'),'password'=>$request->get('password')];

        if (auth()->guard('admin')->attempt($credentials)){
            return redirect('/coordenador');
        }else{
            return redirect('/coordenador/login')
                ->withErrors(['errors'=>'Login Inválido!'])
                ->withInput();
        }
    }

    public function logout(){

        auth()->guard('admin')->logout();
        return redirect('/coordenador/login');
        }

/*
    public function create(){
        return view ('coordenador.create');


    }

    public function store(CoordenadorRequest $request){
        $novo_coordenador = $request->all();
        Coordenador::create($novo_coordenador);

        return redirect()->route('coordenador');

    }

    public function destroy ($id){
        Coordenador::find ($id)->delete();
        return redirect()->route('coordenador');

    }

    public function edit ($id){
        $coordenador = Coordenador::find ($id);
        return view('coordenador.edit', compact('coordenador'));

    }

    public function update(CoordenadorRequest $request, $id){
        $coordenador = Coordenador::find($id)->update($request->all());
        return redirect()->route('coordenador');

    }
*/
}
