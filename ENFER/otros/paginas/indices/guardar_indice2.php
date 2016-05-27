<?php 

$persona=$_GET["per"];
$edad=$_REQUEST['edad'];
$talla=$_REQUEST['talla'];
$peso=$_REQUEST['peso'];
$cintura=$_REQUEST['circ_cintura'];
$cadera=$_REQUEST['circ_cadera'];
$muneca=$_REQUEST['circ_muneca'];
$brazo=$_REQUEST['media_brazo'];
$cutaneo=$_REQUEST['plie_cutaneo'];
$cita=$_REQUEST['plie_cutaneo1'];
$matricula=$_REQUEST['matricula'];
$sexo=$_REQUEST['Sexo'];




// calculo de indices
$imc= $peso / $talla * $talla;
if($imc<19.9){$r_imc="DESNUTRICION";}
elseif($imc>20 && $imc<25 ){$r_imc="NORMAL";}
elseif($imc>25 && $imc<30 ){$r_imc="SOBREPESO";}
elseif($imc>30 && $imc<35 ){$r_imc="OBESIDAD I";}
elseif($imc>35 && $imc<40 ){$r_imc="OBESIDAD II";}
elseif($imc>40){$r_imc="OBESIDAD III";}


if($sexo=="Mujer"){
$p_ideal= $edad * .17 + ($talla - 100) - 7.71;
}else{
$p_ideal= $edad * .17 + ($talla - 100) - 6.78;
}


$circ_cintura= $cintura / $cadera;
if($sexo=="Mujer"){
if($circ_cintura>= 0.8){$r_cintura="ANDROIDE";}
	else {$r_cintura="GINECOIDE";}
}else{
if($circ_cintura>= 1.0){$r_cintura="ANDROIDE";}
	else {$r_cintura="GINECOIDE";}
}


$complex= $talla/$muneca;
if($complex<=16.5){$r_complex="CHICA ";}
elseif($complex>16.5 && $complex<19.1){$r_complex="MEDIANA";}
elseif($complex>=19.1){$r_complex="GRANDE";}

if($cutaneo>0 && $cutaneo<5) { $tricipital="Magro- depleción de masa grasa";}
elseif ($cutaneo>5 && $cutaneo<=15){ $tricipital="Masa grasa abajo del promedio-riesgo"; }
elseif ($cutaneo>15 && $cutaneo<=75){ $tricipital="Masa grasa promedio"; }
elseif ($cutaneo>75 && $cutaneo<=85){ $tricipital="Masa grasa arriba del promedio-riesgo"; }
elseif ($cutaneo>85){ $tricipital="Exceso de masa grasa-obesidad"; }

if($sexo=="Mujer"){
$area_brazo= ((($brazo - ( 3.1416 * $cutaneo))^2)/(4*3.1416)) -6.5;
if($area_brazo<=5){$r_area="Baja muscularidad – disminución";}
elseif($area_brazo>5 && $area_brazo<=15){$r_area="Masa muscular abajo del promedio";}
elseif($area_brazo>15 && $area_brazo<=85){$r_area="Masa muscular promedio";}
elseif($area_brazo>85 && $area_brazo<=95){$r_area="Masa muscular arriba del promedio";}
elseif($area_brazo>95){$r_area="Masa muscular alta";}
}
else
{
$area_brazo= ((($brazo - ( 3.1416 * $cutaneo))^2)/(4*3.1416)) -10;
if($area_brazo<=5){$r_area="Baja muscularidad – disminución";}
elseif($area_brazo>5 && $area_brazo<=15){$r_area="Masa muscular abajo del promedio";}
elseif($area_brazo>15 && $area_brazo<=85){$r_area="Masa muscular promedio";}
elseif($area_brazo>85 && $area_brazo<=95){$r_area="Masa muscular arriba del promedio";}
elseif($area_brazo>95){$r_area="Masa muscular alta";}
}


// insert de  los indices
$conexion = require('../../conf/config.php');
           
		   
		   
$sql= "INSERT INTO diagnostico (imc, p_ideal, circ_cintura, complexion, cutaneo, Fecha, id_persona, sig_cita, area_brazo) 
VALUES ($imc, $p_ideal, $circ_cintura, $complex, $cutaneo, NOW(), $persona, '$cita', $area_brazo)";
           //$resultado2 = $mysqli->query($sql);


// direciono 


	if ($resultado2 = $mysqli->query($sql))
              header ("Location: ../registro/fichacom.php?id_per=$persona;");
         else
               //echo mysql_error();




?>
