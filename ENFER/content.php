
<?php
/*
-- =============================================
-- Author:		Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Clase principal del Empleados
-- Parametros: Muestra consulta de Empleados
-- =============================================
*/
		require_once("includes/conexion_database.php");
		$query0 = "SELECT * FROM datos, persona WHERE datos.id_persona=persona.id_persona";
					//$resultados = mysql_query ($query);
				      $resultados0 = $mysqli->query($query0);
					  $rowTotal0 = $resultados0->fetch_assoc()
?>
 <?php //require_once ("includes/functions.php");?>

 <?php 
 if (isset($_GET["id_persona"])) {
 	$persona_selec = $_GET["id_persona"];
 }
  	
 ?>
 <?php include("includes/header.php"); ?>

<div id="cuerpo">
<table id="estructura">
	<tr>
		<td id="menu" style="height: 750px">&nbsp;
			<ul>
			  	<li><a href="admin.php?empleado=" style="color: white">Principal</a></li><br>
			  	<li><a href="encuesta.php?encues=" style="color: white">Encuesta</a></li><br>
			  	<li><a href="cuestion.php?cuestion=" style="color: white">Cuestionario</a></li><br>
			  	<li><a href="reportes.php?reporte=" style="color: white">Reportes</a></li><br>
			</ul>
		</td>
	
					  
		<td id="pagina" style="text-align: center;">&nbsp;
			 <h2>Acerca del Proyecto IMC UNAV</h2>

			<div class="main-inner">
			   <div class="container">
			     <div class="row">
			               <!-- /span6 -->
			       <div class="span6">
			         <div class="widget widget-table action-table" style="width:100%">
			          <div class="widget-header">
			            <h3 style="text-align: center;">Lista de Empleados</h3>   
			              <a href="nuevoemp.php" class="active">
			               <button class="btn btn-info" onClick="parent.location='nuevoemp.php'" >Nuevo</button><br><br>
			              </a>              
			          </div>
			         </div>
			       </div>
			   </div>
			 </div>


	        <table  class="table table-striped table-bordered">
	                <thead>
	                  <tr>
	                  <th >No.</th>
	                     <th> Nombre </th>
	                     <th>Apellido</th>
	                     <th>Sexo</th>
	                     <th>Edad</th>
	                     <th>Matricula</th>
	                     <th>Ficha</th>
	                     
	                     <th>Cambios</th>
	                     <th>Acciones</th>
	                  </tr>
	                </thead>
		</td>

				<tbody>
                  
					<?php
					// muestra desde las tablas datos y personas la consulta siguiente.	  
						require_once("includes/conexion_database.php");
						$query1 = "SELECT * FROM datos, persona WHERE datos.id_persona=persona.id_persona";
						//$resultados = mysql_query ($query);
				      	$resultados = $mysqli->query($query1);
							if (!$resultados) { $message = 'Invalid query: ' . mysql_error() . " ";
							$message .= 'Whole query: ' . $query; die($message);
						}

						while ($rowTotal = $resultados->fetch_assoc())
						{
					?>

		                <tr>
			                <td><?php echo $rowTotal["id_persona"]; ?></td>
							<td> <?php echo $rowTotal["Nombre"]; ?></td>
			                <td><?php echo $rowTotal["Apellido"]; ?> </td>
			                <td><?php echo $rowTotal["Sexo"]; ?> </td>
			                <td><?php echo $rowTotal["edad"]; ?> </td>
			                <td><?php echo $rowTotal["matricula"]; ?> </td>
			                
			                <td>
			                <a href="repersona.php?id=<?php echo $rowTotal["id_persona"]; ?>">ver</a>
			                </td>

			                
			                     
			                <td><a href="actualiza.php?id_per=<?php echo $rowTotal["id_persona"]; ?>">Actualizar</a>
			                </td>
			                     <!--<td><a href="../graficas/graficaslineal.php?id_per=<?php echo $rowTotal["id_persona"]; ?>">Ver</a></td>--> 
			                     
			                <td><a href="eliminar.php?id_per=<?php echo $rowTotal["id_persona"]; ?>">Eliminar</a></td>                    
		                </tr>
		                    

		                    <?php
							
								}
					?>
				
                </tbody>

			</table>
                
	   </table>
</div>
<?php require_once("includes/footer.php"); ?>