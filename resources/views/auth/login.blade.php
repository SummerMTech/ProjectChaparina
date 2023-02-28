@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg" >
	
	<br>
	<h1 class="text-5xl text-center pt.24">Login</h1>
	<form class="mt-4" method="POST" action="">
		@csrf
		<input type="usuario" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="usuario" id="usuario" name="usuario">
		<input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">
		@error('message')
			<p class="border border-red-500 roujnded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message}}</p>
		@enderror
		<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2  my-3 hover:bg-indigo-600">Ingresar</button>   
	</fom>
</div>
@endsection