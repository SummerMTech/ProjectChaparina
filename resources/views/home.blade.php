<!doctype html>
<html lang="en">
  <head>
    <style>
      .hero h1 {
        color: #fff;
      }
    </style>  
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
	    <img src="{{URL::asset('/images/fondo.png')}}" class="rounded mx-auto d-block"  height="500" width="1700" >
      <div class="w-1/7 px-12 mr-auto" style="position: absolute; top: 250px; left: 300px;">
        <p class="text-8xl font-bold" style="text-shadow: 0px 0px 10px rgba(255, 255, 255, 1);"> CONTROL GANADERO</p>
        <p class="text-8xl font-bold" style="text-shadow: 0px 0px 10px rgba(255, 255, 255, 1);" > ESTANCIA CHAPARINA </p>
        <p class="text-8xl font-bold" style="text-shadow: 0px 0px 10px rgba(255, 255, 255, 1);"> BENI </p>
      </div>
    @endsection
  </body>
</html>
