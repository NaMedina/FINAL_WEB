<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

require('../../conf/config.php');
$id_persona=$_GET[$rowTotal["id_per"]];
//$id_datos = $post['checkbox'];
//$eliminar="DELETE FROM (persona)";
//$resultados = $mysqli->query($eliminar);

       		 // realizamos el ciclo
       		 if (isset($_GET['id_persona'])) {
echo $person=$_GET['id_persona'];
  echo $accion = "DELETE FROM persona WHERE id_persona='$person'";
    $resultado = $mysqli->query($accion);
    header("Location:   datosper.php");
  }
       	 	    ?>
                <hreef = "../../index.php">
                <?php			


if($eliminar and $sql){
echo '<h1>El proceso de Eliminar se realizó correctamente</h1><br><a href="listapersonales.php.php">ir atrás</a>';
}
else{
echo '<h1>El proceso de Eliminar no se realizó correctamente</h1><br><a href="listapersonales.php.php">ir atrás</a>';
		}
?>