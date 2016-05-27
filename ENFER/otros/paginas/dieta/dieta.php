<?php
$nivel_dir="../../";
$per=$_GET["id_per"];

//require_once("class/session.class.php");
include($nivel_dir.'template/include/head.php');
include($nivel_dir.'template/include/top.php');
include($nivel_dir.'template/include/side.php');
?>
<?php
				
	  include ("../../conf/config.php");
      $query1 = "select * from diagnostico where id_persona=$per;";
      $resultados = $mysqli->query($query1);
	  $rowtotal=$resultados -> fetch_assoc();
?>
<!-- CONTENT -->

<h3>&nbsp;</h3>
<div class="main"><!-- /main-inner --> 

</div>

<div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Macronutrientes</h3>
</div>
            <!-- /widget-header -->
<div class="widget-content">
              <table width="83%" height="83" class="table table-striped table-bordered">
                <thead>
                  <tr>
                  <th width="105"></th>
                  <th width="142" align="center">&nbsp;</th>
                  <th width="243" align="center">Peso ideal</th>
                   <th width="243" align="center">Resultado</th>
                  </tr>
                </thead>
				<form action=# method="post">
                <tbody>
                <tr>
                  <td>Diagnostico</td>
                  <td align="center"><input name="txtNum" type="number" id="Altura" placeholder="25" max="40" min="25" step="1.0" value="25"></td>
                    <td align="center"> <?php echo $pi=$rowtotal['p_ideal']?>                  </td>   
                  <td><input name="txtResulCal" type="text"placeholder="" value="<?php if(isset($_REQUEST['txtNum'])){
                    $res=$_REQUEST['txtNum'];
                 echo  $ResulCal=$res*$pi; }?>" size="15"/>
                  </tr>
                
                </tbody>
  </table>
  
  <div align="right">
  <button class="btn btn-success"><i class="icon-large icon-ok"></i>Calcular </button>  
</li>
 </div>
            <!-- /widget-content --> 
</div>
<p><!-- /widget-content --><!-- /widget-header --></p>
<div class="widget-content">
              <table width="83%" class="table table-striped table-bordered">
                <thead>
                  <tr>
                  <th width="222">                    Porcentaje</th>
                    <th width="222">Calorias</th>
                    <th width="200">Gramos</th>
                  </tr>
                </thead>
<tbody>

                  <tr><center>
                 <td align="left"><input name="txtPor1" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtPor1'])) {echo $_REQUEST['txtPor1'];} ?>" /></td> 
                   <td align="left"><input name="txtPor2" type="text"placeholder="" value="<?php if(isset($_REQUEST['txtPor1'])){$res=$_REQUEST['txtPor1']; echo  $multi=$res*$ResulCal; } ?>" size="15"/></td>
                    <td align="left"><input name="txtPor3" type="text"placeholder="" value="<?php if(isset($_REQUEST['txtPor1'])){$res=$_REQUEST['txtPor1']; echo  $multi=$res*$ResulCal/4; } ?>" size="15"/></td>
                    </center>
                  </tr>
                  <tr>
                    <td><input name="txtPor12" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtPor12'])) {echo $_REQUEST['txtPor12'];}?>" /></td>
                    <td><input name="txtPor6" type="text"placeholder="" value="<?php if(isset($_REQUEST['txtPor12'])){$res=$_REQUEST['txtPor12']; echo  $multi=$res*$ResulCal; } ?>" size="15"/></td>
                    <td><input name="txtPor4" type="text"placeholder="" value="<?php if(isset($_REQUEST['txtPor1'])){$res=$_REQUEST['txtPor1']; echo  $multi=$res*$ResulCal/4; } ?>" size="15"/></td>
                  </tr>
                  <tr>
                    <td><input name="txtPor13" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtPor13'])) {echo $_REQUEST['txtPor13'];}?>" /></td>
                    <td><input name="txtPor7" type="text"placeholder="" value="<?php if(isset($_REQUEST['txtPor13'])){$res=$_REQUEST['txtPor13']; echo  $multi=$res*$ResulCal; } ?>" size="15"/></td>
                    <td><input name="txtPor5" type="text"placeholder="" value="<?php if(isset($_REQUEST['txtPor1'])){$res=$_REQUEST['txtPor1']; echo  $multi=$res*$ResulCal/9; } ?>" size="15"/></td>
                  </tr>
                </tbody>
  </table>
              <div align="right">
                <button class="btn btn-success"><i class="icon-large icon-ok"></i>Calcular </button>
                 
</li>
</div>
            <!-- /widget-content --> 
            
</div>
<p>&nbsp;</p>
<div class="widget-header"> <i class="icon-th-list"></i>
  <h3>Tabla Nutrimental</h3>
            </div>
            <div class="widget-content">
              <table width="802" class="table table-striped table-bordered">
                <thead>
                  <tr>
                  <th width="84">Grupo</th>
                    <th width="120">Tipos</th>
                    <th width="131">Intercambios</th>
                    <th colspan="3">Proteina</th>
                    <th colspan="3">Lipidos</th>
                    <th colspan="3"> Hidratos de carbono</th>
                  </tr>
                </thead>
               
			<tbody>
                  <tr><center>
                   <td colspan="">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="48">g/racion</td>
                    <td width="63">g totales</td>
                    <td width="35">kcal</td>
                    <td width="51">g/racion</td>
                    <td width="50">g totales</td>
                    <td width="25">kcal</td>
                    <td width="61">g/raciones</td>
                    <td width="50">g totales</td>
                    <td width="32">kcal</td>
                    </center>
                  </tr>
                  <tr>
                    <td>Verduras</td>
                    <td>&nbsp;</td>
                    <td><input name="txtVerduras" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras'])) {echo $_REQUEST['txtVerduras'];}?>" /> </td>
                    <td>2</td>
                    <td id="p1">
                    <?php $valor=2;
                    if(isset($_REQUEST['txtVerduras'])){
                    $res=$_REQUEST['txtVerduras'];
                 echo  $multi=$res*$valor; }
				 ?></td>
                    <td id="pr1"><?php $valor=2;
                    if(isset($_REQUEST['txtVerduras'])){
                    $res=$_REQUEST['txtVerduras'];
                 echo  $multil=$res*$valor*4; }
				 ?>                      </td>
                    <td>0</td>
                    <td id="l1"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras'])){
                    $res=$_REQUEST['txtVerduras'];
                 echo  $multip=$res*$valor; }
				 ?>                      </td>
                    <td id="li1"><?php $valor=2;
                    if(isset($_REQUEST['txtVerduras'])){
                    $res=$_REQUEST['txtVerduras'];
                 echo  $multipl=$res*$valor*9; }
				 ?></td>
                    <td>4</td>
                    <td id="h1"><?php $valor=4;
                    if(isset($_REQUEST['txtVerduras'])){
                    $res=$_REQUEST['txtVerduras'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi1"><?php $valor=4;
                    if(isset($_REQUEST['txtVerduras'])){
                    $res=$_REQUEST['txtVerduras'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td>Frutas</td>
                    <td>&nbsp;</td>
                    <td><input name="txtVerduras2" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras2'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>0</td>
                    <td id="p2"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras2'])){
                    $res=$_REQUEST['txtVerduras2'];
                 echo  $multi2=$res*$valor; }
				 ?>                </td>
                    <td id="pr2"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras2'])){
                    $res=$_REQUEST['txtVerduras2'];
                 echo  $multil2=$res*$valor*4; }
				 ?>                    </td>
                    <td>0</td>
                    <td id="l2"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras2'])){
                    $res=$_REQUEST['txtVerduras2'];
                 echo  $multip2=$res*$valor; }
				 ?></td>
                    <td id="li2"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras2'])){
                    $res=$_REQUEST['txtVerduras2'];
                 echo  $multipl2=$res*$valor*9; }
				 ?></td>
                    <td>15</td>
                    <td id="h2"><?php $valor=15;
                    if(isset($_REQUEST['txtVerduras2'])){
                    $res=$_REQUEST['txtVerduras2'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi2"><?php $valor=15;
                    if(isset($_REQUEST['txtVerduras2'])){
                    $res=$_REQUEST['txtVerduras2'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td rowspan="2">Cereales y Tuberculos</td>
                    <td>a) Sin grasa</td>
                    <td><input name="txtVerduras3" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras3'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>2</td>
                    <td id="p3"><?php $valor=2;
                    if(isset($_REQUEST['txtVerduras3'])){
                    $res=$_REQUEST['txtVerduras3'];
                 echo  $multi3=$res*$valor; }
				 ?></td>
                    <td id="pr3"> 
                    <?php $valor=2;
                    if(isset($_REQUEST['txtVerduras3'])){
                    $res=$_REQUEST['txtVerduras3'];
                 echo  $multil3=$res*$valor*4; }
				 ?></td>
                    <td>0</td>
                    <td id="l3"> <?php $valor=0;
                    if(isset($_REQUEST['txtVerduras3'])){
                    $res=$_REQUEST['txtVerduras3'];
                 echo  $multip3=$res*$valor; }
				 ?></td>
                    <td id="li3"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras3'])){
                    $res=$_REQUEST['txtVerduras3'];
                 echo  $multipl3=$res*$valor*9; }
				 ?></td>
                    <td id="h3">15</td>
                    <td><?php $valor=15;
                    if(isset($_REQUEST['txtVerduras3'])){
                    $res=$_REQUEST['txtVerduras3'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi3"><?php $valor=15;
                    if(isset($_REQUEST['txtVerduras3'])){
                    $res=$_REQUEST['txtVerduras3'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td>b) Con grasa</td>
                    <td><input name="txtVerduras4" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras4'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>2</td>
                    <td id="p4"><?php $valor=2;
                    if(isset($_REQUEST['txtVerduras4'])){
                    $res=$_REQUEST['txtVerduras4'];
                 echo  $multi4=$res*$valor; }
				 ?></td>
                    <td id="pr4"> 
                    <?php $valor=2;
                    if(isset($_REQUEST['txtVerduras4'])){
                    $res=$_REQUEST['txtVerduras4'];
                 echo  $multil4=$res*$valor*4; }
				 ?></td>
                    <td>5</td>
                    <td id="l4"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras4'])){
                    $res=$_REQUEST['txtVerduras4'];
                 echo  $multip4=$res*$valor; }
				 ?></td>
                    <td id="li4"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras4'])){
                    $res=$_REQUEST['txtVerduras4'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>15</td>
                    <td id="h4"><?php $valor=15;
                    if(isset($_REQUEST['txtVerduras4'])){
                    $res=$_REQUEST['txtVerduras4'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi4"><?php $valor=15;
                    if(isset($_REQUEST['txtVerduras4'])){
                    $res=$_REQUEST['txtVerduras4'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                    
                  </tr>
                  <tr>
                    <td>Leguminosas</td>
                    <td>&nbsp;</td>
                    <td><input name="txtVerduras5" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras5'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>8</td>
                    <td id="p5"> <?php $valor=8;
                    if(isset($_REQUEST['txtVerduras5'])){
                    $res=$_REQUEST['txtVerduras5'];
                 echo  $multi5=$res*$valor; }
				 ?></td>
                    <td id="pr5"> <?php $valor=8;
                    if(isset($_REQUEST['txtVerduras5'])){
                    $res=$_REQUEST['txtVerduras5'];
                 echo  $multil5=$res*$valor*4; }
				 ?><td>1</td>
                    <td id="l5"><?php $valor=1;
                    if(isset($_REQUEST['txtVerduras5'])){
                    $res=$_REQUEST['txtVerduras5'];
                 echo  $multip5=$res*$valor; }
				 ?></td>
                    <td id="li5"><?php $valor=1;
                    if(isset($_REQUEST['txtVerduras5'])){
                    $res=$_REQUEST['txtVerduras5'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>20</td>
                    <td id="h5"><?php $valor=20;
                    if(isset($_REQUEST['txtVerduras5'])){
                    $res=$_REQUEST['txtVerduras5'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi5"><?php $valor=20;
                    if(isset($_REQUEST['txtVerduras5'])){
                    $res=$_REQUEST['txtVerduras5'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td rowspan="4">Alimentos de origen animal</td>
                    <td>a) Muy bajo aporte de grasa</td>
                    <td><input name="txtVerduras6" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras6'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>7</td>
                    <td id="p6"><?php $valor=7;
                    if(isset($_REQUEST['txtVerduras6'])){
                    $res=$_REQUEST['txtVerduras6'];
                 echo  $multi6=$res*$valor; }
				 ?></td>
                    <td id="pr6"> <?php $valor=7;
                    if(isset($_REQUEST['txtVerduras6'])){
                    $res=$_REQUEST['txtVerduras6'];
                 echo  $multil6=$res*$valor*4; }
				 ?><td>1</td>
                    <td id="l6"><?php $valor=2;
                    if(isset($_REQUEST['txtVerduras6'])){
                    $res=$_REQUEST['txtVerduras6'];
                 echo  $multip6=$res*$valor; }
				 ?></td>
                    <td id="li6"><?php $valor=2;
                    if(isset($_REQUEST['txtVerduras6'])){
                    $res=$_REQUEST['txtVerduras6'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>0</td>
                    <td id="h"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras6'])){
                    $res=$_REQUEST['txtVerduras6'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi6"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras6'])){
                    $res=$_REQUEST['txtVerduras6'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td>b) Bajo aporte de grasa</td>
                    <td><input name="txtVerduras7" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras7'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>7</td>
                    <td id="p7"><?php $valor=7;
                    if(isset($_REQUEST['txtVerduras7'])){
                    $res=$_REQUEST['txtVerduras7'];
                 echo  $multi7=$res*$valor; }
				 ?></td>
                    <td id="pr7"><?php $valor=7;
                    if(isset($_REQUEST['txtVerduras7'])){
                    $res=$_REQUEST['txtVerduras7'];
                 echo  $multil7=$res*$valor*4; }
				 ?><td>3</td>
                    <td id="l7"><?php $valor=3;
                    if(isset($_request['txtverduras7'])){
                    $res=$_request['txtverduras7'];
                 echo  $multip7=$res*$valor; }
				 ?></td>
                    <td id="li7"><?php $valor=2;
                    if(isset($_REQUEST['txtVerduras7'])){
                    $res=$_REQUEST['txtVerduras7'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>0</td>
                    <td id="h7"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras7'])){
                    $res=$_REQUEST['txtVerduras7'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi7"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras7'])){
                    $res=$_REQUEST['txtVerduras7'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                    
                  </tr>
                  <tr>
                    <td>c) Moderado aporte de grasa</td>
                    <td><input name="txtVerduras8" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras8'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>7</td>
                    <td id="p8"><?php $valor=7;
                    if(isset($_REQUEST['txtVerduras8'])){
                    $res=$_REQUEST['txtVerduras8'];
                 echo  $multi8=$res*$valor; }
				 ?></td>
                    <td id="pr8"><?php $valor=7;
                    if(isset($_REQUEST['txtVerduras8'])){
                    $res=$_REQUEST['txtVerduras8'];
                 echo  $multil8=$res*$valor*4; }
				 ?><td>5</td>
                    <td id="l8"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras8'])){
                    $res=$_REQUEST['txtVerduras8'];
                 echo  $multip8=$res*$valor; }
				 ?></td>
                    <td id="li8"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras8'])){
                    $res=$_REQUEST['txtVerduras8'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>0</td>
                    <td id="h8"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras8'])){
                    $res=$_REQUEST['txtVerduras8'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi8"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras8'])){
                    $res=$_REQUEST['txtVerduras8'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td>d)Alto aporte de grasa</td>
                    <td><input name="txtVerduras9" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras9'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>7</td>
                    <td id="p9"><?php $valor=7;
                    if(isset($_REQUEST['txtVerduras9'])){
                    $res=$_REQUEST['txtVerduras9'];
                 echo  $multi8=$res*$valor; }
				 ?>                      </td>
                    <td id="pr9"><?php $valor=7;
                    if(isset($_REQUEST['txtVerduras9'])){
                    $res=$_REQUEST['txtVerduras9'];
                 echo  $multil9=$res*$valor*4; }
				 ?>
                      
                    <td>8</td>
                    <td id="l9"><?php $valor=8;
                    if(isset($_REQUEST['txtVerduras9'])){
                    $res=$_REQUEST['txtVerduras9'];
                 echo  $multip9=$res*$valor; }
				 ?>                </td>
                    <td id="li9"><?php $valor=8;
                    if(isset($_REQUEST['txtVerduras9'])){
                    $res=$_REQUEST['txtVerduras9'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>0</td>
                    <td id="h9"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras9'])){
                    $res=$_REQUEST['txtVerduras9'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi9"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras9'])){
                    $res=$_REQUEST['txtVerduras9'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td rowspan="4">Leche</td>
                    <td>a) Descremada</td>
                    <td><input name="txtVerduras10" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras10'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>9</td>
                    <td id="p10"><?php $valor=9;
                    if(isset($_REQUEST['txtVerduras10'])){
                    $res=$_REQUEST['txtVerduras10'];
                 echo  $multi10=$res*$valor; }
				 ?>                      </td>
                    <td id="pr10"><?php $valor=9;
                    if(isset($_REQUEST['txtVerduras10'])){
                    $res=$_REQUEST['txtVerduras10'];
                 echo  $multil10=$res*$valor*4; }
				 ?>
                      
                    <td>2</td>
                    <td id="l10"> <?php $valor=2;
                    if(isset($_REQUEST['txtVerduras10'])){
                    $res=$_REQUEST['txtVerduras10'];
                 echo  $multip10=$res*$valor; }
				 ?>                   </td>
                    <td id="li10"><?php $valor=2;
                    if(isset($_REQUEST['txtVerduras10'])){
                    $res=$_REQUEST['txtVerduras10'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>12</td>
                    <td id="h10"><?php $valor=12;
                    if(isset($_REQUEST['txtVerduras10'])){
                    $res=$_REQUEST['txtVerduras10'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi10"><?php $valor=12;
                    if(isset($_REQUEST['txtVerduras10'])){
                    $res=$_REQUEST['txtVerduras10'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td>b) Semidescremada</td>
                    <td><input name="txtVerduras11" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras11'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>9</td>
                    <td id="p11"><?php $valor=9;
                    if(isset($_REQUEST['txtVerduras11'])){
                    $res=$_REQUEST['txtVerduras11'];
                 echo  $multi11=$res*$valor; }
				 ?>                    </td>
                    <td id="pr11"><?php $valor=9;
                    if(isset($_REQUEST['txtVerduras11'])){
                    $res=$_REQUEST['txtVerduras11'];
                 echo  $multil11=$res*$valor*4; }
				 ?>
                      
                    <td>4</td>
                    <td id="l11"><?php $valor=4;
                    if(isset($_REQUEST['txtVerduras11'])){
                    $res=$_REQUEST['txtVerduras11'];
                 echo  $multip11=$res*$valor; }
				 ?>                   </td>
                    <td id="li11"><?php $valor=4;
                    if(isset($_REQUEST['txtVerduras11'])){
                    $res=$_REQUEST['txtVerduras11'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>12</td>
                    <td id="h11"><?php $valor=12;
                    if(isset($_REQUEST['txtVerduras11'])){
                    $res=$_REQUEST['txtVerduras11'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi11"><?php $valor=11;
                    if(isset($_REQUEST['txtVerduras11'])){
                    $res=$_REQUEST['txtVerduras12'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td>c) Entera</td>
                    <td><input name="txtVerduras12" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras12'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>9</td>
                    <td id="p12"> <?php $valor=9;
                    if(isset($_REQUEST['txtVerduras12'])){
                    $res=$_REQUEST['txtVerduras12'];
                 echo  $multi12=$res*$valor; }
				 ?>                    </td>
                    <td id="pr12"><?php $valor=9;
                    if(isset($_REQUEST['txtVerduras12'])){
                    $res=$_REQUEST['txtVerduras12'];
                 echo  $multil12=$res*$valor*4; }
				 ?>
                      
                    <td>5</td>
                    <td id="l12"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras12'])){
                    $res=$_REQUEST['txtVerduras12'];
                 echo  $multip12=$res*$valor; }
				 ?>                   </td>
                    <td id="li12"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras12'])){
                    $res=$_REQUEST['txtVerduras12'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>12</td>
                    <td id="h12"><?php $valor=12;
                    if(isset($_REQUEST['txtVerduras12'])){
                    $res=$_REQUEST['txtVerduras13'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi12"><?php $valor=12;
                    if(isset($_REQUEST['txtVerduras12'])){
                    $res=$_REQUEST['txtVerduras13'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td>d) Con azucar</td>
                    <td><input name="txtVerduras13" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras13'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>9</td>
                    <td id="p13"> <?php $valor=9;
                    if(isset($_REQUEST['txtVerduras13'])){
                    $res=$_REQUEST['txtVerduras13'];
                 echo  $multi13=$res*$valor; }
				 ?>                     </td>
                    <td id="pr13"><?php $valor=9;
                    if(isset($_REQUEST['txtVerduras13'])){
                    $res=$_REQUEST['txtVerduras13'];
                 echo  $multil13=$res*$valor*4; }
				 ?>
                      
                    <td>5</td>
                    <td id="l13"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras13'])){
                    $res=$_REQUEST['txtVerduras13'];
                 echo  $multip13=$res*$valor; }
				 ?>                    </td>
                    <td id="li13"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras13'])){
                    $res=$_REQUEST['txtVerduras13'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>30</td>
                    <td id="h13"><?php $valor=30;
                    if(isset($_REQUEST['txtVerduras13'])){
                    $res=$_REQUEST['txtVerduras13'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi13"><?php $valor=30;
                    if(isset($_REQUEST['txtVerduras13'])){
                    $res=$_REQUEST['txtVerduras13'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td rowspan="2">Aceites y grasas</td>
                    <td>a) Sin proteina</td>
                    <td><input name="txtVerduras14" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras14'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>0</td>
                    <td id="p14"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras14'])){
                    $res=$_REQUEST['txtVerduras14'];
                 echo  $multi14=$res*$valor; }
				 ?>                      </td>
                    <td id="pr14"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras14'])){
                    $res=$_REQUEST['txtVerduras14'];
                 echo  $multil14=$res*$valor*4; }
				 ?>
                      
                    <td>5</td>
                    <td id="l14"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras14'])){
                    $res=$_REQUEST['txtVerduras'];
                 echo  $multip14=$res*$valor; }
				 ?>                      </td>
                    <td id="li14"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras14'])){
                    $res=$_REQUEST['txtVerduras14'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>0</td>
                    <td id="h14"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras14'])){
                    $res=$_REQUEST['txtVerduras14'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi14"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras14'])){
                    $res=$_REQUEST['txtVerduras14'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td>b) Con proteina</td>
                    <td><input name="txtVerduras15" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras15'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>3</td>
                    <td id="p15"><?php $valor=3;
                    if(isset($_REQUEST['txtVerduras15'])){
                    $res=$_REQUEST['txtVerduras15'];
                 echo  $multi15=$res*$valor; }
				 ?>                      </td>
                    <td id="pr15"> <?php $valor=0;
                    if(isset($_REQUEST['txtVerduras15'])){
                    $res=$_REQUEST['txtVerduras15'];
                 echo  $multil15=$res*$valor*4; }
				 ?>                </td>
                    <td>5</td>
                    <td id="pr15"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras15'])){
                    $res=$_REQUEST['txtVerduras15'];
                 echo  $multip15=$res*$valor; }
				 ?>                      </td>
                    <td id="l15"><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras15'])){
                    $res=$_REQUEST['txtVerduras15'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>3</td>
                    <td id="h15"><?php $valor=3;
                    if(isset($_REQUEST['txtVerduras15'])){
                    $res=$_REQUEST['txtVerduras15'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi15"><?php $valor=3;
                    if(isset($_REQUEST['txtVerduras15'])){
                    $res=$_REQUEST['txtVerduras15'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td rowspan="2">Azucares</td>
                    <td>a) Sin grasa</td>
                    <td><input name="txtVerduras16" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras16'])) {echo $_REQUEST['txtVerduras2'];}?>"/></td>
                    <td>0</td>
                    <td id="p16"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras16'])){
                    $res=$_REQUEST['txtVerduras16'];
                 echo  $multi16=$res*$valor; }
				 ?>                      </td>
                    <td id="pr16"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras16'])){
                    $res=$_REQUEST['txtVerduras16'];
                 echo  $multil16=$res*$valor*4; }
				 ?>                      </td>
                    <td>0</td>
                    <td id="l16"> <?php $valor=0;
                    if(isset($_REQUEST['txtVerduras16'])){
                    $res=$_REQUEST['txtVerduras16'];
                 echo  $multip16=$res*$valor; }
				 ?>                      </td>
                    <td id="li16"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras16'])){
                    $res=$_REQUEST['txtVerduras16'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>10</td>
                    <td id="h16"><?php $valor=10;
                    if(isset($_REQUEST['txtVerduras16'])){
                    $res=$_REQUEST['txtVerduras16'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi16"><?php $valor=10;
                    if(isset($_REQUEST['txtVerduras16'])){
                    $res=$_REQUEST['txtVerduras16'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td>b) Con grasa</td>
                    <td><input name="txtVerduras17" type="text"placeholder="" size="15" value="<?php  if (isset($_REQUEST['txtVerduras2'])) {echo $_REQUEST['txtVerduras17'];}?>"/></td>
                    <td>0</td>
                    <td id="p17"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras17'])){
                    $res=$_REQUEST['txtVerduras17'];
                 echo  $multi17=$res*$valor; }
				 ?>                     </td>
                    <td id="pr17"><?php $valor=0;
                    if(isset($_REQUEST['txtVerduras17'])){
                    $res=$_REQUEST['txtVerduras17'];
                 echo  $multil17=$res*$valor*4; }
				 ?>                      </td>
                    <td>5</td>
                    <td id="l17">  <?php $valor=5;
                    if(isset($_REQUEST['txtVerduras17'])){
                    $res=$_REQUEST['txtVerduras17'];
                 echo  $multip17=$res*$valor; }
				 ?>                    </td>
                    <td id=""li17><?php $valor=5;
                    if(isset($_REQUEST['txtVerduras17'])){
                    $res=$_REQUEST['txtVerduras17'];
                 echo  $multipl4=$res*$valor*9; }
				 ?></td>
                    <td>10</td>
                    <td id="h17"><?php $valor=10;
                    if(isset($_REQUEST['txtVerduras17'])){
                    $res=$_REQUEST['txtVerduras17'];
                 echo  $multip=$res*$valor; }
				 ?> </td>
                    <td id="hi17"><?php $valor=10;
                    if(isset($_REQUEST['txtVerduras17'])){
                    $res=$_REQUEST['txtVerduras17'];
                 echo  $multipl4=$res*$valor*4; }
				 ?></td>
                  </tr>
                  <tr>
                    <td>Total General</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </tbody>
              </table>
              <div align="right">
  <button class="btn btn-success"><i class="icon-large icon-ok"></i>Calcular </button>  
</li>
  </form>
</div>
<!-- /widget-content --></div>
            <p>&nbsp;</p>
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Dieta</h3>
  </div>
            <!-- /widget-header -->
<div class="widget-content">
              <table width="50%" class="table table-striped table-bordered">
                <thead>
                  <tr>
                  <th width="222">Dia</th>
                    <th width="222">Comida</th>
                    <th width="200">Platillo</th>
                    <th width="200">Acompañamiento</th>
                    <th width="200">Tortila/Pan</th>
                    <th width="200"> Bebida</th>
                    <th width="200"> Otro</th>
                  </tr>
                </thead>
<tbody>
                <?php    
                $id_menu=$rowtotal['id_menu'];

require ("../../conf/config.php");
      $query1 = "SELECT * FROM  nutricion.comida where id_menu=$id_menu";
      $resultados = $mysqli->query($query1);
      if (!$resultados) {
$message = 'Invalid query: ' . mysql_error() . " ";
$message .= 'Whole query: ' . $query;
die($message);
}
$dia="";
$row=0;


while ($rowTotal = $resultados->fetch_assoc())  {?>

                  <tr><center>
                  <?php if ($row==0) {   ?>
                 <td rowspan=3><?php echo $rowTotal["id_dia"]; ?></td>   
                    <?php }?>
                   <td><?php echo $rowTotal["id_comidas"]; ?></td>
                    <td><?php echo $rowTotal["PlatoPrinc"]; ?></td>
                    <td><?php echo $rowTotal["Acomp"]; ?></td>
                    <td><?php echo $rowTotal["TortiPan"]; ?></td>
                    <td><?php echo $rowTotal["Bebida"]; ?></td>
                    <td><?php echo $rowTotal["Otros"]; ?></td>
                  </center></tr>



                  <?php  $row++; if ($row==3) {$row=0;}   }   ?>
                </tbody>
              </table>
              <div align="right">
   <button class="btn btn-info"  onClick="parent.location='dietanueva.php'" >Nuevo</button>  
</li>
            </div>
            <!-- /widget-content --> 
            
</div>
            <p>&nbsp;</p>
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Comentarios</h3>
  </div>
            <!-- /widget-header -->
<div class="widget-content">
  <div align="right"><strong>
    <li> <td><p><textarea name="textarea" cols="200" rows="4" ></textarea></li> </td></p>
  </strong>
    <button class="btn btn-info"  onClick="parent.location='dietanueva.php'" >Nuevo</button>  
</li>
  </div>
            <!-- /widget-content --> 
            
</div>

<p>&nbsp;</p>

             <p>
  <!-- =CONTENT -->
  <?php
include ($nivel_dir."template/include/bottom.php");
?>
             </p>
