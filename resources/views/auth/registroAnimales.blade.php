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
			<!--<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Sexo" id="sexo" name="sexo">-->
			
			<select type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Sexo" id="sexo" name="sexo">
					<option value="macho">Macho</option>
					<option value="hembra">Hembra</option>
			</select>

			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Peso" id="peso" name="peso">
			
			<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Edad" id="edad" name="edad">
			<select class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Raza" id="raza" name="raza">
					<option value="Criollo">Criollo</option>
					<option value="Nelore">Nelore</option>
					<option value="Mestizo">Mestizo</option>
					<option value="Holstein">Holstein</option>
			</select>
			<select class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="# de Vacunas" id="numeroVacunas" name="numeroVacunas">
					<option value="1 (Synd Ade)">1 (Synd Ade)</option>
					<option value="2 (Synd Ade, Derrisan Cepaera)">2 (Synd Ade, Derrisan Cepaera)</option>
					<option value="3 (Rabat Vac, Synd Ade, Derrisan Cepaera)">3 (Rabat Vac, Synd Ade, Derrisan Cepaera)</option>
					<option value="4 (Covenix 10, Rabat Vac, Synd Ade, Derrisan Cepaera)">4 (Covenix 10, Rabat Vac, Synd Ade, Derrisan Cepaera)</option>
			</select>
			<select class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="# de crias" id="numeroCrias" name="numeroCrias">
					<option value="Ninguno">Ninguno</option>
					<option value="1 cria">1 cria</option>
					<option value="2 crias">2 crias</option>
			</select>
			
			<select class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="genero de crias" id="generoCrias" name="generoCrias">
					<option value="Ninguno">Ninguno</option>
					<option value="macho(s)">macho(s)</option>
					<option value="hembra(s)">hembra(s)</option>
					<option value="macho y hembra">macho y hembra</option>
			</select>
			<select class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Proposito" id="Proposito" name="Proposito">
					<option value="Leche">Leche</option>
					<option value="Carne">Carne</option>
			</select>

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