<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoordLoginController extends Controller
{
    public function __construct(){

        $this->middleware('guest:admin');
    }
   public function showLoginForm(){
       return view('auth.login-adm');
   }
   public function login(){
       $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required|min:4'
       ]);
   }
}
