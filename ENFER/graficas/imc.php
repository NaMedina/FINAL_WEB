<?php

/**
 * 
 * @ Por Nahum Ramirez Medina
 * @version 1.0
 */


				
	  include ("includes/conexion_database.php");
      $query1 = "SELECT imc FROM diagnostico";
      $resultados = $mysqli->query($query1);
	  $desnutricion=0;
	  $normal=0;
	  $sobrepeso=0;
	  $obesidad1=0;
	  $obesidad2=0;
	  $obesidad3=0;
            // ciclo mientras condicion
			while( $rdp=$resultados->fetch_assoc() )
    {	
				 if($rdp['imc']<=18)
			  {
				  $desnutricion++;
			  }
			  if($rdp['imc']>=19 && $rdp['imc']<=24.9)
			  {
				  $normal++;
			  }
			  if($rdp['imc']>=25 && $rdp['imc']<=26.9)
			  {
				  $sobrepeso++;
			  }
			  if($rdp['imc']>=27 && $rdp['imc']<=29.9)
			  {
				  $obesidad1++;
			  }
			  if($rdp['imc']>=30 && $rdp['imc']<=39.9)
			  {
				  $obesidad2++;
			  }
			  if($rdp['imc']>=40)
			  {
				  $obesidad3++;
			  }
	}

		// para mostrar datos de la tabla datos
	$query2 = "SELECT edad FROM datos";
      $resultados2 = $mysqli->query($query2);
	  $menor=0;
	  $mediano=0;
	  $adulto=0;
	  $jubilado=0;
            	// Inicia ciclo de condicion imc
			while( $rdp2=$resultados2->fetch_assoc() )
    {	
				 if($rdp2['edad']>=0 && $rdp2['edad']<=10)
			  {
				  $menor ++;
			  }
			  if($rdp2['edad']>=11 && $rdp2['edad']<=22)
			  {
				  $mediano ++;
			  }
			  if($rdp2['edad']>=23 && $rdp2['edad']<=40)
			  {
				  $adulto ++;
			  }
			  if($rdp2['edad']>=41 && $rdp2['edad']<=70)
			  {
				  $jubilado ++;
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
                                <h3 style="padding-left: 90px">
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
                                <h3 style="padding-left: 90px">
                                    Edad Actual: Edades de empleados</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="pie-chart3" class="chart-holder" width="538" height="250">
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
   
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/excanvas.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/base.js"></script>
    <script src="js/Chart.js"></script>
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



var PieData3 = [
             
				
			{
			    value: <?php echo $menor ?>,
			    color: "#D97041",
                label: "Menores de Edad"
			},
			{
			    value: <?php echo $mediano ?>,
			    color: "#C7604C",
                label: "Edad Mediana"
			},
			{
			    value: <?php echo $adulto ?>,
			    color: "#21323D",
                label: "Empleados Adultos"
			},
			{
			    value: <?php echo $jubilado ?>,
			    color: "#9D9B7F",
                label: "Empleados Jubilados"
			}

            ];

				var mypeso = new Chart(document.getElementById("pie-chart3").getContext("2d")).Pie(PieData3);
/**
 * @ Por Nahum Ramirez Medina
 * @version 1.0
 */
				</script>


