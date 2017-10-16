<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['nome','rg','cpf','endereco','telefone','data_nasc','email'];

    public function profe(){
        return $this -> hasMany('App\Professor');

    }
}
