<?php

	function verificar_consultas($consulta){
		if (!$consulta) {
	  				die("No se ha podido realizar la consulta: " . mysql_error());
	}
 }

 function obtener_cur(){
 			global $conexion
	  		$resultado = mysql_query("SELECT * FROM persona",$conexion);
	  		verificar_consulta($consulta);
	  			return $resultado;
 }
?> 			