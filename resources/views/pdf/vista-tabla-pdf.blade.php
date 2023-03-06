
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Fugados</title> 
    <p class="text-xl">Usuario Responsable: <b>{{ auth()->user()->name }}</b></p>
</head>
<body>
    <h1>Listado de fugados</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>fecha</th>
 
            </tr>
        </thead>
        <tbody>
            @foreach($datosTabla as $fugado)
            <tr>
                <td>{{ $fugado->codigo }}</td>
                <td>{{ $fugado->fechaFuga }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>