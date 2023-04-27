<table class="table table-striped" id = "mi-tabla">
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