<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordenador extends Model
{
    protected $fillable = ['nome','rg','cpf','endereco','telefone','data_nasc','email'];
}
