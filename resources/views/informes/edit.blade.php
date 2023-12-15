@extends('layouts.apps')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Informe</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('informes.update',['id'=> $c->id])}}">
                        @csrf
                       
                                
                        <div class="form-group row">
                            <label for="valoracion" class="col-sm-4 col-form-label text-md-right">Valoración:</label>
                            <div class="col-md-6">
                                <textarea id="valoracion"  name="valoracion" class="form-control" rows="5" >{{$c->valoracion}}</textarea>
                            </div>
                         </div>
                        <div class="form-group row">
                            <label for="apreciacion" class="col-sm-4 col-form-label text-md-right">Apreciación:</label>
                            <div class="col-md-6">
                                <textarea id="apreciacion"  name="apreciacion" class="form-control" rows="5"  >{{$c->apreciacion}}</textarea>
                            </div>
                        </div>
                        
                       <div class="form-group row">
                            <label for="actividades" class="col-sm-4 col-form-label text-md-right">Actividades:</label>
                            <div class="col-md-6">
                                <textarea id="actividades"  name="actividades" class="form-control" rows="5"  >{{$c->actividades}}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="evaluacion" class="col-sm-4 col-form-label text-md-right">Evaluación:</label>
                            <div class="col-md-6">
                                <textarea id="evaluacion"  name="evaluacion" class="form-control" rows="5" >{{$c->evaluacion}}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="f_entrega" class="col-sm-4 col-form-label text-md-right">Fecha de entrega:</label>
                            <div class="col-md-6">
                                <input id="f_entrega" type="date" class="form-control" name="f_entrega" value="{{ $c->f_entrega }}" placeholder="Si es entregado al alumno"  autofocus>
                            </div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Guardar</button>

                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection