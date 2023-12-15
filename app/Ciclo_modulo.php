<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo_modulo extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['id','codigo', 'codigo_canarias','ciclo_id','modulo','ects','curso','curso_distancia','h_totales','h_totales_distancia','h_reales',
    'h_semanales','bilingue','a_objetivos','a_competencias'];

    
    public function matricula()
    {
       return $this->hasOne('App\Matricula');
    }
    
    public function informe()
    {
        return $this->belongsTo('App\Informe','modulo_id');
    }
}
