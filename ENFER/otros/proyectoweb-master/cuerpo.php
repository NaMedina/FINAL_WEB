
	<div>
		
			<center>
			<table class=responstable>";
<thead>	<tr>
					<th>ID</th>
					<th>NOMBRE</th>
					<th>EDAD</th>
					<th>TIPO</th>
					<th>opciones</th>
					</tr>		

			<?php
include('config.php');

$consulta = "SELECT * FROM nombre";
$resultado = $mysqli->query($consulta);
    while ($fila = $resultado->fetch_row()) {
echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[4]."</td>
<td><center>
<a href=usuario.php?id_us=".$fila[0]."><img src=imagenes/edit.png width=35 height=35 /></a><a href=actualiza.php?borrar=".$fila[0]."><img src=imagenes/borrar.jpg width=35 height=35 /></a>
</center></td>";
echo "</tr>";

       
   
}
echo "</table>";

			?>


			<a href="usuario.php"><button type="submit" class="button" style="margin-bottom: 30%;"><span>Agregar</span></button></a>
				
		</div>