
<?php
				
	   include ("../../conf/config.php");
      $query1 = "SELECT complexion FROM diagnostico";
      $resultados = $mysqli->query($query1);
	  $ch=0;
	  $med=0;
	  $gr=0;
	  $rpd5=0;
            
			while( $rdp5=$resultados->fetch_assoc() )
    {	
				 if($rdp5['complexion']<16.4)
			  {
				  $ch += 1;
			  }
			  if($rdp5['complexion']>16.5 && $rdp5['complexion']<19.1)
			  {
				  $med += 1;
			  }
			  if($rdp5['complexion']>19.2)
			  {
				  $gr += 1;
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
                                <h3>
                                    Personas de Complexion Chica, Mediana y Grande </h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="pie-chart5" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /pie-chart -->
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
    <script src="../../js/Chart.js"></script>
    <script>
        

var pieData5 = [
             
				
			{
			    value: <?php echo $ch ?>,
			    color: "#D97041",
                label: " Complexion Chica"
			},
			{
			    value: <?php echo $med ?>,
			    color: "#C7604C",
                label: "Complexion Media"
			},
			{
			    value: <?php echo $gr ?>,
			    color: "#21323D",
                label: "Complexion Grande"
			}
            ];

				var myPie = new Chart(document.getElementById("pie-chart5").getContext("2d")).Pie(pieData5);





				</script>

