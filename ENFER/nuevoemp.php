<?php

/*
-- =============================================
-- Author:		Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Formulario Nuevo Empleado
-- Parametros: $persona_selec, id_persona
-- =============================================
*/



 include("includes/header.php"); ?>
 <?php //include("otros/temples/side.php"); ?>
		
<div id="cuerpo">
	<table id="estructura">
			<tr>
			  <td id="menu">&nbsp;
			  <a href="content.php" style="color: white">← Volver</a><br></td>

			  <td id="pagina">
			  <h2>&nbsp;&nbsp;&nbsp;&nbsp;Agregar Nuevo Empleado</h2>
			  
				 <?php
if (isset($_GET["id_persona"])) {
 	$persona_selec = $_GET["id_persona"];
 }
				?>      

	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Datos de Empleado</h3>
	  				</div><!-- /widget-header -->
					
					<div class="widget-content">
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						</ul>
						
						<br>
						
						<div class="tab-content">
							<div class="tab-pane active" id="formcontrols">
					<form method="post" id="edit-profile" class="form-horizontal" action= "crear_emp.php" style="padding-left: 220px">
									<fieldset style="text-align: center; border-radius: 10px; ">
																			
						  			<div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">&nbsp;Nombre</label>

										<input type="text" name="Nombre" placeholder="Nombre(s)" 
										style="border-radius: 6px; width:410px; height:20px;
										background: #fff; font-size:15px;
										box-shadow: 0 0 2px 0px #B0B0B0;
										color:#343434;
										-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    									-webkit-box-shadow: 0 0 2px 0px #B0B0B0; " required />
										
										<div class="controls"></div> 			
									</div><br>
										

									<div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Apellidos:</label>	
										<input type="text" name="Apellido" placeholder="Apellidos"
										style="border-radius: 6px; width:410px; height:20px;
										background: #fff; font-size:15px;
										box-shadow: 0 0 2px 0px #B0B0B0;
										color:#343434;
										-moz-box-shadow: 0 0 2px 0px #B0B0B0;
    									-webkit-box-shadow: 0 0 2px 0px #B0B0B0;" required/>
										</span> <div class="controls"></div>			
									</div><br>
									

									<label class="control-label" for="Nombre" style="font-size: 15px;">Email:</label>			
									  <input type="text" name="email" placeholder="ejemplo@unav.com.mx"
									  style="border-radius: 6px; width:410px; height:20px;
									  background: #fff; font-size:15px;
									  box-shadow: 0 0 2px 0px #B0B0B0;
									  color:#343434;
									  -moz-box-shadow: 0 0 2px 0px #B0B0B0;
    								  -webkit-box-shadow: 0 0 2px 0px #B0B0B0;" required/>
									</p>

									<div class="control-group">
									  <p><label class="control-label" for="Nombre" style="font-size: 15px;">Edad:</label>
									  <input type="text" name="edad" placeholder="años"
									  style="border-radius: 6px; width:410px; height:20px;
									  background: #fff; font-size:15px;
									  box-shadow: 0 0 2px 0px #B0B0B0;
									  color:#343434;
									  -moz-box-shadow: 0 0 2px 0px #B0B0B0;
    								  -webkit-box-shadow: 0 0 2px 0px #B0B0B0;" required/>
									  </p> <div class="controls"></div>			
									</div> 


                                        <div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Talla:</label>
                                          <input type="text" name="talla" class="span6" id="firstname3" placeholder="talla" 
                                          style="border-radius: 6px; width:410px; height:20px;
									  background: #fff; font-size:15px;
									  box-shadow: 0 0 2px 0px #B0B0B0;
									  color:#343434;
									  -moz-box-shadow: 0 0 2px 0px #B0B0B0;
    								  -webkit-box-shadow: 0 0 2px 0px #B0B0B0;"required/>
                                        </span> <div class="controls"></div>			
										</div> <br>

                                        <div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Peso:</label>
                                          <input type="text" name="peso" class="span6" id="firstname3" placeholder="peso" 
                                          style="border-radius: 6px; width:410px; height:20px;
									  background: #fff; font-size:15px;
									  box-shadow: 0 0 2px 0px #B0B0B0;
									  color:#343434;
									  -moz-box-shadow: 0 0 2px 0px #B0B0B0;
    								  -webkit-box-shadow: 0 0 2px 0px #B0B0B0;"required/>
                                        </span><div class="controls"></div>			
										</div> 

                                        <div class="control-group">
                                          <p><label class="control-label" for="Nombre" style="font-size: 15px;">Cintura:</label>
                                          <input type="text" name="circ_cintura" class="span6" id="firstname4" placeholder="Circunferencia Cintura" 
                                          style="border-radius: 6px; width:410px; height:20px;
									  background: #fff; font-size:15px;
									  box-shadow: 0 0 2px 0px #B0B0B0;
									  color:#343434;
									  -moz-box-shadow: 0 0 2px 0px #B0B0B0;
    								  -webkit-box-shadow: 0 0 2px 0px #B0B0B0;"required/>
                                        </span>
                                        </p><div class="controls"></div>			
										</div> 
                                        
                                        <div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Matricula:</label>
                                        <input type="text" name="matricula" class="span6" id="firstname9" placeholder="matricula" 
                                        style="border-radius: 6px; width:410px; height:20px;
									  background: #fff; font-size:15px;
									  box-shadow: 0 0 2px 0px #B0B0B0;
									  color:#343434;
									  -moz-box-shadow: 0 0 2px 0px #B0B0B0;
    								  -webkit-box-shadow: 0 0 2px 0px #B0B0B0;"required/>
                                        </span><div class="controls"></div> 
										</div><br>
<br>
                                        
                                        <div class="control-group"><label class="control-label" for="Nombre" style="font-size: 15px;">Sexo:</label>
                                        </span><div class="controls"></div> 
                                                             
                                        <div class="controls">
                                        <div class="control-group">
                                            <label class="checkbox inline" style="font-size: 15px;">
                                            <input type="radio" name="Sexo" value="Mujer"> 
                                              Mujer</label>
                                            
                                            <label class="checkbox inline" style="font-size: 15px;">
                                              <input type="radio" name="Sexo" value="Hombre">  
                                            Hombre</label><br>
                                          </div>		<!-- /controls -->		
									  </div> <br><!-- /control-group --><!-- /control-group --><!-- /control-group -->
                                        
										

                                        <button class="btn btn-info">Agregar</button> 
                                        
                                        <button class="btn btn-info">
                                        <a href="content.php" class="active" style="color: white;">Cancelar</a>
                                        </button>
										</div>
									</fieldset>
								</tr>
				 				</td>
					</form>
					</table>
										
	
	<?php include("includes/footer.php"); 
	?>