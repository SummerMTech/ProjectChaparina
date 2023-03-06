@extends('layouts.app2')
@section('content')
<div class="container">
<br>
    <a href="{{ route('descargar-tabla-pdf') }}" class="btn btn-primary">Descargar Informe PDF</a>
    <h1 class="text-3xl text-center pt.24">Lista de animales fuera del corral</h1>
    @include('animales/fugados')
    <h1 class="text-3xl text-center pt.24">Total de animales registrados</h1>
    @include('animales/animalesLista')
</div>

@endsection