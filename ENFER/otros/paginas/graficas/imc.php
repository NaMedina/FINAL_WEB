
<?php
				
	  include ("../../conf/config.php");
      $query1 = "SELECT imc FROM diagnostico";
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
	
	
	
	
	$query2 = "SELECT cutaneo FROM diagnostico";
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

	$query3 = "SELECT peso_actual FROM datos";
      $resultados3 = $mysqli->query($query3);
	  $peso_actual=0;
	  $talla=0;
	  $edad=0;
	  $cintura=0;
	  $cadera=0;
            
			while( $rdp3=$resultados3->fetch_assoc() )
    {	
				 if($rdp3['peso_actual']>=0 && $rdp3['peso_actual']<=5)
			  {
				  $peso_actual += 1;
			  }
			  if($rdp3['peso_actual']>5 && $rdp3['peso_actual']<=15)
			  {
				  $talla += 1;
			  }
			  if($rdp3['peso_actual']>15 && $rdp3['peso_actual']<=75)
			  {
				  $edad += 1;
			  }
			  if($rdp3['peso_actual']>75 && $rdp3['peso_actual']<=85)
			  {
				  $cintura += 1;
			  }
			  if($rdp3['peso_actual']>85)
			  {
				  $cadera += 1;
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
                                    IMC: numero de personas por categoria</h3>
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
                                    Cutaneo: numero de personas por categoria</h3>
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


                    <div class="span6">   
                    <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    Peso Actual: Pesos de empleados</h3>
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




var PieData3 = [
             
				
			{
			    value: <?php echo $peso_actual ?>,
			    color: "#D97041",
                label: "Peso Actual de Empleado"
			},
			{
			    value: <?php echo $talla ?>,
			    color: "#C7604C",
                label: "Talla de Empleado"
			},
			{
			    value: <?php echo $edad ?>,
			    color: "#21323D",
                label: "Edad de Empleado"
			},
			{
			    value: <?php echo $cintura ?>,
			    color: "#9D9B7F",
                label: "Cintura de Empleado"
			},
			{
			    value: <?php echo $cadera ?>,
			    color: "#7D4F6D",
                label: "Cadera de Empleado"
			}
            ];

				var mypeso = new Chart(document.getElementById("pie-chart3").getContext("2d")).Pie(PieData3);

				</script>

