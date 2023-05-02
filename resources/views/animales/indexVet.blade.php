@extends('layouts.sidebar')
@section('content')

<div id="panel">
    <div class="panel-header">
	<h1 class="text-3xl text-right pt.24 font-bold" style="position: absolute; top: 25px; left: 400px;">Datos Veterinarios</h1>
    </div>
    <div class="panel-content">
        <br>
        <a href="{{ route('descargar-tabla-pdf') }}" class="btn btn-primary">Descargar Informe PDF</a>
        <form action="{{ route('animalesLista.indexVet') }}" method="GET">
            <br>
            <div class="form-group">
                <label for="nombre">Buscar por nombre:</label>
                <br>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese un nombre">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>        
        </form>
        @if ($registros !== null && count($registros) > 0)
            <table class="table table-striped" id = "mi-tabla">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Sexo</th>
                    <th>Peso</th>
                    <th>Edad</th>
                    <th>Raza</th>
                    <th># de Vacunas</th>
                    <th># de Crias</th>
                    <th>Sexo crias</th>
                    <th>Proposito</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                    <tr>
                        <td>{{$registro->nombre}}</td>
                        <td>{{$registro->codigo}}</td>
                        <td>{{$registro->sexo}}</td>
                        <td>{{$registro->peso}}</td>
                        <td>{{$registro->edad}}</td>
                        <td>{{$registro->raza}}</td>
                        <td>{{$registro->numeroVacunas}}</td>
                        <td>{{$registro->numeroCrias}}</td>
                        <td>{{$registro->generoCrias}}</td>
                        <td>{{$registro->Proposito}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p>No se han encontrado animales.</p>
            @endif
        <br>
        <h1 class="text-3xl text-right pt.24 font-bold" style="position: absolute; left: 500px;">Lista Completa</h1><br><br>
        @include('animales/veterinario')
        
    </div>
</div>

@endsection