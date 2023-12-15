@extends('layouts.apps')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Insertar Alumno</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('matriculas.store')}}">
                        @csrf
                        
                       
                        
                        <input id="alumno_id" type="hidden" class="form-control" name="alumno_id" value="{{ $c -> id}}">
                        <input id="grupo_id" type="hidden" class="form-control" name="grupo_id" value="{{ $gru -> id}}">
                       
                        
                        <div class="form-group row">
                            <label for="f_matricula" class="col-sm-4 col-form-label text-md-right">Fecha de Matricula:</label>
                            <div class="col-md-6">
                                <input id="f_matricula" type="date" class="form-control" name="f_matricula" value="<?php echo date("m/d/Y"); ?>"  autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="modulos_ids_originales" class="col-sm-4 col-form-label text-md-right">Modulos:</label>
                            <div class="col-md-6">
                                <select multiple="multiple" class="form-control" id="modulos_ids_originales" name="modulos_ids_originales[]">
                                @foreach ($cc as $modulo)
                                @if($modulo->ciclo_id == $gru->ciclo_id)
                                 <option value="{{$modulo->id}}">{{$modulo->modulo}}</option> 
                                @endif
                                @endforeach
                                </select>
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