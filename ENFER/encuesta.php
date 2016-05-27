 <?php 

/*
-- =============================================
-- Author:    Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Formulario Encuesta
-- Parametros: .encuesta, $tipo
-- =============================================
*/
 include("includes/header.php"); 
 require_once("includes/conexion_database.php");

 ?>

 <script type="text/javascript">

$(document).ready(function(){
  $(".encuesta").hide();//show()
    $("#tipo").change(function(){
        var tipo=$(this).val();
        var dataString = 'tipo='+ tipo;
        $.ajax({
            type: "POST",
            url: "ajax_encuest.php",
            data: dataString,
            //contentType: "text/dataString; charset=UTF-8",
            cache: false,
        success: function(html){
          if(html==""){

          }else{
            $(".encuesta").show();//show()
          }
        $(".encuesta").html(html);
        }
        });
    });

  });
   </script>
   
<div id="cuerpo" style="height: 950px">
<table id="estructura">
      <tr>
        <td id="menu">&nbsp; <a href="content.php">← Volver</a></td>
        <td id="pagina"><h2>&nbsp;Encuestas del proyecto</h2>
          <p>&nbsp; &nbsp;Resultados de Encuestas</p>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <select require="" name="tipo" id="tipo" style="padding: 5px; border-radius: 7px;">
                  
                  <?php if($persona==admin){ $a="selected"; $b="";} 
                  elseif($persona==Persona)  {$a=""; $b="selected"; } 
                  else {$a=""; $b=""; $c="selected"; }  ?>
                  <option <?php echo $c; ?>>Selecciona Empleado</option>
                  <?php 

                  $mysqli->set_charset("utf8");

                  echo $query1 = "SELECT * FROM datos, persona, diagnostico WHERE datos.id_persona=persona.id_persona and diagnostico.id_persona=datos.id_persona";

                  //$resultados = mysql_query ($query);
                      $resultados = $mysqli->query($query1);
                    if (!$resultados) { $message = 'Invalid query: ' . mysql_error() . " ";
                    $message .= 'Whole query: ' . $query; die($message);
                  }

                  while ($rowTotal = $resultados->fetch_assoc())
                  {
                    ?>
                    <option value="<?php echo $rowTotal["num_consulta"]; ?>"><?php echo $rowTotal["Nombre"]; ?></option>
                  <?php
                  }
                  ?>

                  
            </select><br><br>
          
          <form method="post" action="content.php" autocomplete="on">
          <div class="encuesta">
    <table class="table table-striped table-bordered">
       <thead>
         <tr>
           <th>No.</th>
           <th> Preguntas </th>
           <th>Respuestas</th>
         </tr>
       </thead>
       <tbody>
    <?php
          
         require ("includes/conexion_database.php");
         $mysqli->set_charset("utf8");

          // consulta que muestra preguntas y respuestas
          $query1 = "SELECT cuestionario.id_preguntas, pregunta, respuestas.Respuestas FROM cuestionario, preguntas, respuestas, diagnostico, persona WHERE cuestionario.id_preguntas = preguntas.id_preguntas and cuestionario.id_Respuestas = respuestas.id_Respuestas and diagnostico.id_persona = persona.id_persona and persona.id_persona = 1;";
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
              </div>
      
     
      <div class="form-actions" style="padding-left: 480px"><button class="btn btn-success" name="boton"><i class="icon-medium icon-check"></i> Regresar</button></div>
    </li>
    </td>
      </tr>
        </form> 
    </tbody>
    </table>
</body>
        
   
  
  <?php include("includes/footer.php"); 

  ?>

