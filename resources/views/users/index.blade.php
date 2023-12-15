@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header"><b>Profesores</b><br><br>
                 <!-- Buscador -->
                 {!! Form::open([ 'route' => 'users.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
                     <div class="input-group">
                         {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
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
                            <th>fecha nacimiento</th>
                            <th>telefono</th>
                            <th>Admin.</th>
                            <th></th>
                        </tr>
                        
                    @foreach($users as $user)
                        <tr>
                            @if($user->is_admin==2)
                            @else
                            <td>{{$user->name}}</td>
                            <td>{{$user->dni}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->f_nacimiento}}</td>
                            <td>{{$user->telefono}}</td>
                            <td>
                                @if ($user->is_admin==1)
                                    SI
                                @else
                                    NO
                                @endif
                            </td>
                            <td><a href='{{route('users.edit',['id'=>$user->id])}}' class="btn btn-success btn-sm">Editar</a></td>
                           <!-- 
                           <td>
                                <form method="post" action="{{route('users.destroy',['id'=>$user->id])}}">
                                    @csrf
                                    {!! method_field('delete') !!}
                                    <input class="btn btn-danger btn-sm" type="submit" value="Borrar">
                                </form>
                            </td> 
                            -->
                            @endif
                        </tr>
                    @endforeach
                    </table>
                    
                     {{ $users -> links() }}
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