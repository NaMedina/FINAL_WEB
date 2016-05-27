<?php
require ("../../conf/config.php");
$query0 = "select * from datos, persona where datos.id_persona=persona.id_persona";
			//$resultados = mysql_query ($query);
      $resultados0 = $mysqli->query($query0);
	  $rowTotal0 = $resultados0->fetch_assoc()
?>

<div class="main-inner">
    <div class="container">
      <div class="row">
               <!-- /span6 -->
        <div class="span6">
          <div class="widget widget-table action-table" style="width:100%">
          <div class="widget-header">
            <h3>Lista de Empleados</h3>   
              <a href="formulariocom.php?id_per=<?php echo $rowTotal0["id_persona"]; ?>">
              <button class="btn btn-info"  onClick="parent.location='formulariocom.php'" >Nuevo</button>
              </a>              </div>
                     
            </div>

              <table  class="table table-striped table-bordered">
                <thead>
                  <tr>
                  <th >No.</th>
                     <th> Nombre </th>
                     <th>Apellido</th>
                     <th>Sexo</th>
                     <th>Edad</th>
                     <th>Matricula</th>
                     <th>Ficha</th>
                     <th>Cuestionario</th>
                     <th>Cambios</th>
                     <!--<th>Graficas</th>-->
                     <th>Acciones</th>
                   
                   
                  </tr>
                </thead>

    <!--=============================================================-->
                <tbody>
                  <?php
				  
			require ("../../conf/config.php");
			$query1 = "SELECT * FROM datos, persona WHERE datos.id_persona=persona.id_persona";
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
                    <td><?php echo $rowTotal["id_persona"]; ?></td>
                    <td> <?php echo $rowTotal["Nombre"]; ?></td>
                    <td><?php echo $rowTotal["Apellido"]; ?> </td>
                    <td><?php echo $rowTotal["Sexo"]; ?> </td>
                    <td><?php echo $rowTotal["edad"]; ?> </td>
                    <td><?php echo $rowTotal["matricula"]; ?> </td>
                    <td><a href="../registro/fichacom.php?id_per=<?php echo $rowTotal["id_persona"]; ?>">ver</a></td>
                    <td><?php 
          $persona=$rowTotal["id_persona"];
          $query2 = "SELECT id_persona FROM diagnostico, cuestionario WHERE cuestionario.num_consulta=diagnostico.num_consulta
and diagnostico.id_persona=$persona";
			        //$resultados = mysql_query ($query);
                    $resultados2 = $mysqli->query($query2);
					 $rowTotal2 = $resultados->num_rows;
					
					if ($rowTotal2 == 0)
          {
            ?><a href="../cuestionario/preguntas1.php?id_per=<?php echo $rowTotal["id_persona"]; ?>"><?php
          }
          else
          {
            ?><a href="../cuestionario/resppreguntas1.php?id_per=<?php echo $rowTotal["id_persona"]; ?>"><?php
          }
          ?>Aplicar</a></td>
                     <td><a href="../registro/formulariocom2.php?id_per=<?php echo $rowTotal["id_persona"]; ?>">Actualizar</a></td>
                     <!--<td><a href="../graficas/graficaslineal.php?id_per=<?php echo $rowTotal["id_persona"]; ?>">Ver</a></td>--> 
                     <td><a href="../registro/formulariocom2.php?id_per=<?php echo $rowTotal["id_persona"]; ?>">Eliminar</a></td>                    
                     </tr>
                  <?php
            }
                  
       ?>           
                
                </tbody>
              </table>
                
               </div>
              
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

