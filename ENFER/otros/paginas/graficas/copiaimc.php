
<?php
				
	  include ("../../conf/config.php");
      $query1 = "select imc from diagnostico";
      $resultados = $mysqli->query($query1);
	  $desnutricion=0;
	  $normal=0;
	  $sobrepeso=0;
	  $obesidad1=0;
	  $obesidad2=0;
	  $obesidad3=0;
            
			while( $rdp=$resultados->fetch_assoc() )
    {	
				 if($rdp['imc']<19.9)
			  {
				  $desnutricion += 1;
			  }
			  if($rdp['imc']>20 && $rdp['imc']<25)
			  {
				  $normal += 1;
			  }
			  if($rdp['imc']>25 && $rdp['imc']<30)
			  {
				  $sobrepeso += 1;
			  }
			  if($rdp['imc']>30 && $rdp['imc']<35)
			  {
				  $obesidad1 += 1;
			  }
			  if($rdp['imc']>35 && $rdp['imc']<40)
			  {
				  $obesidad2 += 1;
			  }
			  if($rdp['imc']<40)
			  {
				  $obesidad3 += 1;
			  }
	}
	
	
	
	
	$query2 = "select cutaneo from diagnostico";
      $resultados2 = $mysqli->query($query2);
	  $magro=0;
	  $abajo=0;
	  $promedio=0;
	  $arriba=0;
	  $exceso=0;
            
			while( $rdp2=$resultados2->fetch_assoc() )
    {	
				 if($rdp2['cutaneo']>=0 && $rdp2['cutaneo']<=5)
			  {
				  $magro += 1;
			  }
			  if($rdp2['cutaneo']>5 && $rdp2['cutaneo']<=15)
			  {
				  $abajo += 1;
			  }
			  if($rdp2['cutaneo']>15 && $rdp2['cutaneo']<=75)
			  {
				  $promedio += 1;
			  }
			  if($rdp2['cutaneo']>75 && $rdp2['cutaneo']<=85)
			  {
				  $arriba += 1;
			  }
			  if($rdp2['cutaneo']>85)
			  {
				  $exceso += 1;
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
                                    imc</h3>
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
                    <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    Cutaneo</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="cutaneo" class="chart-holder" width="538" height="250">
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
        

var pieData = [
             
				
			{
			    value: <?php echo $desnutricion ?>,
			    color: "#D97041",
                label: "Desnutrición"
			},
			{
			    value: <?php echo $normal ?>,
			    color: "#C7604C",
                label: "Normal"
			},
			{
			    value: <?php echo $sobrepeso ?>,
			    color: "#21323D",
                label: "Sobrepeso"
			},
			{
			    value: <?php echo $obesidad1 ?>,
			    color: "#9D9B7F",
                label: "Obesidad I"
			},
			{
			    value: <?php echo $obesidad2 ?>,
			    color: "#7D4F6D",
                label: "Obesidad II"
			},
			{
			    value: <?php echo $obesidad3 ?>,
			    color: "#584A5E",
                label: "Obesidad III"
			}

            ];

				var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);



var pliecut = [
             
				
			{
			    value: <?php echo $magro ?>,
			    color: "#D97041",
                label: "Magro- depleción de masa grasa"
			},
			{
			    value: <?php echo $abajo ?>,
			    color: "#C7604C",
                label: "Masa grasa abajo del promedio-riesgo"
			},
			{
			    value: <?php echo $promedio ?>,
			    color: "#21323D",
                label: "Masa grasa promedio"
			},
			{
			    value: <?php echo $arriba ?>,
			    color: "#9D9B7F",
                label: "Masa grasa arriba del promedio-riesgo"
			},
			{
			    value: <?php echo $exceso ?>,
			    color: "#7D4F6D",
                label: "Exceso de masa grasa-obesidad"
			}
            ];

				var mycutaneo = new Chart(document.getElementById("cutaneo").getContext("2d")).Pie(pliecut);






				</script>

