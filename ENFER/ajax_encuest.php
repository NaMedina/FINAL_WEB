<?php
/*
-- =============================================
-- Author:    Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Archivo que muestra la Encuesta
-- Parametros: Ajax de Encuesta
-- =============================================
*/
require_once("includes/conexion_database.php");
$id=$_POST['tipo'];

?>
<table class="table table-striped table-bordered">
       <thead>
         <tr>
           <th>No.</th>
           <th> Preguntas </th>
           <th>Respuestas</th>
         </tr>
       </thead>
       <body>
    <?php
         require_once("includes/conexion_database.php");
         $mysqli->set_charset("utf8");
          // consulta que muestra preguntas y respuestas
          $query1 = "SELECT cuestionario.id_preguntas, pregunta, respuestas.Respuestas FROM cuestionario, preguntas, respuestas, diagnostico, persona WHERE cuestionario.id_preguntas = preguntas.id_preguntas and cuestionario.id_Respuestas = respuestas.id_Respuestas and diagnostico.id_persona = persona.id_persona and persona.id_persona = $id";
            //$resultados = mysql_query ($query);
            $resultados = $mysqli->query($query1);

            // ciclo de mostrar
            if (!$resultados) {
            $message = 'Invalid query: ' . mysql_error() . " ";
            $message .= 'Whole query: ' . $query;
            die($message);
            }

            while ($rowTotal = $resultados->fetch_assoc())
            {
            ?>
          <tr>
                    <td><?php echo $preg=$rowTotal["id_preguntas"]; ?></td>
          <td> <?php echo $rowTotal["pregunta"]; ?></td>
                    <td> <?php echo $rowTotal["Respuestas"]; ?></td>      
                    </tr>
                  <?php
          
            }
      
    ?>
                  
              </table>  