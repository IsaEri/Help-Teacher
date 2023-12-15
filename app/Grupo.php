<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['id','curso_escolar','grupo','curso','turno','letra', 'ciclo_id','tutor_id'];
     
     
 
    public function matricula()
    {
        return $this->hasMany('App\Matricula', 'grupo_id');
    }
}
