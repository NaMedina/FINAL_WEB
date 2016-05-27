<?php
$id_persona=$_GET["id_per"];
?>      <div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Cita</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						    <li  class="active">Datos Personales</li>
						</ul>
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" method="post" action= "../indices/guardar_indice.php?per=<?php echo $id_persona; ?>">
									<fieldset>
									<input type="hidden" name="id_persona" value="<?php echo $id_persona ?>"></input>

										<div class="control-group"><label class="control-label" for="Nombre">Nombre</label>
										<input type="text" name="Nombre"class="span6" id="firstname2" value="Nombre(s)" />
										</span>
<div class="controls"></div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
									  <div class="control-group"><label class="control-label" for="Nombre">Apellidos:</label>																			
											<input type="text" name="Apellido"class="span6" id="lastname" value="Apellidos" />
											</span>
											<div class="controls"></div> <!-- /controls -->				
									  </div> <!-- /control-group --><label class="control-label" for="Nombre">Email:</label>											
									  <input type="text" name="email" class="span6" id="email2" value="ejemplo@unav.com.mx" />
									</p>
									<div class="control-group">
									  <p><label class="control-label" for="Nombre">Edad:</label>
									  <input type="text" name="edad" class="span6" id="email" value="años" />
									  </p>
									  <div class="controls"></div> <!-- /controls -->				
									  </div> 
                                        <div class="control-group"><label class="control-label" for="Nombre">Talla:</label>
                                          <input type="text" name="talla" class="span6" id="firstname3" value="talla" />
                                        </span>
<div class="controls"></div> <!-- /controls -->				
										</div> 
                                        <div class="control-group"><label class="control-label" for="Nombre">Peso:</label>
                                          <input type="text" name="peso" class="span6" id="firstname3" value="peso" />
                                        </span>
<div class="controls"></div> <!-- /controls -->				
										</div> 
                                        <div class="control-group">
                                          <p><label class="control-label" for="Nombre">Cintura:</label>
                                          <input type="text" name="circ_cintura" class="span6" id="firstname4" value="Circunferencia Cintura" />
                                        </span></p>
                                          <div class="controls"></div> <!-- /controls -->				
										</div> 
                                        
                                        <div class="control-group"><label class="control-label" for="Nombre">Cadera:</label>
                                          <input type="text" name="circ_cadera" class="span6" id="firstname5" value="Circunferencia de Cadera" />
                                        </span>
<div class="controls"></div> 
										  <!-- /controls -->				
									  </div> 
                                        <div class="control-group"><label class="control-label" for="Nombre">Circunferencia de Muñeca:</label>
                                          <input type="text" name="circ_muneca" class="span6" id="firstname6" value="Circunferencia de Muñeca" />
                                        </span>
<div class="controls"></div> 
										  <!-- /controls -->				
									  </div> 
                                        <div class="control-group"><label class="control-label" for="Nombre">Medida del brazo:</label>
                                          <input type="text" name="media_brazo" class="span6" id="firstname7" value="Medida de Brazo" />
                                        </span>
<div class="controls"></div> 
										  <!-- /controls -->				
									  </div> 
                                        <div class="control-group"><label class="control-label" for="Nombre">Pliegue Cutaneo:</label>
                                          <input type="text" name="plie_cutaneo" class="span6" id="firstname8" value="pliegue cutaneo" />
                                        </span>
<div class="controls"></div> 

										</div> 
                                        <div class="control-group"><label class="control-label" for="Nombre">Matricula:</label>
                                          <input type="text" name="matricula" class="span6" id="firstname9" value="matricula" />
                                        </span>
<div class="controls"></div> 
										  <!-- /controls -->				
									  </div> 
										<div class="control-group"><label class="control-label" for="Nombre">Siguiente Cita:</label>
                                        		  <input type="date" name="plie_cutaneo1" class="span6" id="firstname" value="cita" />
										</span>
<div class="controls"></div> 
										  <!-- /controls -->				
									  </div> 
									<!-- /contr
									ol-group -->
										
										 <!-- /control-group -->
										
                                        
                                        
                                        <div class="control-group"><label class="control-label" for="Nombre">Sexo:</label>
                                           </span>
<div class="controls"></div> 
                                                             
                                            <div class="controls">
                                            						<div class="control-group">
                                            <label class="checkbox inline">
                                            
                                            
                                              <input type="radio" name="Sexo" value="Mujer"> 
                                              Mujer<br />
                                            </label>
                                            
                                            <label class="checkbox inline">
                                              <input type="radio" name="Sexo" value="Hombre">  
                                              Hombre</label>
                                          </div>		<!-- /controls -->		
									  </div> <!-- /control-group --><!-- /control-group --><!-- /control-group -->
                                        

                                        <button class="btn btn-info">Guardar</button> 
                                      
                                        <button class="btn btn-info">Cancelar</button>




									</fieldset>
								</form>
								</div>
								
								
								</div>
								
							</div>
						  
						  
						</div>
						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->












