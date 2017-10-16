<?php

namespace App\Http\Controllers;

use App\Auxiliar;
use App\Http\Requests\AuxiliarRequest;
use Illuminate\Http\Request;


class AuxiliarController extends Controller
{
    public function index(){
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
