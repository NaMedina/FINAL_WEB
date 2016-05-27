<?php
/*
-- =============================================
-- Author:    Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Archivo para guardar cuestionario
-- Parametros: Ajax de Cuestionario
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
          $query1 = "INSERT INTO cuestionario (id_cuestionario, id_preguntas, id_respuestas, id_consulta) 
VALUES ($preg, $resp, $id)";
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