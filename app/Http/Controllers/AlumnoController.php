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

class AlumnoController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         
        $alumnos=Alumno::search($request->nombre)->orderBy("nombre")->paginate(20);
        return view("alumnos.index",compact('alumnos'));  //Carga la vista index.blade.php
        
    }

    
    public function pdf(){
        $alumnos=Alumno::orderBy("id")->get();
        $pdf = PDF::loadView('alumnos.pdf', compact('alumnos'));
        return $pdf->download('alumnos.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $alumnos=Alumno::all();
         return view("alumnos.create",compact('alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {   $ca=Alumno::find($request['id']);
         $c=Alumno::create($request->all());
         return redirect('matriculas/create/'.$request['id']);
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
     
     
     
     public function form($id_modulo,$id){
         $modulos=Ciclo_modulo::find($id_modulo);
         $alumnos=Alumno::all();
         $alumno=Alumno::find($id);
         $informes=Informe::all();
         return view("alumnos.form",compact('modulos','alumnos','alumno','informes'));
     }
    public function show($id)
    {
        $alumnos=Alumno::find($id);
        return view("alumnos.show",compact('alumnos'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $c=Alumno::find($id);
        $ca=Alumno::all();
        return view("alumnos.edit",compact('c','ca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=$request->all();
        Alumno::find($id)->update($datos);
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Alumno::find($id)->delete();
         return redirect()->route('alumnos.index');
    }
    /*
    
    public function matricula($id){
        
         $c =Alumno::find($id);    
         $cc=Ciclo_modulo::all();
         $g=Grupo::all();
         return view('/alumnos/matricula',compact('c','cc','g'));
    }
    
    
    
    public function storeMatricula(Request $request)
    {   
        $c = $request->input('modulos_ids_originales');
        $c = implode(',', $c);

        $input = $request->except('modulos_ids_originales');
        //Assign the "mutated" news value to $input
        $input['modulos_ids_originales'] = $c;
         Matricula::create($input);
         return redirect()->route('alumnos.index');
    }
    
    public function editMatricula($id)
    {
        $c=Alumno::find($id);
        $ca=Alumno::all();
        $cc=Ciclo_modulo::all();
        return view("alumnos.editMatricula",compact('c','ca','cc'));
    }
    public function updateMatricula(Request $request, $id)
    {
        $c = $request->input('modulos_ids_originales');
        $c = implode(',', $c);
        $input = $request->except('modulos_ids_originales');
        //Assign the "mutated" news value to $input
        $input['modulos_ids_originales'] = $c;
        Matricula::find($id)->update($input);
        return redirect()->route('alumnos.index');
    }
   */
}
