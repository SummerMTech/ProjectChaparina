@extends('layouts.sidebar')
@section('content')

	<div id="panel">
		<div class="panel-header">
			<h1 class="text-3xl text-right pt.24 font-bold" style="position: absolute; top: 25px; left: 400px;">Actualizar Animales</h1>
			</div>
			<div class="panel-content">
			<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">Editar animal</div>
						<div class="card-body">
							<form method="POST" action="{{ route('animales.update', ['id' => $animal->id]) }}">
								@csrf
								@method('PUT')
								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input type="text" class="form-control" id="nombre" name="nombre" value="{{ $animal->nombre }}">
								</div>

								<div class="form-group">
									<label for="codigo">Codigo</label>
									<input type="text" class="form-control" id="codigo" name="codigo" value="{{ $animal->codigo }}">
								</div>
<!--
								<div class="form-group">
									<label for="sexo">Sexo</label>
									<input type="text" class="form-control" id="sexo" name="sexo" value="{{ $animal->sexo }}">
								</div>
-->
								<div class="form-group">
									<label for="sexo">Sexo</label>
									<select class="form-control" id="sexo" name="sexo">
										<option value="macho" {{ $animal->sexo == 'macho' ? 'selected' : '' }}>Macho</option>
										<option value="hembra" {{ $animal->sexo == 'hembra' ? 'selected' : '' }}>Hembra</option>
									</select>
								</div>

								<div class="form-group">
									<label for="peso">Peso</label>
									<input type="text" class="form-control" id="peso" name="peso" value="{{ $animal->peso }}">
								</div>

								<div class="form-group">
									<label for="edad">Edad</label>
									<input type="text" class="form-control" id="edad" name="edad" value="{{ $animal->edad }}">
								</div>

								<div class="form-group">
									<label for="raza">Raza</label>
									<!--<input type="text" class="form-control" id="raza" name="raza" value="{{ $animal->raza }}"> -->
									<select class="form-control" id="raza" name="raza">
										<option value="Criollo" {{ $animal->raza == 'Criollo' ? 'selected' : '' }}>Criollo</option>
										<option value="Nelore" {{ $animal->raza == 'Nelore' ? 'selected' : '' }}>Nelore</option>
										<option value="Mestizo" {{ $animal->raza == 'Mestizo' ? 'selected' : '' }}>Mestizo</option>
										<option value="Holstein" {{ $animal->raza == 'Holstein' ? 'selected' : '' }}>Holstein</option>
									</select>
								</div>

								<div class="form-group">
									<label for="numeroVacunas"># Vacunas</label>
									<select class="form-control" id="numeroVacunas" name="numeroVacunas">
										<option value="1 (Synd Ade)" {{ $animal->numeroVacunas == '1 (Synd Ade)' ? 'selected' : '' }}>1 (Synd Ade)</option>
										<option value="2 (Synd Ade, Derrisan Cepaera)" {{ $animal->numeroVacunas == '2 (Synd Ade, Derrisan Cepaera)' ? 'selected' : '' }}>2 (Synd Ade, Derrisan Cepaera)</option>
										<option value="3 (Rabat Vac, Synd Ade, Derrisan Cepaera)" {{ $animal->numeroVacunas == '3 (Rabat Vac, Synd Ade, Derrisan Cepaera)' ? 'selected' : '' }}>3 (Rabat Vac, Synd Ade, Derrisan Cepaera)</option>
										<option value="4 (Covenix 10, Rabat Vac, Synd Ade, Derrisan Cepaera)" {{ $animal->numeroVacunas == '4 (Covenix 10, Rabat Vac, Synd Ade, Derrisan Cepaera)' ? 'selected' : '' }}>4 (Covenix 10, Rabat Vac, Synd Ade, Derrisan Cepaera)</option>
									</select>
								</div>

								<div class="form-group">
									<label for="numeroCrias"># Crias</label>
									<select class="form-control" id="numeroCrias" name="numeroCrias">
										<option value="Ninguno" {{ $animal->numeroCrias == 'Ninguno' ? 'selected' : ''}}>Ninguno</option>
										<option value="1 cria" {{ $animal->numeroCrias == '1 cria' ? 'selected' : ''}}>1 cria</option>
										<option value="2 crias" {{ $animal->numeroCrias == '2 crias' ? 'selected' : ''}}>2 crias</option>
									</select>
								</div>

								<div class="form-group">
									<label for="generoCrias">Genero Crias</label>
									<select class="form-control" id="generoCrias" name="generoCrias">
										<option value="Ninguno" {{ $animal->generoCrias == 'Ninguno' ? 'selected' : ''}}>Ninguno</option>
										<option value="macho(s)" {{ $animal->generoCrias == 'macho(s)' ? 'selected' : ''}}>macho(s)</option>
										<option value="hembra(s)" {{ $animal->generoCrias == 'hembra(s)' ? 'selected' : ''}}>hembra(s)</option>
										<option value="macho y hembra" {{ $animal->generoCrias == 'macho y hembra' ? 'selected' : ''}}>macho y hembra</option>
									</select>
								</div>
								<div class="form-group">
									<label for="Proposito"># Proposito</label>
									<select class="form-control" id="Proposito" name="Proposito">
										<option value="Leche" {{ $animal->Proposito == 'Leche' ? 'selected' : ''}}>Leche</option>
										<option value="Carne" {{ $animal->Proposito == 'Carne' ? 'selected' : ''}}>Carne</option>
									</select>
								</div>

								<div class="form-group">
									<label for="avatarAnimales">Avatar</label>
									<input type="file" name="avatarAnimales" id="avatarAnimales" class="form-control-file" value="{{ $animal->avatarVaca}}">
								</div>
								
								<button type="submit" class="btn btn-primary">Guardar cambios</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		</div>
	</div>

   @endsection
