<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Coordenador extends Authenticatable
{

    protected $fillable = ['nome','rg','cpf','endereco','telefone','data_nasc','email','password'];
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
