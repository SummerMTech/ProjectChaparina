@extends('layouts.sidebar')
@section('content')

<div class="container">
<br>
    <a href="{{ route('descargar-tabla-pdf') }}" class="btn btn-primary">Descargar Informe PDF</a>
    <h1 class="text-3xl text-right pt.24">Lista de animales fuera del corral</h1>
    @include('animales/fugados')
    <h1 class="text-3xl text-right pt.24">Total de animales registrados</h1>
    @include('animales/animalesLista')
</div>

@endsection