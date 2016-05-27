<?php

	require('config.php');

	 $usuario = $_POST['username'];
	 $contrasena = $_POST['password'];



	echo $queryComprobrar = "SELECT * FROM admin WHERE usuario = '$usuario' and contrasena = '$contrasena'";
	$comprobar = $mysqli->query($queryComprobrar);
	$rowTotal = $comprobar->fetch_assoc();
   			
	if ($comprobar->num_rows == 1) {

		session_start();
		echo $_SESSION['k_username'] = $rowTotal["usuario"];
		echo "Se encontró el resultado";

		
		header('location: ../paginas/registro/datosper.php');
			
	} else {
			echo '<script language="javascript">alert("Usuario y Contraseña Incorrectos");</script>'; 

		//echo "No se encontro el resultado";
            header('location: ../error.html');

	}
?>