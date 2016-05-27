    <div class="main-inner">
    <div class="container">
      <div class="row">
        
        <!-- /span6 -->
        <div class="span6">
          
          <!-- /widget -->
          
          <!-- /widget -->
          <div class="widget widget-table action-table" style="width:100%">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Masa libre de grasa (Mujer)</h3>
            </div>
           
            <!-- /widget-header -->
            <div class="widget-content">
           <?php
      // if($sexo=="Mujer"){
       ?>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Edad</th>
                    <th> 5 </th>
                    <th>10</th>
                    <th> 15 </th>
                    <th>25</th>
                    <th>50 </th>
                    <th>75</th>
                    <th>85</th>
                    <th>90 </th>
                    <th>95</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
      require ("../../conf/config.php");
      $query1 = "SELECT * FROM nutricion.percentiles_mujer;";
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
                    <td><?php echo $rowTotal["edad_1"]."-".$rowTotal["edad_2"]; ?></td>
          <td> <?php echo $rowTotal["5"]; ?></td>
                    <td> <?php echo $rowTotal["10"]; ?></td>
                    <td> <?php echo $rowTotal["15"]; ?></td>
                    <td> <?php echo $rowTotal["25"]; ?></td>
                    <td> <?php echo $rowTotal["50"]; ?></td>
                    <td> <?php echo $rowTotal["75"]; ?></td>
                    <td> <?php echo $rowTotal["85"]; ?></td>
                    <td> <?php echo $rowTotal["90"]; ?></td>
                    <td> <?php echo $rowTotal["95"]; ?></td>
                    </tr>
                  <?php
          
      }
      
      
      ?>
                        
                
                </tbody>
              </table>
                
              <?php
        //}else{
        ?>
      </div>
    </div>
  </div>
            </div>
            <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 





      <div class="main-inner">
    <div class="container">
      <div class="row">
        
        <!-- /span6 -->
        <div class="span6">
          
          <!-- /widget -->
          
          <!-- /widget -->
          <div class="widget widget-table action-table" style="width:100%">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Masa libre de grasa (Hombre)</h3>
            </div>
           
            <!-- /widget-header -->
            <div class="widget-content">
           <?php
      // if($sexo=="Mujer"){
       ?>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Edad</th>
                    <th> 5 </th>
                    <th>10</th>
                    <th> 15 </th>
                    <th>25</th>
                    <th>50 </th>
                    <th>75</th>
                    <th>85</th>
                    <th>90 </th>
                    <th>95</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
      require ("../../conf/config.php");
      $query1 = "SELECT * FROM nutricion.percentiles_hombre;";
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
                    <td><?php echo $rowTotal["edad_1"]."-".$rowTotal["edad_2"]; ?></td>
          <td> <?php echo $rowTotal["5"]; ?></td>
                    <td> <?php echo $rowTotal["10"]; ?></td>
                    <td> <?php echo $rowTotal["15"]; ?></td>
                    <td> <?php echo $rowTotal["25"]; ?></td>
                    <td> <?php echo $rowTotal["50"]; ?></td>
                    <td> <?php echo $rowTotal["75"]; ?></td>
                    <td> <?php echo $rowTotal["85"]; ?></td>
                    <td> <?php echo $rowTotal["90"]; ?></td>
                    <td> <?php echo $rowTotal["95"]; ?></td>
                    </tr>
                  <?php
          
      }
      
      
      ?>
                        
                
                </tbody>
              </table>
                
              <?php
        //}else{
        ?>
         </div>
    </div>
  </div>
            </div>
            <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 