<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/*
-- =============================================
-- Author:    Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Clase guardar cuestionario
-- Parametros: $persona, person
-- =============================================
*/

//error_reporting (E_ALL ^ E_DEPRECATED);
 require('includes/conexion_database.php');

 if (isset($_GET["person"])) {
  $persona_selec = $_GET["person"];
 }
    
//selecciona desde la tabla diagnostico
//query1 = " SELECT num_consulta FROM diagnostico,persona WHERE diagnostico.id_persona=persona.id_persona and persona.id_persona=$person";
			//$resultados = mysql_query ($query);
      //$resultados = $mysqli->query($query1);
     // $rowTotal = $resultados->fetch_assoc();
	 // $consulta= $rowTotal["num_consulta"];


                  //insertamos en cuestionario la pregunta y respuesta
                  //$query = "INSERT INTO cuestionario (id_consulta, id_preguntas, id_Respuestas) VALUES ($c, $id_preguntas, $id_respuestas)";
                  //$resultados = $mysqli->query($query);
    //INSERT INTO cuestionario (id_preguntas, id_Respuestas, id_consulta)VALUES ($preg,$resp,$id) 
                  

          for ($i = 1; $i <= 10; $i++) {  

	
       		 // realizamos el ciclo
       	   $id_preguntas=$_POST['pregunta'.$i];
           $id_respuestas = $_POST['respuesta'.$i];
				   $sql="INSERT INTO cuestionario (id_consulta, id_preguntas, id_Respuestas) 
           VALUES ($c, $id_preguntas, $id_respuestas)";
           $resultado = $mysqli->query($sql);
            //INSERT INTO cuestionario (num_consulta, id_preguntas, id_Respuestas) VALUES ($consulta, $id_preguntas, $id_respuestas)
   		}
	
		       ?>
                                <?php
								


 if ($resultado =! 0){
               header ("Location: content.php");
         }else{
               echo mysql_error();
			 }
?>