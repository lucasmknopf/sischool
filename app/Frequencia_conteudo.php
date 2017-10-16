<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequencia_conteudo extends Model
{
    protected $fillable = ['presenca','atividade_ministrada','data','turma_id','aluno_id'];

    public function turma(){
        return $this -> belongsTo('App\Turma');

    }

    public function Aluno(){
        return $this -> belongsTo('App\Aluno');

    }
}
