<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','id_alumno', 'id_profesor','modulo_id','valoracion','apreciacion',
    'actividades','evaluacion','f_entrega'];
    
    
    
    public function ciclo_modulo()
    {
        return $this->hasMany('App\Ciclo_modulo', 'modulo_id');
    }
    
    public function alumno()
    {
        return $this->hasMany('App\Alumno', 'id_alumno');
    }
}
