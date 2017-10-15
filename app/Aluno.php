<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome','certidao_nasc','endereco','telefone','data_nasc','turno','oficina_id'];

}
