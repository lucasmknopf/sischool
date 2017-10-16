<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma_aluno extends Model
{
    protected $fillable = ['turma_id','aluno_id'];

    public function turma(){
        return $this -> belongsTo('App\Turma');

    }

    public function Aluno(){
        return $this -> belongsTo('App\Aluno');

    }
}
