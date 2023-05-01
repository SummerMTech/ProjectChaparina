<table class="table table-striped" id = "mi-tabla">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Sexo</th>
                <th>Peso</th>
                <th>Edad</th>
                <th>Raza</th>
                <th># de Vacunas</th>
                <th># de Crias</th>
				<th>Sexo crias</th>
				<th>Proposito</th>
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
					<td>{{$animal->generoCrias}}</td>
					<td>{{$animal->Proposito}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>