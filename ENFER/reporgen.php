<?php

include_once('includes/conexion_database.php');


class  Tablas{

function __construct($Nombre, $Apellido)
	{
	$this->Nombre=$Nombre;
	$this->Apellido=$Apellido;
	}


public function usuarios(){

$mysqli = new mysqli();

if ($this->Nombre!=="" || $this->Apellido!==""){
 $consulta = "SELECT * FROM persona where Nombre='$this->Nombre' and Apellido='$this->Apellido'";
}else{
 $consulta = "SELECT * FROM persona ";
}

//$resultado = $mysqli->query($consulta);


}


}

?>