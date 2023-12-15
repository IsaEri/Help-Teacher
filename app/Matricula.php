<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    //public $timestamps = false;
    protected $fillable = ['id','alumno_id','grupo_id','f_matricula','f_baja','repite',
    'modulos_ids','modulos_ids_originales','pendientes_ids'];
     
     
 
 public function alumno()
    {
        //return $this->belongsTo('App\Alumno', 'alumno_id');
        return $this->belongsTo('App\Alumno');
    }
    
     public function ciclo_modulo()
    {
        return $this->belongsTo('App\Ciclo_modulo', 'modulos_id');
    }
    
     public function grupo()
    {
        return $this->belongsTo('App\Grupo', 'grupo_id');
    }
}
