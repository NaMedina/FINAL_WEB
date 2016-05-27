<?php
				
	   include ("../../conf/config.php");
 $query1 = "SELECT area_brazo FROM diagnostico";
      $resultados = $mysqli->query($query1);
	  $disminucion=0;
	  $bajopromedio=0;
      $masapromedio=0;
	  $arribapromedio=0;
	  $alta=0;

	  while( $rdp=$resultados->fetch_assoc() )
    {	
				 if($rdp['percentil']<=5)
			  {
				  $disminucion += 1;
			  }
			  if($rdp['percentil']>5 && $rdp['percentil']<=15)
			  {
				  $bajopromedio += 1;
			  }
			  if($rdp['percentil']>15 && $rdp['percentil']<=85)
			  {
				  $masapromedio += 1;
			  }
			  if($rdp['percentil']>85 && $rdp['percentil']<=95)
			  {
				  $arribapromedio += 1;
			  }
			  if($rdp['percentil']>95)
			  {
				  $alta += 1;
			  }
	}
	
	
		?>

         <div class="main-inner">
            <div class="container">
                <div class="row">
                
                
                    <div class="span6"> 
                        <!-- /widget -->
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>Area Muscular del Brazo</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="pie-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /pie-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                    </div>
                    
                  <div class="span6">   
                    <div class="widget"><!-- /widget-header -->
                            <div class="widget-content"><!-- /pie-chart -->
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
        <!-- /main-inner -->
   

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../js/jquery-1.7.2.min.js"></script>
    <script src="../../js/excanvas.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/base.js"></script>
    <script src="../../js/Chart.js"></script><script>
        

var pieData = [
             
				
			{
			    value: <?php echo $desnutricion ?>,
			    color: "#D97041",
                label: "disminucion"
			},
			{
			    value: <?php echo $normal ?>,
			    color: "#C7604C",
                label: "bajopromedio"
			},
			{
			    value: <?php echo $sobrepeso ?>,
			    color: "#21323D",
                label: "masapromedio"
			},
			{
			    value: <?php echo $obesidad1 ?>,
			    color: "#9D9B7F",
                label: "arribapromedio"
			},
			{
			    value: <?php echo $obesidad2 ?>,
			    color: "#7D4F6D",
                label: "alta"
			},
			

            ];

				var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);






				</script>


	