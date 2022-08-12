@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
	<h1>Bienvenido a la notificacion</h1>
	
	
	
	<form action="{{route('notificacion.store')}}" method="POST">
		
		@csrf
		
		<label>
			Mensaje: 
			<br>
			<input type="text" name="mensaje">
			<br>
		</label>
		
		<br>
		
		<button type="submit">Enviar formulario</button>
		
		
	</form>
@endsection 