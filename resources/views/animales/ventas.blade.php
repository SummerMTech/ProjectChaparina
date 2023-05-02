<table class="table table-striped" id = "mi-tabla">
        <thead>
            <tr>
				<th>Avatar</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Sexo</th>
                <th>Peso</th>
                <th>Edad</th>
                <th>Raza</th>
                <th>Proposito</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
					<td><img src="{{'../storage/app/'.$venta->avatarVaca }}" alt="Avatar" width="50" height="50"></td>
                    <td>{{$venta->nombre}}</td>
                    <td>{{$venta->codigo}}</td>
                    <td>{{$venta->sexo}}</td>
                    <td>{{$venta->peso}}</td>
                    <td>{{$venta->edad}}</td>
                    <td>{{$venta->raza}}</td>
                   	<td>{{$venta->Proposito}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>