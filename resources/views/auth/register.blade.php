@extends('layouts.app')
@section('title','Registro')
@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg" >
	<br>
	<h1 class="text-5xl text-center pt.24">Registro</h1>
	<form class="mt-4" method="POST" action="">
		@csrf
		<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="usuario" id="name" name="name">
		<input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">
		<input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">
		<input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Confirme password" id="Confirme-password" name="Confirme-password">
		<select class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
			<option>Selecciona Turno</option>
			<option>Tarde</option>
			<option>Mañana</option>
		</select>
		<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2  my-3 hover:bg-indigo-600">Registrar</button>   
	</fom>
</div>
@endsection