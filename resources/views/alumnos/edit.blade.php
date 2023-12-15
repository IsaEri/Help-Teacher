@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Alumno</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('alumnos.update',['id'=> $c->id]) }}">
                        @csrf

                       
                        <div class="form-group row">
                            <label for="nombre" class="col-sm-4 col-form-label text-md-right">Nombre:</label>
                            <div class="col-md-3">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{$c->nombre}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellidos" class="col-sm-4 col-form-label text-md-right">apellidos:</label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{$c->apellidos}}"  autofocus>
                            </div>
                        </div>
                        
                       <div class="form-group row">
                            <label for="dni" class="col-sm-4 col-form-label text-md-right">dni:</label>
                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{$c->dni}}"  autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">email:</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$c->email}}"  autofocus>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                       <label for="sexo" class="col-sm-4 col-form-label text-md-right">sexo:</label>
                       <div class="col-md-6">
                            <select class="form-control" id="curso" name="sexo">
                                @if($c->sexo=='M')
                                    <option value="M" selected>Mujer</option>                                                      
                                    <option value="V">Varon</option> 
                                @else                                                  
                                    <option value="V" selected>Varon</option> 
                                    <option value="M">Mujer</option>  
                                @endif
                            </select>
                        </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="f_nacimiento" class="col-sm-4 col-form-label text-md-right">Fecha de Nacimiento:</label>
                            <div class="col-md-6">
                                <input id="f_nacimiento" type="date" class="form-control" name="f_nacimiento" value="{{$c->f_nacimiento}}"  autofocus>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="telefono" class="col-sm-4 col-form-label text-md-right">telefono:</label>
                            <div class="col-md-6">
                                <input id="telefono" type="phone" class="form-control" name="telefono" value="{{$c->telefono}}"  autofocus>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                       <label for="discapacidad" class="col-sm-4 col-form-label text-md-right">discapacidad:</label>
                       <div class="col-md-6">
                            <select class="form-control" id="discapacidad" name="discapacidad">
                                    <option value="No">No</option>                                                      
                                    <option value="Sí">Sí</option> 
                            </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="porcentaje_discapacidad" class="col-sm-4 col-form-label text-md-right">Porcentaje de discapacidad:</label>
                            <div class="col-md-6">
                                <input id="porcentaje_discapacidad" type="text" class="form-control" name="porcentaje_discapacidad" value="{{$c->porcentaje_discapacidad}}"  autofocus>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="tipo_discapacidad" class="col-sm-4 col-form-label text-md-right">Tipo de discapacidad:</label>
                            <div class="col-md-6">
                                <input id="tipo_discapacidad" type="text" class="form-control" name="tipo_discapacidad" value="{{$c->tipo_discapacidad}}"  autofocus>
                            </div>
                        </div>

                        {!! method_field('put') !!}
                        <button type="submit" class="btn btn-primary">Guardar alumnos</button>

                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection