 <?php 
/*
-- =============================================
-- Author:		Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Clase principal del Empleados
-- Parametros: Formulario Raiz
-- =============================================
*/

 require("includes/session.php"); ?>
 <?php include("includes/header.php"); ?>
 <?php //include("otros/temples/side.php"); ?>
		<table id="estructura">
			<tr>
			  <td id="menu">&nbsp;</td>
			  <td id="pagina"><h2>Administración</h2>
				  <p>Bienvenido al Módulo de Administración</p>
				  <ul>
				  	<li><a href="content.php">Administrar Empleados</a></li>
				  	<li><a href="nuevoemp.php?id_per=1">Agregar Empleado</a></li>
				  	<li><a href="includes/cerrarsesion.php">Salir</a></li>
				  </ul>
			  </td>
			</tr>
		</table>
	</div>
	<?php include("includes/footer.php"); 

/**
 * @ Por Nahum Ramirez Medina
 * @version 1.0
 */


	?>