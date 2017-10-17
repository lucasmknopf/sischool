<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = ['descricao','vagas','data_limite','oficina_id','horario_id','dia_id'];

    public function oficina(){
        return $this -> belongsTo('App\Oficina');

    }
    public function horario(){
        return $this -> belongsTo('App\Horario');

    }

    public function diaSemana(){
        return $this -> belongsTo('App\Dia');

    }

    public function turm(){
        return $this -> hasMany('App\Turma');

    }
}
