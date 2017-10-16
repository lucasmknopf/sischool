<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    protected $fillable = ['nome_oficina','professor_id'];

    public function ofici(){
        return $this -> hasMany('App\Oficina');

    }
    public function professor(){
        return $this -> belongsTo('App\Professor');

    }
}
