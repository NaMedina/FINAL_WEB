<?php
	  $id_persona=$_GET["id_per"];		
	  include ("../../conf/config.php");
      $query1 = "SELECT * FROM diagnostico WHERE id_persona= $id_persona";
      $resultados = $mysqli->query($query1);
	  
	  $query2 = "SELECT * FROM diagnostico WHERE id_persona= $id_persona";
      $resultados2 = $mysqli->query($query2);
	  
	  $query3 = "SELECT * FROM diagnostico WHERE id_persona= $id_persona";
      $resultados3 = $mysqli->query($query3);
	  
	  $query4 = "SELECT * FROM diagnostico WHERE id_persona= $id_persona";
      $resultados4 = $mysqli->query($query4);
?>
    
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    IMC</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="imc" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /line-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->                       
                    </div>
                    <!-- /span6 -->
                    
                    
                    <div class="span6">
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    CUTANEO</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="cutaneo" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /line-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->                       
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
   
  
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="../../js/jquery-1.7.2.min.js"></script>
    <script src="../../js/excanvas.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/base.js"></script>
    <script src="../../js/Chart.js"></script>
    <script>
        
        var line = {
            labels: [
			<?php 
			$v=0;
				    while( $rdp=$resultados->fetch_assoc() )
                 {	 
				    ?> "Cita<?php echo $v += 1; ?>",
					<?php
	             }
	                ?>
			],
            datasets: [
				
				{
					
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [
					<?php
				    while( $rdp1=$resultados2->fetch_assoc() )
                 {	 
				  
				    echo $rdp1['imc'].",";
					
	             }
	                ?>
	
	],
					
	
				    
				}
			]

        }
		
		var myLine = new Chart(document.getElementById("imc").getContext("2d")).Line(line);




var lineas = {
            labels: [
			<?php 
			$n=1;
				    while( $rdp3=$resultados3->fetch_assoc() )
                 {	 
				  
				    ?> "Cita<?php echo $n; ?>",<?php
					$n += 1;
					
	             }
	                ?>
			],
            datasets: [
				
				{
					
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [
					<?php
				    while( $rdp4=$resultados4->fetch_assoc() )
                 {	 
				  
				    echo $rdp4['cutaneo'].",";
					
	             }
	                ?>
	
	],
					
	
				    
				}
			]

        }
		
		var myLineas = new Chart(document.getElementById("cutaneo").getContext("2d")).Line(lineas);

        </script>