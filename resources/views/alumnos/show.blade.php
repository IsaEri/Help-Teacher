@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 @csrf
                <div class="card-header">
                    @if ($alumnos->sexo == 'M')
                            Datos de la alumna {{$alumnos->nombre}} {{$alumnos->apellidos}}
                    @else
                            Datos del alumno {{$alumnos->nombre}} {{$alumnos->apellidos}}
                    @endif
                   
               <!--
               <a href="{{url('enviar',['email'=>$alumnos->email])}}" class="btn btn-success">Enviar</a>
               -->
                 
                </div>
                <div class="card-body">
                    <div class="cardss">
                    <div>
                     @csrf    
                          DNI: {{$alumnos->dni}}<br>
                          Email: {{$alumnos->email}}<br>
                          @if ($alumnos->sexo == 'M')
                               Sexo: Mujer<br>
                          @else
                                Sexo: Hombre<br>
                          @endif
                          
                          F.Nacimiento: {{$alumnos->f_nacimiento}}<br>
                          Tlf: {{$alumnos->telefono}}<br>
                          Descapacidad: {{$alumnos->discapacidad}}<br>
                          @if ($alumnos->discapacidad == 'Sí')
                              Porcentaje: {{$alumnos->porcentaje_discapacidad}}<br>
                              Tipo: {{$alumnos->tipo_discapacidad}}<br>
                          @endif
                          Fecha de matricula: {{$alumnos->matricula->f_matricula}}<br>
                          @if ($alumnos->matricula->repite == "")
                          
                          @else
                          Repite: {{$alumnos->matricula->repite}}
                          @endif
                          </div>
                          <div>
                              Modulos matriculados:  <a href="{{route('matriculas.edit',['id'=>$alumnos->id])}}" class="link">Editar</a><br>
                          <?php
                          $modulo = array("{$alumnos->matricula->modulos_ids_originales}");
                          $num = count(explode(",",$modulo[0]));
                          $modulos = explode(",",$modulo[0]);
                            for ($i = 0; $i < $num; $i++) {
                            print_r("<a id='yo' href='http://informes-isaeri.c9users.io/alumnos/form/$modulos[$i]/".$alumnos->id."'>".$modulos[$i].'</a><br>');
                            }
                   ?>
                         
                       </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var b = document.getElementById("yo"); 
</script>
@endsection