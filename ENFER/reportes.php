<?php
/*
-- =============================================
-- Author:		Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Clase Reportes
-- Parametros: $Nombre, $Apellido, $tablas, $tabla 
-- =============================================
*/


		require("includes/conexion_database.php");
?>

<?php
if (isset($_GET['id_per'])){
$Nombre=$_GET["Nombre"];
$Apellido=$_GET["Apellido"];

}else{
$Nombre="";
$Apellido="";

}
?>
 <?php
 	//require_once ("includes/functions.php");

 	?>
 <?php include("includes/header.php"); ?>
 <div id="cuerpo" style="height: 810px">
	<table id="estructura">
		<tr>
			<td id="menu" style="height: 750px">
			  <ul>
			  	<a href="diabetes.php" style="color: white">Diabetes</a><br><br>
			  	<!--<a href="glucosa.php" style="color: white">Glucosa</a><br><br>-->
			  	<a href="peso.php" style="color: white">Peso</a></li><br><br>
			  	<!--<a href="presion.php" style="color: white">Presión</a><br><br>-->
			  	<a href="content.php" style="color: white">← Volver</a><br><br>
			  </ul>
			</td>
			  	<td id="pagina">
			  		<div><h2 style="text-align: center;">Reportes de Graficas de Empleados</h2></div>&nbsp;&nbsp;
			  		<h4 style="padding-left: 480px">Graficas Generales</h4>
			  		
			  		<form action="reporgen.php" method="POST" >
			  		<div class="control-group">
			  		
					</div>
			  		<br>
			  		<br>
			  		
	                <?php
						include_once('reporgen.php');
						$tablas = new Tablas($Nombre,$Apellido);
						$tabla = $tablas->usuarios();

						?>
	                </form>
			  		<?php include("graficas/imc.php"); ?>
			  		<?php //include("graficas/pieSimple2.php.html"); ?>
			  		</div>
			  	
    
</div>	</td>
		</tr></table>


<?php require_once("includes/footer.php"); ?>