<?php
/*
-- =============================================
-- Author:		Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Clase Loguin
-- Parametros: $usuario, $contrasena, $conecta, $validatos, $consulta, $resultado, $fila, $_SESSION, $valido 
-- =============================================
*/

include_once('conexion_database.php');

class Validacion{
	public $usuario;
	public $contrasena;

public function __construct($usuario, $contrasena)
    {
         $this->user = $usuario;
         $this->contra = $contrasena;
    }
// clase para validar la sesion
 public function valida(){

 $conecta = new Conexion();
 $validatos = $conecta->conexion();
 
$consulta = "SELECT * FROM usuario where usuario='$this->user' and contrasena='$this->contra'";
$resultado = $validatos->query($consulta);
$fila = $resultado->fetch_row();
//$n = $resultado->num_rows();
//condicion que si se cumple el usuario y contraseña correcta, direccione a admin.php
if ($fila[2]){
	$valido=1;
	session_start();
	$_SESSION["k_username"]=$fila[4];
	header("Location: ../admin.php");
}
	else{
$valido=0;
header("Location: ../index.php");
}
  }
}


?>







<?php //require("includes/session.php"); ?>
 <?php //require_once("existesession.php"); ?>
<?php
		/*
		include('includes/conexion_database.php')
		

	class login()
	{
		public $usuario_id;
		//private $logueado = false;

		
		public function loguearse($usuario, $contrasena)
		{
			if ($usuario) {
				$this->usuario_id = $_SESSION['k_username'] = $usuario->id;
				//$this->logueado = true;
				header('location: includes/valida.php');

			}
		}

		/*public function desbloguearse()   $_SESSION['k_username'] = $rowTotal["usuario"];
		{
			unset($this->usuario_id);
			unset($_POST["usuario_id"]);
			//$this->logueado = false;
		}
		
		private function verificar_logueo()
		{
			if (isset($_POST["usuario_id"])) {
			  $this->usuario_id = $_SESSION["usuario"];
			  //$this->logueado = true;
			}
			else
			{
				unset($this->usuario_id);
				//$this->logueado = false;
			}
		}
	}

	$entrar = new login();
*/


/**
 * 
 * @ Por Nahum Ramirez Medina
 * @version 1.0
 */


?>