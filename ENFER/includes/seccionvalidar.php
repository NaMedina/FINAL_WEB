<?php
// CREANDO MI CONEXION
include('conexion_database.php');
$usuario = mysql_real_escape_string($_POST['nombre']);
$contrasena = mysql_real_escape_string($_POST['contrasena']);
include('valida.php');

$conexion=new Validacion($usuario,$contrasena);
$conexion->valida(); 

?>