@extends('layouts.sidebar')
@section('content')

<div id="panel">
    <div class="panel-header">
        <h1 class="text-3xl text-right pt.24 font-bold" style="position: absolute; top: 25px; left: 400px;">Total de animales registrados</h1>
    </div>
    <div class="panel-content">
        <br>
        <a href="{{ route('descargar-tabla-pdf') }}" class="btn btn-primary">Descargar Informe PDF</a>  
        <a href="{{ route('registroAnimales.index') }}" class="btn btn-primary my-1">Agregar ganado</a>    
        @include('animales/animalesLista')
    </div>
</div>

@endsection