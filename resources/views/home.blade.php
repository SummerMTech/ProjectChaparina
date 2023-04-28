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

    <title>Chaparina!</title>
  </head>
  <body>
		@extends('layouts.app')
		@section('title','Home')
		@section('content')
			<br>
			<h1 class="text-5xl text-center pt.24">BIENVENIDO</h1>
      <br>
      <img src="{{URL::asset('/images/logo.png')}}" class="rounded mx-auto d-block"  height="400" width="400" >
      <br>
			<h1 class="text-5xl text-center pt.24">Proyecto de Final de Carrera</h1>
		@endsection
  </body>
</html>
