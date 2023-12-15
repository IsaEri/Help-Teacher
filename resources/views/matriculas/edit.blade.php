@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Modulos</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('matriculas.update',['id'=> $c->matricula->id]) }}">
                        @csrf

                       
                        <div class="form-group row">
                            <label for="modulos_ids_originales" class="col-sm-4 col-form-label text-md-right">Modulos:</label>
                            <div class="col-md-6">
                                <select multiple="multiple" class="form-control" id="modulos_ids_originales" name="modulos_ids_originales[]">
                                @foreach ($cc as $modulo)
                                @foreach ($g as $grupo)
                                @if($c->matricula->grupo_id == $grupo->id)
                                    @if($grupo->ciclo_id == $modulo->ciclo_id)
                                         <option value="{{$modulo->id}}">{{$modulo->modulo}}</option> 
                                    @endif
                                @endif
                                @endforeach
                                @endforeach
                                </select>
                            </div>
                        </div>

                        {!! method_field('put') !!}
                        <button type="submit" class="btn btn-primary">Guardar</button>

                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection