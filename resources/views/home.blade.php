@extends('layouts.apps')

@section('content')


	<div class="container">

		<div class="texto">
			@if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2)
			<p align='center'>
				<a class="links" href='{{route('alumnos.index')}}'>Alumnos</a>
			</p>
			<p align='center'>
				<a class="links" href='{{route('users.index')}}'>Profesores</a>
			</p>
			<p align='center'>
				<a class="links" href='{{route('alumnos.create')}}'>Matricular alumn@</a>
			</p>
			<p align='center'>
				<a class="links" href='{{ route('register') }}'>Añadir usuario (Profesor o secretario)</a>
			</p>
			@else
			<p align='center'>
				<a class="links" href='{{route('alumnos.index')}}'>Alumnos</a>
			</p>
			@endif
		</div>
	</div>

<footer class="page-footer font-small cyan darken-3 mt-4">

  <div class="footer-copyright text-center py-3">© 2019 Copyright: Isabel Rodríguez Pérez
  </div>


</footer>


@endsection
