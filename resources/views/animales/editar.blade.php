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

								<div class="form-group">
									<label for="sexo">Sexo</label>
									<input type="text" class="form-control" id="sexo" name="sexo" value="{{ $animal->sexo }}">
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
									<input type="text" class="form-control" id="raza" name="raza" value="{{ $animal->raza }}">
								</div>

								<div class="form-group">
									<label for="numeroVacunas"># Vacunas</label>
									<input type="text" class="form-control" id="numeroVacunas" name="numeroVacunas" value="{{ $animal->numeroVacunas }}">
								</div>

								<div class="form-group">
									<label for="numeroCrias"># Crias</label>
									<input type="text" class="form-control" id="numeroCrias" name="numeroCrias" value="{{ $animal->numeroCrias }}">
								</div>

								<div class="form-group">
									<label for="generoCrias">Genero Crias</label>
									<input type="text" class="form-control" id="generoCrias" name="generoCrias" value="{{ $animal->generoCrias }}">
								</div>
								<div class="form-group">
									<label for="Proposito"># Proposito</label>
									<input type="text" class="form-control" id="Proposito" name="Proposito" value="{{ $animal->Proposito }}">
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
