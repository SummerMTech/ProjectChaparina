
<!DOCTYPE html>
<html>
<head>    
    <meta charset="utf-8">
    <title>Informe</title>
    <style>
      /* Estilos para la tabla */
      table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
      }
      
      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
      }
      
      th {
        background-color: lightgrey;
      }
      
      /* Estilos para la firma */
      .firma {
        margin-top: 50px;
        text-align: center;
      }
    </style>


</head>
<body>
    <p class="text-xl">Usuario Responsable: <b>{{ auth()->user()->name }}</b></p>
    <p>Fecha: 13 de marzo de 2023</p>
    <h1>Informe de fugados</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Fecha</th>
                <th>Avatar</th>
 
            </tr>
        </thead>
        <tbody>
            @foreach($datosTabla as $fugado)
            <tr>
                    <td>{{$fugado->nombre}}</td>
                    <td>{{$fugado->codigo}}</td>
                    <td>{{$fugado->fechaFuga}}</td>
                    <td><img src="{{'../storage/app/'.$fugado->avatarVaca }}" alt="Avatar" width="50" height="50"></td> 

            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="firma">
      <p>_______________________________</p>
      <p>Responsable</p>
    </div>
</body>
</html>