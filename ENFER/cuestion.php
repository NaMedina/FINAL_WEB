<?php

/*
-- =============================================
-- Author:    Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Formulario Cuestrionario
-- Parametros: .cuestion, #tipo
-- =============================================
*/
    
 ?>
 <?php include("includes/header.php"); 
 require_once("includes/conexion_database.php");?>

 <script type="text/javascript">

$(document).ready(function(){
  $(".cuestion").hide();//show()
    $("#tipo").change(function(){
        var tipo=$(this).val();
        var dataString = 'tipo='+ tipo;
        $.ajax({
            type: "POST",
            url: "ajax_encuest.php",
            data: dataString,
            cache: false,
        success: function(html){
          if(html==""){

          }else{
            $(".cuestion").show();//show()
          }
        $(".cuestion").html(html);
        }
        });
    });

  });
   </script>

<div id="cuerpo" style="height: 1520px">
<table id="estructura">
    <tr>
      <td id="menu">&nbsp; <a href="content.php">← Volver</a></td>
        <td id="pagina"><h2>&nbsp;Encuestas del proyecto</h2>
          <p>&nbsp; &nbsp;Resultados de Encuestas</p>
            </div>
           
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <select require="" name="tipo" id="tipo" style="padding: 5px; border-radius: 7px;">
                  
                  <?php if($persona==admin){ $a="selected"; $b="";} 
                  elseif($persona==Persona)  {$a=""; $b="selected"; } 
                  else {$a=""; $b=""; $c="selected"; }  ?>
                  <option <?php echo $c; ?>>Selecciona Empleado</option>
                  <?php echo $query1 = "SELECT DISTINCT * FROM datos, persona, diagnostico WHERE datos.id_persona=persona.id_persona and diagnostico.id_persona=datos.id_persona";

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

            <!-- /widget-header -->
            <div class="widget-content">
            <form method="post" action="guardar_cuest.php?id_per=<?php echo $per; ?>" autocomplete="on">
           
<table class="table table-striped table-bordered">
                <thead>
                  

                  <tr>
                  <th>No.</th>
                    <th align="center"> Preguntas </th>
                    <th align="center">Respuestas</th>
                  </tr>
                </thead>

  <tbody>
                 <?php 

      require ("includes/conexion_database.php");
       $mysqli->set_charset("utf8");
        
      $query1 = "SELECT * FROM  enfermeria.preguntas";
      //$resultados = mysql_query($query);
      $resultados = $mysqli->query($query1);
      if (!$resultados) {
    $message = 'Invalid query: ' . mysql_error() . " ";
    $message .= 'Whole query: ' . $query;
    die($message);
    }



      while ($rowTotal=$resultados->fetch_assoc())
      {
        ?>
  <tr>
          <td><?php echo $preg=$rowTotal["id_preguntas"]; ?></td>
      <td> <?php echo $rowTotal["pregunta"]; ?></td>

  <td>
          
          <?php
                $id_pregunta=$rowTotal["id_preguntas"];
                $query2="SELECT * FROM  enfermeria.respuestas where id_preguntas =$preg";
                $query3="SELECT * FROM  enfermeria.respuestas where id_preguntas = 16";
                //$resultados = mysql_query($query);
                $resultados2 = $mysqli->query($query2);
                while ($rowTotal2 = $resultados2->fetch_assoc())
                  { 
                $resp=$rowTotal2["id_Respuestas"];
          ?>
    <div class="control-group">
           <input name="respuesta<? echo $preg; ?>" type="checkbox" placeholder = "<? echo $resp; ?>">
            <?php
                echo $rowTotal2["Respuestas"]; 

             }
         
            ?>
        <input type="hidden"  name="pregunta<? echo $id_pregunta; ?>" value="<? echo $id_pregunta; ?>">
           
    </div>
                  <?php
          
      }
      
      ?>
                  
                
  
              </table>
                
           
              
            </div>
        <div class="form-actions">
        <button class="btn btn-success" name="boton"><i class="icon-medium icon-check"></i> Enviar</button>
          </li>
            </div>
    </form>



            </div>
          <!-- /widget --> 
          
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>

          </td>
    </tr>
  </table>
    </tbody>

<script src="../../js/jquery-1.7.2.min.js"></script>
  
<script src="../../js/bootstrap.js"></script>
<!--<script src="../../js/base.js"></script>-->

 


<?php require_once("includes/footer.php");?>
   