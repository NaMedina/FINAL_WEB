


<?php 
/*
-- =============================================
-- Author:    Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Clase para Crear Empleados
-- Parametros: $nombre, $apellido, $email, $edad, $matricula, $talla, $peso, $cintura, $sexo
-- =============================================
*/

$nombre=$_REQUEST['Nombre'];
$apellido=$_REQUEST['Apellido'];
$email=$_REQUEST['email'];
$edad=$_REQUEST['edad'];
$matricula=$_REQUEST['matricula'];
$talla=$_REQUEST['talla'];
$peso=$_REQUEST['peso'];
$cintura=$_REQUEST['circ_cintura'];
$sexo=$_REQUEST['Sexo'];


// calculo de indices
$imc= $peso / $talla * $talla;
if($imc<=17){$r_imc="DESNUTRICIÓN";}
elseif($imc>18 && $imc<24 ){$r_imc="NORMAL";}
elseif($imc>25 && $imc<62 ){$r_imc="SOBREPESO";}
elseif($imc>27 && $imc<29 ){$r_imc="OBESIDAD I";}
elseif($imc>29 && $imc<30 ){$r_imc="OBESIDAD II";}
elseif($imc>39 && $imc>40){$r_imc="OBESIDAD III";}


 //inserto los indices
 	include('includes/conexion_database.php');
 	// Inserta la persona
            $persona= "INSERT INTO persona (Nombre, Apellido, Sexo, matricula, email) 
VALUES ('$nombre', '$apellido','$sexo',$matricula, '$email')";
			$resultado = $mysqli->query($persona);
				//echo $persona;
            
		   
			$query1 = " SELECT id_persona FROM persona WHERE Nombre='$nombre' and Apellido='$apellido' and Sexo='$sexo' and matricula='$matricula' and email='$email'";
			//$resultados = mysql_query ($query);
			//echo $query1;
      $resultados = $mysqli->query($query1);
      $rowTotal = $resultados->fetch_assoc();
	  $id_persona= $rowTotal["id_persona"];
			//echo  $id_persona;
		   
		   // Inserta datos en tabla datos
		   $datos= "INSERT INTO datos (peso_actual, talla, edad, circ_cintura, id_persona) 
VALUES ($peso, $talla, $edad, $cintura, $id_persona)";

           $resultado1 = $mysqli->query($datos);
           //echo $datos;
		   
$sql= "INSERT INTO diagnostico (imc, ind_cintura, Fecha, id_persona) 
VALUES ($imc, $cintura, NOW(), $id_persona)";
          //$resultado2 = $mysqli->query($sql);

// direcionas 


	if ($mysqli->query($sql)){
            header ("Location: content.php");
        } else{
            echo mysql_error();
         }

?>

