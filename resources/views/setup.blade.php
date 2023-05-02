@extends('layouts.sidebar')
@section('content')

<div id="panel">
    <div class="panel-header">
	<h1 class="text-3xl text-right pt.24 font-bold" style="position: absolute; top: 25px; left: 400px;">Administración de usurios</h1>
    </div>
    <div class="panel-content">
        <br>
        <a href="{{ route('descargar-tabla-pdf') }}" class="btn btn-primary">Descargar Informe PDF</a>
        <div class="container">
        <br>
            <h1 class="text-3xl text-center pt.24">ADMINISTRADOR</h1>
            <div class="botones-vertical d-flex flex-column">
                <h2 class="text-3xl text-center pt.24">Lista de usuarios registrados</h2>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>    
                            <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary my-1">Borrar</button>
        </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
                
            </div>
        </div>

                
            </div>
        </div>


@endsection