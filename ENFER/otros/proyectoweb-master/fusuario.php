<?php
// CREANDO MI CONEXION
include('config.php');
if (isset($_GET['id_us'])){
	$id=$_GET['id_us'];

$consulta = "SELECT * FROM nombre where id=$id";
$resultado = $mysqli->query($consulta);
$fila = $resultado->fetch_row();
$s="";
$id=$fila[0];
$nombre=$fila[1];
$edad=$fila[2];
$contrasena=$fila[3];
$tipo=$fila[4];
}else{
$s="s";
$id="";
$nombre="";
$edad="";
$contrasena="";
$tipo="";

}

?>
<div class="form-style-10">
		<h1>Modificar datos</h1>
		<form method="post" action="actualiza.php">
			
			<div class="inner-wrap">
		        <label>Nombre<input type="text" name="nombre" value="<?php echo $nombre?>" require=""></label>
		        <label>Edad <input type="number" name="edad" value="<?php echo  $edad?>" require=""></label>
		        <label>Contraseña <input type="password" name="contrasena" value="<?php echo $contrasena ?>" required=""></label>
		        <label>Tipo 
		        	<select require="" name="tipo"><?php if($tipo==admin){ $a="selected"; $b="";} 
		        	elseif($tipo==cliente)  {$a=""; $b="selected"; } 
		        	else {$a=""; $b=""; $c="selected"; }  ?>
						<option <?php echo $c; ?>>Elige una Opcion</option>
						<option value="admin" <?php echo $a; ?>>Admin</option>
						<option value="cliente" <?php echo $b; ?>>Cliente</option>
						</select>
		        </label>
		        <input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>">
		       
		    </div>
<center><button value="1" name="env" class="button"><span>Actualizar</span></button></center>
			
		</form>
					</div>