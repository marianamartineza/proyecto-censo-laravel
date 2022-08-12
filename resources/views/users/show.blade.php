@extends('layauts.template')

@section('title','Curso' . " " . $user->nombre)

@section('content')

<div class="container">
<div class="container__grid">
	<h1 class="title">Bienvenido al curso {{$user->nombre}}</h1>
<div class="container__item">
	<h3>Usted posee el virus:</h3>
	<ul>
	@foreach($user->enfermedad as $role)
		
		<li>{{$role->nombre}}</li>
		
	@endforeach
    </ul>
</div>

<div class="container__item">
	<h3>Usted ha presentado los siguientes sintomas:</h3>
	<ul>
	@foreach($user->sintoma as $role)
		<li>{{$role->nombre}}</li>
	@endforeach
    </ul>

</div>
<div class="container__item">
	<a href="">Editar curso</a>
	<p><strong>Categoria: 
	</strong>{{$user->nombre}}</p>
</div>
</div>
</div>
@endsection 