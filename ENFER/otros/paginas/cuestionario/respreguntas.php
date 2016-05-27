<div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          
          <!-- /widget -->
          
          <!-- /widget -->
          
          <!-- /widget --> 
        </div>
        <!-- /span6 -->
        <div class="span6">
          
          <!-- /widget -->
          
          <!-- /widget -->
          <div class="widget widget-table action-table" style="width:100%">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Cuestionario</h3>
            </div>
           
            <!-- /widget-header -->
            <div class="widget-content">
            <form method="post" action="guardar.php" autocomplete="on">
           
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                  <th>No.</th>
                    <th> Preguntas </th>
                    <th>Respuestas</th>
                  </tr>
                </thead>
                  <?php
			require ("../../conf/config.php");
			$query1 = "SELECT cuestionario.id_preguntas, pregunta, respuestas.Respuestas FROM cuestionario, preguntas, respuestas, diagnostico, persona
WHERE cuestionario.id_preguntas = preguntas.id_preguntas and cuestionario.id_Respuestas = respuestas.id_Respuestas
and cuestionario.num_consulta = diagnostico.num_consulta and diagnostico.id_persona = persona.id_persona and persona.id_persona = 1;";
			//$resultados = mysql_query ($query);
      $resultados = $mysqli->query($query1);
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
                  
                
                </tbody>
              </table>
                
              
              
            </div>
                     <div class="form-actions">
                     <button class="btn btn-success" name="boton"><i class="icon-medium icon-check
"></i> Enviar</button>
                                  </li>
                                </div>
                                  </form>
                <tbody>
            <!-- /widget-content --> 
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
  <!-- /main-inner --> 