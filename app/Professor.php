<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Professor extends Authenticatable
{
    protected $fillable = ['nome','rg','cpf','endereco','telefone','data_nasc','email', 'password'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profe(){
        return $this -> hasMany('App\Professor');

    }
}
