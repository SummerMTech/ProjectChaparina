@extends('layouts.sidebar')
@section('content')

<div id="panel">
    <div class="panel-header">
	<h1 class="text-3xl text-right pt.24 font-bold" style="position: absolute; top: 25px; left: 400px;">Animales para Venta</h1>
    </div>
    <div class="panel-content">
        <br>
        <a href="{{ route('descargar-tabla-pdf') }}" class="btn btn-primary">Descargar Informe PDF</a>
        
        @include('animales/ventas')
        
    </div>
</div>

@endsection