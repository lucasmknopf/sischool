<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auxiliar extends Model
{
    protected $fillable = ['nome','rg','cpf','endereco','telefone','data_nasc','email'];

}
