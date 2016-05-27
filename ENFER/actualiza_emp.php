<?php

/*
-- =============================================
-- Author:		Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Clase para Actualizar empleado
-- Variables Clave: $id_persona, $nombre, $apellido, $email, $edad, $matricula, $talla, $peso, $cintura, $sexo = Variables de datos a actualizar
-- =============================================
*/
class actualizar 
{ 

	public $id_persona;
	public $nombre;
	public $apellido;
	public $email;
	public $edad;
	public $matricula;
	public $talla;
	public $peso;
	public $cintura;
	public $sexo;
	
	function __construct($id_persona, $nombre, $apellido, $email, $edad, $matricula, $talla, $peso, $cintura, $sexo)
	{
	$this->id_persona=$id_persona;
	$this->nombre=$nombre;
	$this->apellido=$apellido;
	$this->email=$email;
	$this->edad=$edad;
	$this->matricula=$matricula;
	$this->talla=$talla;
	$this->peso=$peso;
	$this->cintura=$cintura;
	$this->sexo=$sexo;
	}

	public function actualiza()
	{
		include('includes/conexion_database.php');
		$persona= "UPDATE enfermeria.persona, enfermeria.datos SET Nombre = '$this->nombre', Apellido = '$this->apellido', email = '$this->email', edad = '$this->edad', matricula = '$this->matricula', talla = '$this->talla', peso = '$this->peso', cintura = '$this->cintura', Sexo = '$this->sexo' WHERE persona.id_persona = $this->id_persona";
		//echo $persona;
        if ($mysqli->query($persona)){
             header("Location: content.php");
        } else{
              echo mysql_error();
         }
		   
	}

/*
class insertar
{ 

	public $id_persona;
	public $nombre;
	public $apellido;
	public $email;
	public $edad;
	public $matricula;
	public $talla;
	public $peso;
	public $cintura;
	public $sexo;
	
	function __construct($id_persona, $nombre, $apellido, $email, $edad, $matricula, $talla, $peso, $cintura, $sexo)
	{
	$this->id_persona=$id_persona;
	$this->nombre=$nombre;
	$this->apellido=$apellido;
	$this->email=$email;
	$this->edad=$edad;
	$this->matricula=$matricula;
	$this->talla=$talla;
	$this->peso=$peso;
	$this->cintura=$cintura;
	$this->sexo=$sexo;
	}

	public function insertar()
	{

		include('includes/conexion_database.php');
			$persona= "INSERT INTO persona (Nombre, Apellido, Sexo, matricula, email) 
VALUES ('$nombre', '$apellido','$sexo',$matricula, '$email')";

$query1 = " SELECT id_persona FROM persona WHERE Nombre='$nombre' and Apellido='$apellido' and Sexo='$sexo' and matricula='$matricula'";
			$resultados = mysql_query ($query);
			echo $query1;

			$datos= "INSERT INTO datos (peso_actual, talla, edad, circ_cadera, id_persona) 
VALUES ($peso, $talla, $edad, $cintura, $id_persona)";
			
			$datos= "UPDATE enfermeria.datos SET peso_actual = '$peso', talla = '$talla', edad = '$edad', circ_cintura = '$cintura' WHERE datos.id_persona = $id_persona";
		   
				$sql= "INSERT INTO diagnostico (imc, ind_cintura, Fecha, id_persona) 
				VALUES ($imc, $cintura, NOW(),$id_persona)";

          // $resultado2 = $mysqli->query($sql);

			if ($mysqli->query($sql)){
				header("Location: content.php");
											}
			else{
				header("Location: index.php");
				}

	}



*/
	public function borra()
	{
		include('includes/conexion_database.php');
			$consulta = "DELETE FROM nombre WHERE id=$this->id";
			if ($mysqli->query($consulta)){
				header("Location: content.php");
											}
			else{
				header("Location: index.php");
				}

	}
}


// inserto los indices
 //include('includes/conexion_database.php');
            /*$persona= "INSERT INTO persona (Nombre, Apellido, Sexo, matricula, email) 
VALUES ('$nombre', '$apellido','$sexo',$matricula, '$email')";*/


		   
		   //require ("../../conf/config.php");
			//$query1 = " SELECT id_persona FROM persona WHERE Nombre='$nombre' and Apellido='$apellido' and Sexo='$sexo' and matricula='$matricula'";
			//$resultados = mysql_query ($query);
			//echo $query1;
      
//	echo  $id_persona;
		   
		   /*$datos= "INSERT INTO datos (peso_actual, talla, edad, circ_cadera, id_persona) 
VALUES ($peso, $talla, $edad, $cintura, $id_persona)";*/
			//$datos= "UPDATE enfermeria.datos SET peso_actual = '$peso', talla = '$talla', edad = '$edad', circ_cintura = '$cintura' WHERE datos.id_persona = $id_persona";
         // echo $datos;
		   
				/*$sql= "INSERT INTO diagnostico (imc, ind_cintura, Fecha, id_persona) 
				VALUES ($imc, $cintura, NOW(),$id_persona)";*/

          // $resultado2 = $mysqli->query($sql);

			

// direcionas 


?>
