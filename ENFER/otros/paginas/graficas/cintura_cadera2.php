
<?php
				
	   include ("../../conf/config.php");
 $query3 = "SELECT  Sexo, ind_cintura FROM  persona, diagnostico";
 
      $resultados3 = $mysqli->query($query3);
	  $androide=0;
	  $ginecoide=0;
   	  
	  $rdp3=$resultados3->fetch_assoc();
	   $rdp3['ind_cintura'];

	  
			while($rdp3=$resultados3->fetch_assoc())
    {	
				if($rdp3['ind_cintura']>=0.8 && $rdp3[                'ind_cintura']>=1.0)
				    
			         {
				  $androide += 1;
			         }
			       if($rdp3['ind_cintura']<0.8 && $rdp3[                'ind_cintura']<=1.0)
			         {
				  $ginecoide += 1;
			         } 		
				  }
			  
	///// segunda seccion
 	   
 $query4 = "SELECT Sexo, area_brazo FROM diagnostico,persona  
";
      $resultados4= $mysqli->query($query4);
	  $disminucion=0;
	  $bajopromedio=0;
      $masapromedio=0;
	  $arribapromedio=0;
	  $alta=0;

		  while( $rdp4=$resultados4->fetch_assoc() )
		{	
				 if($rdp4['area_brazo']<=5)
			  {
				  $disminucion += 1;
			  }
			  if($rdp4['area_brazo']>5 && $rdp4['area_brazo']<=15)
			  {
				  $bajopromedio += 1;
			  }
			  if($rdp4['area_brazo']>15 && $rdp4['area_brazo']<=85)
			  {
				  $masapromedio += 1;
			  }
			  if($rdp4['area_brazo']>85 && $rdp4['area_brazo']<=95)
			  {
				  $arribapromedio += 1;
			  }
			  if($rdp4['area_brazo']>95)
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
                                <h3> Indice Cintura Cadera, Mujer/Hombre </h3>
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
                    
                  <div class="span6">   
                    <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>Área Muscular del Brazo</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="pie-chart4" class="chart-holder" width="538" height="250">
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
        

        var pieData3 = [
             
				
			{
			    value: <?php echo $androide; ?>,
			    color: "#D97041",
                label: "Androide"
			},
			{
			    value: <?php echo $ginecoide; ?>,
			    color: "#C7604C",
                label: "Ginecoide"
			},
			
            ];
			
			        var myPie = new Chart(document.getElementById("pie-chart3").getContext("2d")).Pie(pieData3);

var pieData4 = [
             
				
			{
			    value: <?php echo $disminucion ?>,
			    color: "#D97041",
                label: "disminucion"
			},
			{
			    value: <?php echo $bajopromedio ?>,
			    color: "#C7604C",
                label: "bajopromedio"
			},
			{
			    value: <?php echo $masapromedio ?>,
			    color: "#21323D",
                label: "masapromedio"
			},
			{
			    value: <?php echo $arribapromedio ?>,
			    color: "#9D9B7F",
                label: "arribapromedio"
			},
			{
			    value: <?php echo $alta ?>,
			    color: "#7D4F6D",
                label: "alta"
			},
			

            ];

				var myPie = new Chart(document.getElementById("pie-chart4").getContext("2d")).Pie(pieData4);





				</script>

