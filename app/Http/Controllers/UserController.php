<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users=User::search($request->name)->orderBy("name")->paginate(20);
        return view("users.index",compact('users'));  //Carga la vista index.blade.php
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c=User::find($id);
        $ca=User::all();
        return view("users.edit",compact('c','ca'));
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
        User::find($id)->update($datos);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         User::find($id)->delete();
         return redirect()->route('users.index');
    }
    
   
   
}
