@extends('layouts.apps')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Insertar Alumno</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('alumnos.store')}}">
                        @csrf
                        
                       <div class="form-group row">
                            <label for="id" class="col-sm-4 col-form-label text-md-right">ID:</label>
                            <div class="col-md-3">
                                <input id="id" type="number" class="form-control" name="id" value="{{ old('id') }}"  autofocus>
                            </div>
                         </div>
                        <div class="form-group row">
                            <label for="nombre" class="col-sm-4 col-form-label text-md-right">Nombre:</label>
                            <div class="col-md-3">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
                            </div>
                         </div>
                        <div class="form-group row">
                            <label for="apellidos" class="col-sm-4 col-form-label text-md-right">apellidos:</label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{old('apellidos')}}"  autofocus>
                            </div>
                        </div>
                        
                       <div class="form-group row">
                            <label for="dni" class="col-sm-4 col-form-label text-md-right">dni:</label>
                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}"  autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">email:</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  autofocus>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                       <label for="sexo" class="col-sm-4 col-form-label text-md-right">sexo:</label>
                       <div class="col-md-6">
                            <select class="form-control" id="curso" name="sexo">
                                    <option value="M">Mujer</option>                                                      
                                    <option value="V">Varon</option> 
                            </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="f_nacimiento" class="col-sm-4 col-form-label text-md-right">Fecha de Nacimiento:</label>
                            <div class="col-md-6">
                                <input id="f_nacimiento" type="date" class="form-control" name="f_nacimiento" value="{{ old('f_nacimiento') }}"  autofocus>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="telefono" class="col-sm-4 col-form-label text-md-right">telefono:</label>
                            <div class="col-md-6">
                                <input id="telefono" type="phone" class="form-control" name="telefono" value="{{ old('telefono') }}"  autofocus>
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
                                <input id="porcentaje_discapacidad" type="number" class="form-control" min="0" name="porcentaje_discapacidad" value="0"  autofocus>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="tipo_discapacidad" class="col-sm-4 col-form-label text-md-right">Tipo de discapacidad:</label>
                            <div class="col-md-6">
                                <input id="tipo_discapacidad" type="text" class="form-control" name="tipo_discapacidad" value="{{ old('tipo_discapacidad') }}"  autofocus>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar alumno</button>

                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection