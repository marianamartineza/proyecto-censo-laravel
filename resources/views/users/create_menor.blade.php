@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
	<h1 class="title">Registro de representates</h1>
	
	
	
	<form action="{{route('menor.store')}}" method="POST">
		
		@csrf
		
		
	<?php /*	<label>
			Nombre: 
			<br>
			<input type="text" name="nombre">
			<br>
		</label>
		
		<label>
			Apellido:
			<br>			
			<input  type="text" name="apellido" >
			<br>
		</label>
	*/?>
		
				
			<input  type="hidden" name="correo" value="{{$request->correo}}">
			<input  type="hidden" name="clave" value="{{$request->clave}}">
			<input type="hidden" name="re_clave" value="{{$request->re_clave}}">
			<input  type="hidden" name="cedula" value="{{$request->cedula}}">
		
		
		<div class="form-create" >
		
			<div>
				<label>Nombre*: </label><input type="text" name="nombre" required>
			</div>
			<div>
				<label>Apellido*:	</label><input  type="text" name="apellido" required>
			</div>
			<div>
				<label>dirección del municipio*:</label><input  type="text" name="dire_municipio" required>
			</div>
			<div>
				<label>dirección de la localidad*:</label><input  type="text" name="dire_localidad" required>
			</div>
			<div>
				<label>Teléfono fijo*:</label><input  type="text" name="tele_fijo" required>
			</div>
			<div>
				<label>Teléfono movil*:</label><input  type="text" name="tele_movil" required>
			</div>
			
			
			</div>
			
			<div class="pos-button">
			<button type="submit" class="buttom-submit">Enviar</button>
		</div>
			
			
		
		
		
	</form>
@endsection 