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

class MatriculaController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }
    public function create($id){
        
         $c =Alumno::find($id);
         $g=Grupo::all();
         return view('matriculas.create',compact('c','g'));
    }
    public function create2(Request $request){
         $c =Alumno::find($request['alumno_id']);    
         $cc=Ciclo_modulo::all();
         $gru=Grupo::find($request['grupo_id']);
         return view('matriculas.create2',compact('c','cc','gru'));
    }
    public function store(Request $request)
    {   
        $c = $request->input('modulos_ids_originales');
        $c = implode(',', $c);
        $input = $request->except('modulos_ids_originales');
        //Assign the "mutated" news value to $input
        $input['modulos_ids_originales'] = $c;
         Matricula::create($input);
         return redirect()->route('alumnos.index');
    }
    
    public function edit($id)
    {
        $c=Alumno::find($id);
        $ca=Alumno::all();
        $cc=Ciclo_modulo::all();
        $g=Grupo::all();
        return view("matriculas.edit",compact('c','ca','cc','g'));
    }
    public function update(Request $request, $id)
    {
        $c = $request->input('modulos_ids_originales');
        $c = implode(',', $c);
        $input = $request->except('modulos_ids_originales');
        //Assign the "mutated" news value to $input
        $input['modulos_ids_originales'] = $c;
        Matricula::find($id)->update($input);
        return redirect()->route('alumnos.index');
    }
   
}
