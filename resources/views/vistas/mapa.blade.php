@extends('layouts.sidebar')
@section('content')

<div id="panel">
    <div class="panel-header">
	<h1 class="text-3xl text-right pt.24 font-bold" style="position: absolute; top: 25px; left: 500px;">Ubicación</h1>
    </div>
    <div class="panel-content">
        <br>
		<a href="https://goo.gl/maps/x4fHUzCEdNT1hoUA9" class="text-2xl text-right pt.12 font-bold" style="position: absolute; top: 75px; left: 50px;" target="_blank">Abrir Ubicación</a>
        <img src="{{URL::asset('/images/mapa.png')}}" class="rounded mx-auto d-block"  height="600" width="800" >
    </div>
</div>

@endsection