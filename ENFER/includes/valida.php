<?php
// CREANDO MI CONEXION
/*include('conexion_database.php');
$usuario = mysql_real_escape_string($_POST['username']);
$contrasena = mysql_real_escape_string($_POST['password']);
include('../login.php');

$conexion=new Validacion($usuario,$contrasena);
$conexion->valida(); 
*/
?>

<?php
	
	require('conexion_database.php');

	 $usuario = $_POST['username'];
	 $contrasena = $_POST['password'];



	echo $consulta = "SELECT * FROM usuario WHERE usuario = '$usuario' and contrasena = '$contrasena'";
	$comprobar = $mysqli->query($consulta);
	$rowTotal = $comprobar->fetch_assoc();
	
   			
	if ($comprobar->num_rows == 1) {
		echo '<script language="javascript">alert("Bienvenido al sistema IMC UNAV");</script>';
		session_start();

		echo $_SESSION['k_username'] = $rowTotal["usuario"];
		//echo "Se encontró el resultado";
		header('location: ../content.php');
			
	} else {
		
			echo '<script language="javascript">alert("Usuario y Contraseña Incorrectos");</script>'; 
			header('location: ../error.html');
		//echo "No se encontro el resultado";
           //header('location: ../error.html');
}

?>


