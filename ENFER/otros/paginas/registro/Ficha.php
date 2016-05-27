
<?php
$id_persona=$_GET["id_per"];
			require ("../../conf/config.php");
			$query1 = "SELECT * FROM datos, persona WHERE datos.id_persona=persona.id_persona 
      and persona.id_persona=$id_persona";
			//$resultados = mysql_query ($query);
      $resultados = $mysqli->query($query1);
			if (!$resultados) {
      $message = 'Invalid query: ' . mysql_error() . " ";
      $message .= 'Whole query: ' . $query1;
      die($message);
      }

      $rowTotal = $resultados->fetch_assoc();




			require ("../../conf/config.php");
			$query2 = "SELECT * FROM diagnostico, persona WHERE diagnostico.id_persona=persona.id_persona and persona.id_persona=$id_persona";
			//$resultados = mysql_query ($query);
      $resultados2 = $mysqli->query($query2);
			if (!$resultados2) {
$message = 'Invalid query: ' . mysql_error() . " ";
$message .= 'Whole query: ' . $query2;
die($message);
}

$rowTotal2 = $resultados2->fetch_assoc()
			
				
			
				?>
                
                <div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Fichas</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<div class="pricing-plans plans-3">
							
						<div class="plan-container">
					        <div class="plan">
						        <div class="plan-header">
					               <strong>  
						        	<div class="plan-title">Datos Personales</div> <!-- /plan-title -->
					           </strong>        
						            <div class="plan-price"></div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	        
						        
						        <div class="plan-features">
						          <ul>
						           <strong>
                   <li><td><p>Nombre: <?php echo $rowTotal["Nombre"]; ?>  <?php echo $rowTotal["Apellido"]; ?></p></td>  </li>     
                   
                     
                   <li> <td><p>Sexo: <?php echo $rowTotal["Sexo"]; ?> </p></td></li>
                     
                   <li> <td><p>Edad: <?php echo $rowTotal["edad"]; ?> Años</p></td></li>
                  
                  <li><td><p>Matricula: <?php echo $rowTotal["matricula"]; ?></p></li>
                                    
                                    <div class="plan-header">
					                
						        	<div class="plan-title">Comentarios</div> <!-- /plan-title -->
					                
						            <div class="plan-price"></div> <!-- /plan-price -->
									
						        </div>
                                
                                
                                <li> <td><p><textarea rows="4" cols="50" ><?php echo $rowTotal2["comentarios"]; ?></textarea></p></td></li>	
                                                              </strong>          
                                            
                </ul>
								</div> 
						        <!-- /plan-features -->
							 <strong>  	
							  <div class="plan-actions"></div> <!-- /plan-actions -->
					 </strong>  
							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->
					    
					    
					    
					    <div class="plan-container">
					        <div class="plan green">
						        <div class="plan-header">
					                
						        	<div class="plan-title">Datos Calculados</div> <!-- /plan-title -->
					                
						            <div class="plan-price"></div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	          
						        
						        <div class="plan-features">
									<ul>					
										<strong>
                                        
                                        <li><td><p>Peso Actual: <?php echo $rowTotal["peso_actual"]; ?> kg.</p></td>
                                       <li><td><p>Altura: <?php echo $rowTotal["talla"]; ?> Cm.</p></td>
                                      <li><td><p>Circunferencia de Cadera: <?php echo $rowTotal["circ_cadera"]; ?> Cm.</p></td>
                                       <li><td><p>Circunferencia de Muñeca: <?php echo $rowTotal["circ_muneca"]; ?> Cm.</p></td>
                                       <li><td><p>Medida del Brazo: <?php echo $rowTotal["media_brazo"]; ?> Cm.</p></td>
                                        <li><td><p>Pliegue Cutaneo: <?php echo $rowTotal["plie_cutaneo"]; ?> Cm.</p></td>
									</strong>
									</ul>
								</div> <!-- /plan-features -->
								 <strong>  
								<div class="plan-actions"></div> <!-- /plan-actions -->
					 </strong>  
							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->
                        
                        
                        

					    
					    <div class="plan-container">
					        <div class="plan">
						        <div class="plan-header">
					                
						        	<div class="plan-title">Indice de Masa</div> <!-- /plan-title -->
					                
						            <div class="plan-price"></div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	       
						        
						        <div class="plan-features">
									<ul><strong>
                                        <li>IMC: <?php echo $rowTotal2["imc"]; ?></li>	
										<li>Peso Ideal:<?php echo $rowTotal2["p_ideal"]; ?></li>
                                        <li>Indice cintura:<?php echo $rowTotal2["ind_cintura"]; ?> </li>
                                        <li>Complexión: <?php echo $rowTotal2["complexion"]; ?></li>
                                        <li>Pliegue Cutaneo:<?php echo $rowTotal2["cutaneo"]; ?>                       
                                            <div class="control-group">
												
												<div class="middlecuts">
													 <!-- Button to trigger modal -->
                                                    <a href="#myModal1" class="middlecut" data-toggle="modal"> <i class="icon-large icon-table"></i> </a>
                                                     
                                                    <!-- Modal -->
                                                    <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h3 id="myModalLabel">Pliegue cutaneo</h3>
                                                      </div>
                                                      <div class="modal-body">
     <div class="main-inner">
    <div class="container">
      <div class="row">
        
        <!-- /span6 -->
        <div class="span6">
          
          <!-- /widget -->
          
          <!-- /widget -->
          <div class="widget widget-table action-table" style="width:100%">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Masa grasa (Mujer)</h3>
            </div>
           
            <!-- /widget-header -->
            <div class="widget-content">
           <?php
      // if($sexo=="Mujer"){
       ?>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Edad</th>
                    <th> 5 </th>
                    <th>10</th>
                    <th> 15 </th>
                    <th>25</th>
                    <th>50 </th>
                    <th>75</th>
                    <th>85</th>
                    <th>90 </th>
                    <th>95</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
      require ("../../conf/config.php");
      $query1 = "SELECT * FROM enfermeria.cutaneo_mujer;";
      //$resultados = mysql_query ($query);
      $resultados = $mysqli->query($query1);
      if (!$resultados) {
$message = 'Invalid query: ' . mysql_error() . " ";
$message .= 'Whole query: ' . $query;
die($message);
}

      while ($rowTotal = $resultados->fetch_assoc())
      {
        ?>
          <tr>
                    <td><?php echo $rowTotal["edad1"]."-".$rowTotal["edad2"]; ?></td>
          <td> <?php echo $rowTotal["5"]; ?></td>
                    <td> <?php echo $rowTotal["10"]; ?></td>
                    <td> <?php echo $rowTotal["15"]; ?></td>
                    <td> <?php echo $rowTotal["25"]; ?></td>
                    <td> <?php echo $rowTotal["50"]; ?></td>
                    <td> <?php echo $rowTotal["75"]; ?></td>
                    <td> <?php echo $rowTotal["85"]; ?></td>
                    <td> <?php echo $rowTotal["90"]; ?></td>
                    <td> <?php echo $rowTotal["95"]; ?></td>
                    </tr>
                  <?php
          
      }
      
      
      ?>
                        
                
                </tbody>
              </table>
                
              <?php
        //}else{
        ?>
         </div>
    </div>
  </div>
            </div>
            <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 









  <div class="main-inner">
    <div class="container">
      <div class="row">
       
        <!-- /span6 -->
        <div class="span6">
          
          <!-- /widget -->
          
          <!-- /widget -->
          <div class="widget widget-table action-table" style="width:100%">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Masa grasa (Hombre)</h3>
            </div>
           
            <!-- /widget-header -->
            <div class="widget-content">
           <?php
      // if($sexo=="Mujer"){
       ?>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Edad</th>
                    <th> 5 </th>
                    <th>10</th>
                    <th> 15 </th>
                    <th>25</th>
                    <th>50 </th>
                    <th>75</th>
                    <th>85</th>
                    <th>90 </th>
                    <th>95</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
      require ("../../conf/config.php");
      $query1 = "SELECT * FROM enfermeria.percentpctmm;";
      //$resultados = mysql_query ($query);
      $resultados = $mysqli->query($query1);
      if (!$resultados) {
$message = 'Invalid query: ' . mysql_error() . " ";
$message .= 'Whole query: ' . $query;
die($message);
}

      while ($rowTotal = $resultados->fetch_assoc())
      {
        ?>
          <tr>
                    <td><?php echo $rowTotal["edad1"]."-".$rowTotal["edad2"]; ?></td>
          <td> <?php echo $rowTotal["5"]; ?></td>
                    <td> <?php echo $rowTotal["10"]; ?></td>
                    <td> <?php echo $rowTotal["15"]; ?></td>
                    <td> <?php echo $rowTotal["25"]; ?></td>
                    <td> <?php echo $rowTotal["50"]; ?></td>
                    <td> <?php echo $rowTotal["75"]; ?></td>
                    <td> <?php echo $rowTotal["85"]; ?></td>
                    <td> <?php echo $rowTotal["90"]; ?></td>
                    <td> <?php echo $rowTotal["95"]; ?></td>
                    </tr>
                  <?php
          
      }
      
      
      ?>
                        
                
                </tbody>
              </table>
                
              <?php
        //}else{
        ?>
         </div>
    </div>
  </div>
            </div>
            <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
                                                      </div>
                                                      
                                                    </div>
												</div> <!-- /controls -->	
											</div> <!-- /control-group -->
                                            
                                            
                                        </li>
										<li>Área brazo:<?php echo $rowTotal2["area_brazo"]; ?>
                                        <div class="control-group">
												
												<div class="middlecuts">
													 <!-- Button to trigger modal -->
                                                    <a href="#myModal" class="middlecut" data-toggle="modal"> <i class="icon-large icon-table"></i> </a>
                                                     
                                                    <!-- Modal -->
                                                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h3 id="myModalLabel">Área brazo</h3>
                                                      </div>
                                                      <div class="modal-body">
     <div class="main-inner">
    <div class="container">
      <div class="row">
        
        <!-- /span6 -->
        <div class="span6">
          
          <!-- /widget -->
          
          <!-- /widget -->
          <div class="widget widget-table action-table" style="width:100%">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Masa libre de grasa (Mujer)</h3>
            </div>
           
            <!-- /widget-header -->
            <div class="widget-content">
           <?php
      // if($sexo=="Mujer"){
       ?>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Edad</th>
                    <th> 5 </th>
                    <th>10</th>
                    <th> 15 </th>
                    <th>25</th>
                    <th>50 </th>
                    <th>75</th>
                    <th>85</th>
                    <th>90 </th>
                    <th>95</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
      require ("../../conf/config.php");
      $query1 = "SELECT * FROM enfermeria.percentiles_mujer;";
      //$resultados = mysql_query ($query);
      $resultados = $mysqli->query($query1);
      if (!$resultados) {
$message = 'Invalid query: ' . mysql_error() . " ";
$message .= 'Whole query: ' . $query;
die($message);
}

      while ($rowTotal = $resultados->fetch_assoc())
      {
        ?>
          <tr>
                    <td><?php echo $rowTotal["edad_1"]."-".$rowTotal["edad_2"]; ?></td>
          <td> <?php echo $rowTotal["5"]; ?></td>
                    <td> <?php echo $rowTotal["10"]; ?></td>
                    <td> <?php echo $rowTotal["15"]; ?></td>
                    <td> <?php echo $rowTotal["25"]; ?></td>
                    <td> <?php echo $rowTotal["50"]; ?></td>
                    <td> <?php echo $rowTotal["75"]; ?></td>
                    <td> <?php echo $rowTotal["85"]; ?></td>
                    <td> <?php echo $rowTotal["90"]; ?></td>
                    <td> <?php echo $rowTotal["95"]; ?></td>
                    </tr>
                  <?php
          
      }
      
      
      ?>
                        
                
                </tbody>
              </table>
                
              <?php
        //}else{
        ?>
      </div>
    </div>
  </div>
            </div>
            <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 





      <div class="main-inner">
    <div class="container">
      <div class="row">
        
        <!-- /span6 -->
        <div class="span6">
          
          <!-- /widget -->
          
          <!-- /widget -->
          <div class="widget widget-table action-table" style="width:100%">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Masa libre de grasa (Hombre)</h3>
            </div>
           
            <!-- /widget-header -->
            <div class="widget-content">
           <?php
      // if($sexo=="Mujer"){
       ?>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Edad</th>
                    <th> 5 </th>
                    <th>10</th>
                    <th> 15 </th>
                    <th>25</th>
                    <th>50 </th>
                    <th>75</th>
                    <th>85</th>
                    <th>90 </th>
                    <th>95</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
      require ("../../conf/config.php");
      $query1 = "SELECT * FROM enfermeria.percentiles_hombre;";
      //$resultados = mysql_query ($query);
      $resultados = $mysqli->query($query1);
      if (!$resultados) {
$message = 'Invalid query: ' . mysql_error() . " ";
$message .= 'Whole query: ' . $query;
die($message);
}

      while ($rowTotal = $resultados->fetch_assoc())
      {
        ?>
          <tr>
                    <td><?php echo $rowTotal["edad_1"]."-".$rowTotal["edad_2"]; ?></td>
          <td> <?php echo $rowTotal["5"]; ?></td>
                    <td> <?php echo $rowTotal["10"]; ?></td>
                    <td> <?php echo $rowTotal["15"]; ?></td>
                    <td> <?php echo $rowTotal["25"]; ?></td>
                    <td> <?php echo $rowTotal["50"]; ?></td>
                    <td> <?php echo $rowTotal["75"]; ?></td>
                    <td> <?php echo $rowTotal["85"]; ?></td>
                    <td> <?php echo $rowTotal["90"]; ?></td>
                    <td> <?php echo $rowTotal["95"]; ?></td>
                    </tr>
                  <?php
          
      }
      
      
      ?>
                        
                
                </tbody>
              </table>
                
              <?php
        //}else{
        ?>
         </div>
    </div>
  </div>
            </div>
            <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
                                                      </div>
                                                      
                                                    </div>
												</div> <!-- /controls -->	
											</div> <!-- /control-group -->
                                        	</li>
                                        <li>Ultima consulta:<?php echo $rowTotal2["Fecha"]; ?> </li>
                                        <li>Siguiente Cita:<?php echo $rowTotal2["sig_cita"]; ?></li>
                                        
                                        
                                        
									</strong>
									</ul>
								</div> <!-- /plan-features -->
								
								<div class="plan-actions">	
                                													
								</div> <!-- /plan-actions -->
                                
					
							</div> <!-- /plan -->
							
					    </div> <!-- /plan-container -->
				
				
					</div> <!-- /pricing-plans -->
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->					
				
		    </div> <!-- /span12 -->     	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
<script src="../../js/jquery-1.7.2.min.js"></script>
  
<script src="../../js/bootstrap.js"></script>
<script src="../../js/base.js"></script>
    
