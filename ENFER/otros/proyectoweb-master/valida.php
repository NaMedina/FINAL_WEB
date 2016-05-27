<?php
// CREANDO MI CONEXION
include('config.php');


$nombre=$_POST["nombre"];
$contra=$_POST["contrasena"];

$consulta = "SELECT * FROM nombre where nombre='$nombre' and contrasena='$contra'";
$resultado = $mysqli->query($consulta);
$fila = $resultado->fetch_row();
//$n = $resultado->num_rows();

if ($fila[2]){
	$valido=1;
	$tipo=$fila[4];
	session_start();
	$_SESSION["tipo"]=$tipo;
	header("Location: ejemplo2.php?valido=$valido");
}
	else{
$valido=0;
header("Location: login.php?valido=$valido");
}





?>