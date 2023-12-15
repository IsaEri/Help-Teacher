@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Profesor</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('users.update',['id'=> $c->id]) }}">
                        @csrf

                       
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Nombre:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$c->name}}" required autofocus>
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
                            <label for="f_nacimiento" class="col-sm-4 col-form-label text-md-right">Fecha de Nacimiento:</label>
                            <div class="col-md-6">
                                <input id="f_nacimiento" type="date" class="form-control" name="f_nacimiento" value="{{$c->f_nacimiento}}"  autofocus>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="telefono" class="col-sm-4 col-form-label text-md-right">telefono:</label>
                            <div class="col-md-6">
                                <input id="telefono" type="number" class="form-control" name="telefono" value="{{$c->telefono}}"  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                           <label for="is_admin" class="col-sm-4 col-form-label text-md-right">Admin:</label>
                               <div class="col-md-6">
                                    <select class="form-control" id="is_admin" name="is_admin">
                                        @if($c->is_admin==1)
                                        <option value="1" selected>Admin</option>                                                      
                                        <option value="0">Guest</option> 
                                        @else                                                  
                                        <option value="0" selected>Guest</option> 
                                        <option value="1">Admin</option>  7
                                        @endif
                                    </select>
                                </div>
                        </div>
                        
                     
                        {!! method_field('put') !!}
                        <button type="submit" class="btn btn-primary">Guardar profesor</button>

                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection