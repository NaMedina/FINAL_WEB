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
						
						<div class="pricing-plans plans-3"><!-- /plan-container --><!-- /plan-container -->
					    
					    <div class="plan-container">
					        <div class="plan">
						        <div class="plan-header">
					                
						        	<div class="plan-title">Indices</div> <!-- /plan-title -->
					                
						            <div class="plan-price"></div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	       
						        
						        <div class="plan-features">
									<ul><strong>
										
										<li>IMC:
                                         <?php
			require ("../../conf/config.php");
			$query = "SELECT peso_actual/ (talla * talla) FROM datos where id_datos= 1";
            $resultados = $mysqli-> query($query);
			$rowTotal = $resultados->fetch_assoc()
			?>
			<? echo $rowTotal["peso_actual/ (talla * talla)"];?>
        
                                        </li>
                                        
                                        <li>Cintura cadera:
                                         <?php  
        
			$query1 = "SELECT circ_cadera/ circ_cintura FROM datos where id_datos= 1";
            $resultados1 = $mysqli->query($query1);
			$rowTotal1 = $resultados1->fetch_assoc()
			?>
			 <? echo $rowTotal1["circ_cadera/ circ_cintura"];?>
             
                                        </li>
                                        
                                        <li>Complexión:
                                          <?php

			$query2 = "SELECT talla/ circ_muneca FROM datos where id_datos= 1";
            $resultados2 = $mysqli->query($query2);
			$rowTotal2 = $resultados2->fetch_assoc()
			?>
			 <? echo $rowTotal2["talla/ circ_muneca"];?>
                                        </li>
                                        
                                        <li>Área muscular del brazo:
                                        
                                        </li>
                                        
										<li>Pliegue Cutaneo: 
										  <input id="username" name="txtNombre" required type="text" placeholder="Pliegue Cutaneo"/>
										</li>
										<li>Pliegue Tricipital: 
										  <input id="username2" name="username" required type="text" placeholder="Pliegue Tricipital"/>
										</li>
									</strong>
									</ul>
								</div> <!-- /plan-features -->
								
								<div class="plan-actions">				
									<a href="javascript:;" class="btn">Signup Now</a>				
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
    
