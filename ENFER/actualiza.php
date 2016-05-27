<?php 
/*
-- =============================================
-- Author:		Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Clase principal del Empleados
-- Parametros: Formulario de actualizar
-- =============================================
*/
include("includes/header.php"); ?>
<div id="cuerpo">
	<table id="estructura">
		<tr>
			<td id="menu">&nbsp;
			  <a href="content.php" style="color: white">← Volver</a><br>
			</td>

			<td id="pagina">
			  <h2>&nbsp; &nbsp;Actualizar Datos Empleado</h2>
		
	<?php
			if (isset($_GET["id_per"])){ $id_persona=$_GET["id_per"];
		
				 include('includes/conexion_database.php');
	
				$per = "SELECT * FROM persona WHERE persona.id_persona=persona.id_persona 
      			and persona.id_persona=$id_persona";
      			//echo $per;
      			$resultado = $mysqli->query($per);
						$rowTotal = $resultado->fetch_assoc();
	  			$nombre= $rowTotal["Nombre"];
	  			$apellido= $rowTotal["Apellido"];
				$sexo= $rowTotal["Sexo"];
				$matricula= $rowTotal["matricula"];
				$email= $rowTotal["email"];



      			$dat = "SELECT * FROM datos WHERE datos.id_persona=$id_persona";
      			//echo $dat;
      			$resultado1 = $mysqli->query($dat);
				$rowTotal2 = $resultado1->fetch_assoc();
	  			$peso_actual= $rowTotal2["peso_actual"];
	  			$talla= $rowTotal2["talla"];
				$edad= $rowTotal2["edad"];
				$circ_cintura= $rowTotal2["circ_cintura"];

/*	  $diag = "SELECT * FROM diagnostico WHERE diagnostico.id_persona=diagnostico.id_persona 
      and diagnostico.id_persona=$id_persona";
      //echo $diag;
      $resultado2 = $mysqli->query($per);
*/
      
			}

	?>      
	
		<div class="main-inner">

	    	<div class="container">
	
	      		<div class="row">
	      	
	      			<div class="span12">      		
	      		
	      				<div class="widget ">
	      				<div class="widget-header">
	      					<i class="icon-user"></i>
	      					<h3>&nbsp; &nbsp; Datos de Empleado</h3>
	  					</div>
					
						<div class="widget-content"></div>
						<div class="tabbable"></div>
						<ul class="nav nav-tabs">
						    <span>Actualize Datos del Empleado</span>
						</ul>
						<br>
			<div class="tab-content">
				<div class="tab-pane active" id="formcontrols">
					<form method="post" id="edit-profile" class="form-horizontal">
						
						<fieldset style="text-align: center;"><br><legend>Actualización:</legend>
																			
						  <div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Nombre:</label>
										<input type="text" name="Nombre"class="span6" id="firstname2" value="<?php echo $nombre;  ?>"
										style="border-radius: 6px; width:410px; height:20px;
										background: #fff; font-size:15px;
										box-shadow: 0 0 2px 0px #B0B0B0;
										color:#343434;
										-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    									-webkit-box-shadow: 0 0 2px 0px #B0B0B0;"/>
										<div class="controls"></div> 			
						  </div><br>
										

									<div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Apellidos:</label>	
										<input type="text" name="Apellido"class="span6" id="lastname" value="<?php echo $apellido;  ?>"
										style="border-radius: 6px; width:410px; height:20px;
										background: #fff; font-size:15px;
										box-shadow: 0 0 2px 0px #B0B0B0;
										color:#343434;
										-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    									-webkit-box-shadow: 0 0 2px 0px #B0B0B0;"/>
										<div class="controls"></div>			
									</div><br>
									

									<label class="control-label" for="Nombre" style="font-size: 15px;">Email:</label>			
									  <input type="text" name="email" class="span6" id="email2" value="<?php echo $email;  ?>"
									  style="border-radius: 6px; width:410px; height:20px;
										background: #fff; font-size:15px;
										box-shadow: 0 0 2px 0px #B0B0B0;
										color:#343434;
										-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    									-webkit-box-shadow: 0 0 2px 0px #B0B0B0;"/><span><br><br>
									

									<div class="control-group">
									  <p><label class="control-label" for="Nombre" style="font-size: 15px;">Edad:</label>
									  <input type="text" name="edad" class="span6" id="email" value="<?php echo $edad;  ?>"
									  style="border-radius: 6px; width:410px; height:20px;
										background: #fff; font-size:15px;
										box-shadow: 0 0 2px 0px #B0B0B0;
										color:#343434;
										-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    									-webkit-box-shadow: 0 0 2px 0px #B0B0B0;"/> </p> <div class="controls"></div>			
									</div> 


                                        <div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Talla:</label>
                                          <input type="text" name="talla" class="span6" id="firstname3" value="<?php echo $talla;  ?>" 
                                          style="border-radius: 6px; width:410px; height:20px;
										background: #fff; font-size:15px;
										box-shadow: 0 0 2px 0px #B0B0B0;
										color:#343434;
										-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    									-webkit-box-shadow: 0 0 2px 0px #B0B0B0;"/>
                                        </span> <div class="controls"></div>			
										</div> <br>

                                        <div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Peso:</label>
                                          <input type="text" name="peso" class="span6" id="firstname3" value="<?php echo $peso_actual;  ?>" 
                                          style="border-radius: 6px; width:410px; height:20px;
										background: #fff; font-size:15px;
										box-shadow: 0 0 2px 0px #B0B0B0;
										color:#343434;
										-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    									-webkit-box-shadow: 0 0 2px 0px #B0B0B0;"/>
                                        <div class="controls"></div>	
										</div> 

                                        <div class="control-group">
                                          <p><label class="control-label" for="Nombre" style="font-size: 15px;">Cintura:</label>
                                          <input type="text" name="circ_cintura" class="span6" id="firstname4" value="<?php echo $circ_cintura;  ?>"
                                          style="border-radius: 6px; width:410px; height:20px;
										background: #fff; font-size:15px;
										box-shadow: 0 0 2px 0px #B0B0B0;
										color:#343434;
										-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    									-webkit-box-shadow: 0 0 2px 0px #B0B0B0;"/>
                                          <div class="controls"></div>			
										</div> 
                                        
                                        <div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Matricula:</label>
                                        <input type="text" name="matricula" class="span6" id="firstname9" value="<?php echo $matricula;  ?>" 
                                        style="border-radius: 6px; width:410px; height:20px;
										background: #fff; font-size:15px;
										box-shadow: 0 0 2px 0px #B0B0B0;
										color:#343434;
										-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    									-webkit-box-shadow: 0 0 2px 0px #B0B0B0;"/>
                                        <div class="controls"></div> 
										</div><br>

									<br>
                                        
                                        <div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Sexo:</label>
                                        </span><div class="controls"></div> 
                                                             
                                        <div class="controls">
                                        <div class="control-group">
                                            <label class="checkbox inline" style="font-size: 15px;">
                                            <input type="radio" name="Sexo" value="Mujer" <?php if($sexo=="Mujer") { echo "SELECTD";}?>> 
                                              Mujer</label>
                                            
                                            <label class="checkbox inline" style="font-size: 15px;">
                                              <input type="radio" name="Sexo" value="Hombre" <?php if($sexo=="Hombre") { echo "SELECTD";}?>>  
                                            Hombre</label><br>
                                        </div>		<!-- /controls -->		
									  	</div>
															

                                        <button class="btn btn-info">Actualizar</button> 
                                      
                                        <button class="btn btn-info">Cancelar</button>
                        </fieldset>            	
					</form>
				</div>
			</div>

				</div>
				</div>
				</div>
				</div>
								
						  </table>
						
	      		</tr>
		    </td>
	      
	
	<?php include("includes/footer.php"); 

if (isset($_POST["Nombre"])) {
include_once("actualiza_emp.php");
	# code...
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$email=$_POST['email'];
$edad=$_POST['edad'];
$matricula=$_POST['matricula'];
$talla=$_POST['talla'];
$peso=$_POST['peso'];
$cintura=$_POST['circ_cintura'];
$sexo=$_POST['Sexo'];

$datos = new actualizar($id_persona, $nombre, $apellido, $email, $edad, $matricula, $talla, $peso, $cintura, $sexo);
$datos->actualiza();
}
	?>