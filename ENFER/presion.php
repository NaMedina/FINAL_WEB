<?php
require_once("includes/conexion_database.php");
?>
 <?php
 	//require_once ("includes/functions.php");

 	?>
 <?php include("includes/header.php"); ?>
 <div id="cuerpo">
	<table id="estructura">
		<tr>
			<td id="menu" style="height: 750px">
			  <ul>
			  	<a href="reportes.php" style="color: white">← Volver</a><br><br>
			  </ul>
			</td>
			  	<td id="pagina">
			  		<div><h2 style="text-align: center;">Reportes de Hipertensión(Presión)</h2></div>
			  		<h4 style="padding: 30px">Busque Empleado por Nombre o Apellido.</h4>
			  		
			  		<div class="control-group">
			  		<label class="control-label" for="Nombre" style="padding-left:700px; font-size: 15px;">Nombre</label>
						<input type="text" name="Nombre" value="Nombre/Apellido" 
						style="border-radius: 6px; width:210px; height:20px;
						background: #fff; font-size:15px;
						box-shadow: 0 0 2px 0px #B0B0B0;
						color:#343434;
						-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    					-webkit-box-shadow: 0 0 2px 0px #B0B0B0;" />
						</span>
						<button class="btn btn-info" onClick="parent.location='pagina.php'" 
						style="height: 30px;
							width: 80px;
							border:0;
							color: white;
							font-size:16px;
							border-radius:4px;
							cursor:pointer;">Buscar</button>
						<div class="controls"></div>
					
			  		<br>
			  		<br>
			  		<table  class="table table-striped table-bordered">
	                <thead>
	                  <tr >
	                  <th style="text-align: center;">No.</th>
	                     <th style="text-align: center;"> Nombre </th>
	                     <th style="text-align: center;">Apellido</th>
	                     <th style="text-align: center;">Peso</th>
	                     <th style="text-align: center;">Talla</th>
	                  </tr>
	                </thead>
	                </table><br><br><br>
					</div>

			  		<?php //include("graficas/grafi1.php"); ?>

			  	</td>
		</tr>
    </table>
</div>	


<?php require_once("includes/footer.php"); ?>