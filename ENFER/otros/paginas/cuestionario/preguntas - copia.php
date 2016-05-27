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
                <tbody>
                  <?php
			require ("../../conf/config.php");
			$query1 = "SELECT * FROM  nutricion.preguntas";
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
<td>
				  <?php
          $id_pregunta=$rowTotal["id_preguntas"];
           $query2="SELECT * FROM  nutricion.respuestas where id_preguntas =$id_pregunta";
      //$resultados = mysql_query ($query);
      $resultados2 = $mysqli->query($query2);
				while ($rowTotal2 = $resultados2->fetch_assoc())
				{ 
$resp=$rowTotal2["id_Respuestas"];
          ?>
<div class="control-group">
           <input name="respuesta<? echo $preg; ?>" type="checkbox" id="checkbox" value = "<? echo$resp; ?>" >
           <input type="hidden"  name="pregunta<? echo $id_pregunta; ?>" value="<? echo $id_pregunta; ?>">
                                               <?php
         echo $rowTotal2["Respuestas"]; 

             }  
        ?>
</div>
        </td>
        
      
                    </tr>
                  <?php
					
			}
			
			?>
                  
                
                </tbody>
              </table>
                
              
              
            </div>
                     <div class="form-actions">
                                  <button class="btn btn-info">Enviar</button>
                                  
                                </div>
                                  </form>
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