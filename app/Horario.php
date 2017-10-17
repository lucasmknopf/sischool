<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = ['horarios'];

    public function hora(){
        return $this -> hasMany('App\Turma');

    }
}
