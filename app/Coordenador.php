<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Coordenador extends Authenticatable
{

    use Notifiable;

    protected $guard = 'admin';

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
