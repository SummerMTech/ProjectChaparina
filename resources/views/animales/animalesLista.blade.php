<table class="table table-striped" id = "mi-tabla">
        <thead>
            <tr>
                <th>*</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Sexo</th>
                <th>Raza</th>
                <th>Proposito</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animales as $animal)
                <tr>
                    <td>
                    <a href="{{ route('animales.edit', ['id' => $animal->id]) }}">
                    <i class="fas fa-pencil-alt"></i>
                    </a>
                    </td>
                    <td>{{$animal->nombre}}</td>
                    <td>{{$animal->codigo}}</td>
                    <td>{{$animal->sexo}}</td>
                    <td>{{$animal->raza}}</td>
                    <td>{{$animal->Proposito}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>