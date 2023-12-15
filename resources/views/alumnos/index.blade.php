@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header"><b>Alumnado</b><br><br>
                 <!-- Buscador -->
                 {!! Form::open([ 'route' => 'alumnos.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
                     <div class="input-group">
                         {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
                         <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"  width='40px'></span></span>
                     </div>
                     {!! Form::close() !!}
                     <!-- Fin buscador -->
                     
                 </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tabla">
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>email</th>
                            <th>sexo</th>
                            <th>fecha nacimiento</th>
                            <th>telefono</th>
                            <th>discapacidad</th>
                            @if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2)
                            <th></th>
                            @endif
                        </tr>
                        
                    @foreach($alumnos as $alumno)
                        <tr>
                            @if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 0)
                            <td><a href='{{route('alumnos.show',['id'=>$alumno->id])}}'>{{$alumno->nombre}} {{$alumno->apellidos}}</a></td>
                            @else
                            <td>{{$alumno->nombre}} {{$alumno->apellidos}}</td>
                            @endif
                            <td>{{$alumno->dni}}</td>
                            <td>{{$alumno->email}}</td>
                            <td>{{$alumno->sexo}}</td>
                            <td>{{$alumno->f_nacimiento}}</td>
                            <td>{{$alumno->telefono}}</td>
                            <td>{{$alumno->discapacidad}}</td>
                            @if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2)
                            <td><a href='{{route('alumnos.edit',['id'=>$alumno->id])}}' class="btn btn-success btn-sm">Editar</a></td>
                            @endif
                           <!-- 
                           <td>
                                <form method="post" action="{{route('alumnos.destroy',['id'=>$alumno->id])}}">
                                    @csrf
                                    {!! method_field('delete') !!}
                                    <input class="btn btn-danger btn-sm" type="submit" value="Borrar">
                                </form>
                            </td> 
                            -->
                        </tr>
                    @endforeach
                    </table>
                    
                     {{ $alumnos -> links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small cyan darken-3 mt-4">

  <div class="footer-copyright text-center py-3">© 2019 Copyright: Isabel Rodríguez Pérez
  
  </div>


</footer>

@endsection