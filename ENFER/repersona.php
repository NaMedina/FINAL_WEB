<?php
		require_once("includes/conexion_database.php");
		$query0 = "SELECT * FROM datos, persona WHERE datos.id_persona=persona.id_persona";
					//$resultados = mysql_query ($query);
				      $resultados0 = $mysqli->query($query0);
					  $rowTotal0 = $resultados0->fetch_assoc();
		$id=$_GET["id"];?>

 <?php //require_once ("includes/functions.php");?>

 <?php 

 // Obtiene la variable id_per
 if (isset($_GET["id_per"])) {
 	$persona_selec = $_GET["id_per"];
 }
  	
 ?>
 <?php include("includes/header.php"); ?>

<div id="cuerpo">
<table id="estructura">
	<tr>
		<td id="menu" style="height: 750px">&nbsp;
			<ul>
			  <a href="content.php" style="color: white">← Volver</a><br>
			</ul>
		</td>
	
					  
		<td id="pagina" style="text-align: center;">&nbsp;
			 <h2>Ficha de Empleado</h2>

			<div class="main-inner">
			   <div class="container">
			     <div class="row">
			               <!-- /span6 -->
			       <div class="span6">
			         <div class="widget widget-table action-table" style="width:100%">
			          <div class="widget-header"><br>
			             
			              <a href="nuevoemp.php" class="active">
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
	                     <th>Peso</th>
	                     <th>Talla</th>
	                     <th>Cintura</th>
	                     <th>IMC</th>
	                     <th>Comentarios</th>
	                  </tr>
	                </thead>
		</td>

				<tbody>
                  
					<?php	  
						require_once("includes/conexion_database.php");
						$query1 = "SELECT * FROM datos, persona, diagnostico WHERE datos.id_persona=persona.id_persona and diagnostico.id_persona=datos.id_persona and datos.id_persona=$id";
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
			                <td><?php echo $rowTotal["peso_actual"]; ?> </td>
			                <td><?php echo $rowTotal["talla"]; ?> </td>
			                <td><?php echo $rowTotal["circ_cintura"]; ?> </td>
			                <td><?php echo $rowTotal["imc"]; ?> </td>
			                <td><?php echo $rowTotal["comentarios"]; ?> </td>
			                
			                         
		                </tr>

		                    <?php
							
								}
					?>
				
		        </tbody>

			</table>
                
	   </table>
</div>
<?php require_once("includes/footer.php"); ?>
