<?php
$c = $_GET['cod'];

print_r($c);

$usuario = "root";
$password = "";
$servidor = "localhost";
$database = "login";

$conexion = mysqli_connect($servidor, $usuario,"") or die ("No se ha podido conectar al servidor");
$db = mysqli_select_db($conexion, $database)or die("no se ha podido seleccinar db");
$consulta = "INSERT INTO fugados(codigo) VALUES ('$c')";
$resultado = mysqli_query($conexion,$consulta);
?>