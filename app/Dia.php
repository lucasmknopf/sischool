<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    protected $fillable = ['dia_semana'];

    public function dias(){
        return $this -> hasMany('App\Dia');

    }
}
