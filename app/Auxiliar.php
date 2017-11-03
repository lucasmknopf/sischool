<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Auxiliar extends Authenticatable
{
    protected $fillable = ['nome','rg','cpf','endereco','telefone','data_nasc','email', 'password'];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
