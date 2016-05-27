<?php 


$bajar=$_REQUEST['txtBajar'];

// insert de  los indices
$conexion = require('../../conf/config.php');
           $macro= "INSERT INTO diagnostico (macro)  
VALUES ('$bajar')";
           $resultado = $mysqli->query($macro);

// direcionas 

/*
	
if ($resultado =! 0  ){
	if($resultado1 =! 0){
		if($resultado2 =! 0){
              header("location: ../registro/fichacom.php");
			        }
			     }
			  }
         else{
               echo mysql_error();
              }
*/


?>
