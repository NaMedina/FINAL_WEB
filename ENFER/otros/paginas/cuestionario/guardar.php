<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
//error_reporting (E_ALL ^ E_DEPRECATED);
$conexion = require('../../conf/config.php');
$per=$_GET["id_per"];

$query1 = " SELECT num_consulta FROM diagnostico,persona WHERE diagnostico.id_persona=persona.id_persona and persona.id_persona=$per";
			//$resultados = mysql_query ($query);
      $resultados = $mysqli->query($query1);
      $rowTotal = $resultados->fetch_assoc();
	  $consulta= $rowTotal["num_consulta"];



$query = "INSERT INTO cuestionario (num_consulta, id_preguntas, id_Respuestas) VALUES (1, $id_preguntas,$id_respuestas)";
$resultados = $mysqli->query($query);


for ($i = 1; $i <= 10; $i++) {  

	
       		 // realizamos el ciclo
       	   $id_preguntas=$_POST['pregunta'.$i];
           $id_respuestas = $_POST['respuesta'.$i];
				   $sql="INSERT INTO cuestionario (num_consulta, id_preguntas, id_Respuestas) VALUES ($consulta, $id_preguntas, $id_respuestas)";
           $resultado = $mysqli->query($sql);

   		}
	
		       ?>
                                <?php
								


 if ($resultado =! 0){
               header ("Location: ../registro/datosper.php?num_con=$consulta");
         elseif
               echo mysql_error();
			 }

?>