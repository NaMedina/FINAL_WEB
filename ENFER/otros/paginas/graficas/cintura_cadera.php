
<?php
				
	   include ("../../conf/config.php");
echo $query1 = "SELECT *
FROM diagnostico,persona WHERE persona.id_persona=diagnostico.id_persona
";
      $resultados = $mysqli->query($query1);
	  $androidem=0;
	  $ginecoidem=0;
   	$androideh=0;
	  $ginecoideh=0;

	  
			while($rdp=$resultados->fetch_assoc())
    {	
				 if($rdp['Sexo']=="Mujer")
			  {
				  
			 
			       
				    if($rdp['ind_cintura']>=0.8)
			         {
				  $androidem += 1;
			         }else 
					            {
									$androidem =0; 
							    }
			       if($rdp['ind_cintura']<0.8)
			         {
				  $ginecoidem += 1;
			         } 		else 
					            {
									$ginecoidem =0; 
							    }
				  }
			
			  
	 if($rdp['Sexo']=="Hombre")
	 {
		        
			  if($rdp['ind_cintura']>=1.0)
			  {
				  $androideh += 1;
			  }else 
					            {
									$androideh =0; 
							    }
			  if($rdp['ind_cintura']<1.0)
			  {
				  $ginecoideh+= 1;
			  }else 
					            {
									$ginecoideh =0; 
							    }
			 
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
                                   Indice Cintura Cadera, Mujer/Hombre  </h3>
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
			    value: <?php echo $androidem ?>,
			    color: "#D97041",
                label: "Androide Mujer"
			},
			{
			    value: <?php echo $ginecoidem ?>,
			    color: "#C7604C",
                label: "Ginecoide Mujer"
			},
			{
			    value: <?php echo $androideh ?>,
			    color: "#21323D",
                label: "Androide Hombre"
			}
			{
			    value: <?php echo $ginecoideh ?>,
			    color: "#12B50C",
                label: "Ginecoide Hombre"
			}
            ];

				var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);





				</script>

