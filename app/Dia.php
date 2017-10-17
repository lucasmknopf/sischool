<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    protected $fillable = ['dia_semana'];

    public function diasem(){
        return $this -> hasMany('App\Turma');

    }
}
