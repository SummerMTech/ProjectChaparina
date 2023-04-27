
<table class="table table-striped" id = "mi-tabla">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Fecha</th>
                <th>Avatar</th>
            </tr>
        </thead>
        <tbody>
		@foreach($fugados as $fugas)
		<tr>
                    <td>{{$fugas->nombre}}</td>
                    <td>{{$fugas->codigo}}</td>
                    <td>{{$fugas->fechaFuga}}</td>
                    <td><img src="{{'../storage/app/'.$fugas->avatarVaca }}" alt="Avatar" width="50" height="50"></td>    
        </tr>
		@endforeach
        </tbody>
    </table>
