@extends('layouts.apps')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Insertar Alumno</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('matriculas.create2')}}">
                        @csrf
                        
                       
                        
                        <input id="alumno_id" type="hidden" class="form-control" name="alumno_id" value="{{ $c -> id}}" required autofocus>
                           
                       <div class="form-group row">
                       <label for="grupo_id" class="col-sm-4 col-form-label text-md-right">Grupo:</label>
                       <div class="col-md-6">
                            <select class="form-control" id="grupo_id" name="grupo_id">
                                @foreach ($g as $gru)
                                
                                    <option value="{{$gru->id}}">{{$gru->grupo}}</option>
                               
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