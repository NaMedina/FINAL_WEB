

<?php include("includes/header.php"); ?>

	<script src="../js/jquery-1.7.2.min.js"></script>
    <script src="../js/excanvas.min.js"></script>
    <script src="../js/chart.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/base.js"></script>	


    <?php
	
	  include ("includes/conexion_database.php");
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
				 if($rdp['imc']<18)
			  {
				  $desnutricion += 1;
			  }
			  if($rdp['imc']>18 && $rdp['imc']<24.9)
			  {
				  $normal += 1;
			  }
			  if($rdp['imc']>25 && $rdp['imc']<26.9)
			  {
				  $sobrepeso += 1;
			  }
			  if($rdp['imc']>27 && $rdp['imc']<29)
			  {
				  $obesidad1 += 1;
			  }
			  if($rdp['imc']>29.9 && $rdp['imc']<30)
			  {
				  $obesidad2 += 1;
			  }
			  if($rdp['imc']=40 && $rdp['imc']>40)
			  {
				  $obesidad3 += 1;
			  }
			}
	  
				var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

				var chartData = [			
			  <?php while( $rdp=mysql_fetch_array($resultados) )
    		{
         		echo "{ value:\"".$rdp['desnu']."\", color:".$rdp['cuenta']."}"; 
   				echo ","; 
			}  

			?>];
	
	?>

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


				</script>


<?php require_once("includes/footer.php"); ?>