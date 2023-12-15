<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Matricula;
use App\Ciclo_modulo;
use App\Informe;
use App\Grupo;
use PDF;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class InformeController extends Controller
{

    
    public function create($id,$id_modulo)
    {
        $c=Alumno::find($id);
        $cc=Ciclo_modulo::find($id_modulo);
         $informes=Informe::all();
         return view("informes.create",compact('c','cc','informes'));
    }
    
    
   public function store(Request $request)
    
    {   $ca=Informe::find($request['id']);
         $c=Informe::create($request->all());
         return redirect('/alumnos/form/'.$request['modulo_id'].'/'.$request['id_alumno']);
    }
    
    public function edit($id)
    {
        $c=Informe::find($id);
        return view("informes.edit",compact('c'));
    }
    public function update(Request $request, $id)
    {
        $datos=$request->all();
        Informe::find($id)->update($datos);
        return redirect()->route('alumnos.index');
    }
   
}
