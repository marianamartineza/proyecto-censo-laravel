@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
	<h1>Bienvenido a la creacion</h1>
	
	
	
	<form action="{{route('post.store')}}" method="POST">
		
		@csrf
		
		<label>
			Titulo: 
			<br>
			<input type="text" name="title">
			<br>
		</label>
		
		<label>
			Mensaje:
			<br>			
			<input  type="text" name="mensaje" >
			<br>
		</label>
		
		<label>
			url_img: 
			<br>
			<input type="text" name="url_img">
			|<br>
		</label>
		
		
		
		<br>
		
		<button type="submit">Enviar formulario</button>
		
		
	</form>
@endsection 