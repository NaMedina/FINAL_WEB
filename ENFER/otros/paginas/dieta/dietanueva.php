<?php
$nivel_dir="../../";
if(isset($_POST["env"])){
$pla = $_POST["txtPlatillo"];
$aco = $_POST["txtAcompa"];
$tor = $_POST["txtTorilla"];
$beb = $_POST["txtBebida"];
$otr = $_POST["txtOtro"];
$dia = $_POST["txtDia"];
$com = $_POST["txtDia"];
}
//require_once("class/session.class.php");
include($nivel_dir.'template/include/head.php');
include($nivel_dir.'template/include/top.php');
include($nivel_dir.'template/include/side.php');
?>
<!-- CONTENT -->
<h3>&nbsp;</h3>
<p><!-- /widget-content --></p>

<div class="widget widget-table action-table">
<form>
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Dieta Nueva</h3>
  </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table width="500" class="table table-striped table-bordered">
                <thead>
                  <tr>
                  <th width="98" nowrap="nowrap">Dia</th>
                    <th width="98" nowrap="nowrap">Comida</th>
                    <th width="108" nowrap="nowrap">Platillo</th>
                    <th width="122" nowrap="nowrap">Acompañamiento</th>
                    <th width="108" nowrap="nowrap">Tortila/Pan</th>
                    <th width="108" nowrap="nowrap"> Bebida</th>
                    <th width="112" nowrap="nowrap"> Otro</th>
                  </tr>
                </thead>
<tbody>
<tr><center>
                 <td rowspan=3 nowrap="nowrap"><select name="txtDia" class="" id="txtDia" required>
          <option value=''>Seleccione</option>
          <option value='Domingo'>Domingo</option>
          <option value='Lunes'>Lunes</option>
          <option value='Martes'>Martes</option>
          <option value='Miercoles'>Miercoles</option>
          <option value='Jueves'>Jueves</option>
          <option value='Viernes'>Viernes</option>
          <option value='Sabado'>Sabado</option>
          </select>
                 </td> 
                   <td nowrap="nowrap"><select class="" id="txtComida" name="txtDia" required>
          <option value=''>Seleccione</option>
          <option value='Desayuno '>Desayuno</option>
          <option value='Comida'>Comida</option>
          <option value='Cena'>Cena</option>
          </select></td>
                    <td nowrap="nowrap"><input id="platillo" name="txtPlatillo" type="text"placeholder=""/></td>
                    <td nowrap="nowrap"><input id="acompa" name="txtAcompa" type="text"placeholder=""/></td>
                    <td nowrap="nowrap"><input id="tortilla" name="txtTortilla" type="text"placeholder=""/></td>
                    <td nowrap="nowrap"><input id="bebida" name="txtBebida" type="text"placeholder=""/></td>
                    <td nowrap="nowrap"><input id="otro" name="txtOtro" type="text"placeholder=""/></td>
                  </center></tr>
                </tbody>
              </table>
  </div>
            <!-- /widget-content --> 
</div>
<div align="right">
<span class="btn btn-success">
<?
$link = mysql_connect("localhost", "root");
   mysql_select_db("nutricion");
      $insertar = "INSERT INTO comida (PlatoPrinc, Acomp, TortiPan, Bebida, Otros, id_dia, id_comidas) 
          VALUES ('".$_POST['txtPlatillo'].' , '.$_POST['txtAcompa'].', '.$_POST['txtTortilla'].', '.$_POST['txtBebida'].', '.$_POST['txtOtro'].', '.$_POST['txtDia'].', '.$_POST['txtComida']."')";
      mysql_query($insertar,$conexion);
?>
</span>
<button class="btn btn-success" name="env"><i class="icon-small icon-print
"></i> 
  Guardar </button>  
</li>

</div>
</form>
<p>&nbsp;</p>

             <p>
  <!-- =CONTENT -->
  <?php
include ($nivel_dir."template/include/bottom.php");
?>
             </p>
