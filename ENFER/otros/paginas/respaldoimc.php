
<?php
				
	  include ("conf/config.php");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Charts - Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </a><a class="brand" href="index.html">Bootstrap Admin Template </a>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:;">Settings</a></li>
                                <li><a href="javascript:;">Help</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> EGrappler.com <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:;">Profile</a></li>
                                <li><a href="javascript:;">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Search">
                    </form>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->
    <div class="subnavbar">
        <div class="subnavbar-inner">
            <div class="container">
                <ul class="mainnav">
                    <li><a href="index.html"><i class="icon-dashboard"></i><span>Dashboard</span> </a>
                    </li>
                    <li><a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a>
                    </li>
                    <li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span>
                    </a></li>
                    <li class="active"><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a>
                    </li>
                    <li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a>
                    </li>
                    <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li><a href="icons.html">Icons</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="pricing.html">Pricing Plans</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                            <li><a href="error.html">404</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /container -->
        </div>
        <!-- /subnavbar-inner -->
    </div>
    <!-- /subnavbar -->
    <div class="main">
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
                    
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /main-inner -->
    </div>
    <!-- /main -->
    <div class="extra">
        <div class="extra-inner">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <h4>
                            About Free Admin Template</h4>
                        <ul>
                            <li><a href="javascript:;">EGrappler.com</a></li>
                            <li><a href="javascript:;">Web Development Resources</a></li>
                            <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                            <li><a href="javascript:;">Free Resources and Scripts</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="http://www.egrappler.com">Open Source jQuery Plugins</a></li>
                            <li><a href="http://www.egrappler.com;">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="http://www.egrappler.com;">Free Contact Form Plugin</a></li>
                            <li><a href="http://www.egrappler.com;">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /extra-inner -->
    </div>
    <!-- /extra -->
    <div class="footer">
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        &copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>.
                    </div>
                    <!-- /span12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /footer-inner -->
    </div>
    <!-- /footer -->
    <!-- Le javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
</body>
</html>
