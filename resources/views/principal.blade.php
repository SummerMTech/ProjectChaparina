<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  </head>
  <body>
	@extends('layouts.app2')
	@section('title','Principal')
	@section('content')
		
		<div class="card">
			<div class="card-body">
				<br>
					<h1 class="text-3xl text-center pt.24">Ganado que salio del corral</h1>
					<div class = "table table-responsive">
						<table class="table table-sm table-bordered">
							<thead>
								<td>Nombre</td>
								<td>Código</td>
								<td>Fecha</td>	
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				<br>
			</div>
		</div>
		
		<div class="card">
			<div class="card-body">
				<br>
					<h1 class="text-3xl text-center pt.24">Ganado registrado</h1>
					<div class = "table table-responsive">
						<table class="table table-sm table-bordered">
							<thead>
								<td>Id</td>
								<td>Nombre</td>
								<td>Código</td>
								<td>Sexo</td>
								<td>Peso</td>
								<td>Edad</td>
								<td>Raza</td>
								
								<td></td>	
							</thead>
							<tbody>
								
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									
								</tr>
							</tbody>
						</table>
					</div>
				<br>
			</div>
		</div>
		
		<div class="card bg-light mb-3" style="max-width: 18rem;">
	

	@endsection		
  </body>
</html>