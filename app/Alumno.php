<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //public $timestamps = false;
    protected $fillable = ['id','dni','nombre','apellidos','sexo','f_nacimiento',
    'telefono','email','discapacidad','porcentaje_discapacidad','tipo_discapacidad'];
    
    
    
    public function matricula()
    {
        return $this->hasOne('App\Matricula');
    }
    
    public function informe()
    {
        return $this->belongsTo('App\Informe', 'id_alumno');
    }
    
    public function scopeSearch($query, $name){
        return $query->where('nombre', 'LIKE', "%$name%");
    }
   
}
