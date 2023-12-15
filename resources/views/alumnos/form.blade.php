@extends('layouts.apps')
@section('content')
<div class="container">
    @if(session()->has('message'))
                <div class="alert alert-success">
                {{ session()->get('message') }}
                </div>
                @endif
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 @csrf
                <div class="card-header">
                    {{$modulos->modulo}}
                    
                    @foreach ($informes as $informe)
                          @if ($alumno->id == $informe->id_alumno && $modulos->id == $informe->modulo_id)
                           <a id="editar" href='{{route('informes.edit',['id'=>$informe->id])}}' class="btn btn-primary">Editar informe</a>
                           <a href="{{url('enviar',['email'=>$alumno->email, 'id_modulo'=>$modulos->id, 'id'=>$alumno->id, 'valoracion'=>$informe->valoracion,
                           'apreciacion'=>$informe->apreciacion,'actividades'=>$informe->actividades,'evaluacion'=>$informe->evaluacion])}}" class="btn btn-success">Enviar</a>
                          @endif
                    @endforeach
                  <a id="crear" href='http://informes-isaeri.c9users.io/informes/create/{{$alumno->id}}/{{$modulos->id}}' class="btn btn-primary">Crear informe</a>
                   
                </div>
                <div class="card-body">
                    <div class="cards">
                    @csrf    
                            
                          <b>Alumn@:</b><br>{{$alumno->nombre}} {{$alumno->apellidos}}<br>
                          <b>Curso:</b><br> {{$modulos->curso}}<br><br>
                          @foreach ($informes as $informe)
                          @if ($alumno->id == $informe->id_alumno && $modulos->id == $informe->modulo_id)
                          <b>VALORACIÓN DEL APRENDIZAJE REALIZADO:</b><br> {{$informe->valoracion}}<br><br>
                          <b>APRECIACIÓN DEL GRADO DE CONSECUCIÓN DE LAS CAPACIDADES ENUNCIADAS EN LOS MÓDULOS PROFESIONALES QUE
                          HAN DE SER OBJETOS DE RECUPERACIÓN:</b><br> {{$informe->apreciacion}}<br><br>
                          <b>ASIGNACIÓN DE ACTIVIDADES DE RECUPERACIÓN AL ALUMNADO Y, EN SU CASO, APLICACIÓN DE MEDIDAS EDUCATIVAS
                          ESPECIALES:</b><br>  {{$informe->actividades}}<br><br>
                          <b>INDICACIÓN EXPRESA DE LA EVALUACIÓN FINAL EN QUE SERÁN EVALUADOS:</b><br> {{$informe->evaluacion}}<br>
                          @endif
                          @endforeach
                     
                      
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
     var crear = document.getElementById('crear');
     var editar = document.getElementById('editar');
     if (editar){
         crear.style.display = "none";
     }
     
</script>
@endsection