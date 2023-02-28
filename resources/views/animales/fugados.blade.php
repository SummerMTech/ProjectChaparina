
<table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Fecha</th>
               
            </tr>
        </thead>
        <tbody>
		@foreach($fugados as $fugas)
		<tr>
                    <td>{{$fugas->nombre}}</td>
                    <td>{{$fugas->codigo}}</td>
                    <td>{{$fugas->fechaFuga}}</td>       
        </tr>
		@endforeach
        </tbody>
    </table>
