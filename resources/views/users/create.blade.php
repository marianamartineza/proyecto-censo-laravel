@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
	<h1 class="title">Registro de usuarios</h1>
	
	<form action="{{route('users.store')}}" method="POST">
		
		@csrf


		<div class="form-create" >
		
			<div>
				<label>Clave*: </label><input type="text" name="clave" required>
			</div>
			<div>
				<label>Cedula*:	</label><input  type="text" name="cedula" required>
			</div>
			<div>
				<label>Correo*:</label><input  type="text" name="correo" required>
			</div>
			<div>
			¿Eres menor de edad?
			<input type="checkbox" name="age" value="18" id="">
			</div>
		
		
		</div>
		<div class="pos-button">
			<button type="submit" class="buttom-submit">Enviar formulario</button>
		</div>
		
		
		
	</form>
@endsection 