@extends('layouts.app2')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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


        <h2 class="text-3xl text-center pt.24">Lista del total de animales</h2>

        <a href="{{ route('registroAnimales.index') }}" class="btn btn-primary my-1">Agregar ganado</a>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Sexo</th>
                <th>Peso</th>
                <th>Edad</th>
                <th>Raza</th>
                <th>Numero de Vacunas</th>
                <th>Numero de Crias</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animales as $animal)
                <tr>
                    <td>{{$animal->nombre}}</td>
                    <td>{{$animal->codigo}}</td>
                    <td>{{$animal->sexo}}</td>
                    <td>{{$animal->peso}}</td>
                    <td>{{$animal->edad}}</td>
                    <td>{{$animal->raza}}</td>
                    <td>{{$animal->numeroVacunas}}</td>
                    <td>{{$animal->numeroCrias}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
    </div>
</div>

@endsection