@extends('layouts.sidebar')
@section('title','Registro')
@section('content')
<div id="panel">
    <div class="panel-header">
	<h1 class="text-3xl text-right pt.24 font-bold" style="position: absolute; top: 25px; left: 400px;">Registro de Animales</h1>
    </div>
    <div class="panel-content">
		<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg" >
		<form class="mt-4" method="POST" action="{{ route('registroAnimales.store') }}" enctype="multipart/form-data">
			@csrf
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre (animalito)" id="nombre" name="nombre">
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Codigo" id="codigo" name="codigo">
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Sexo" id="sexo" name="sexo">
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Peso" id="peso" name="peso">
			
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Edad" id="edad" name="edad">
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Raza" id="raza" name="raza">
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="# de Vacunas" id="numeroVacunas" name="numeroVacunas">
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="# de crias" id="numeroCrias" name="numeroCrias">
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="genero de crias" id="generoCrias" name="generoCrias">
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Proposito" id="Proposito" name="Proposito">

			<div class="form-group">
				<label for="avatar">Avatar</label>
				<input type="file" name="avatarAnimales" id="avatarAnimales" class="form-control-file"><
			</div>

			<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2  my-3 hover:bg-indigo-600">Registrar</button>   
		</fom>
	 </div>    
    </div>
</div>

@endsection