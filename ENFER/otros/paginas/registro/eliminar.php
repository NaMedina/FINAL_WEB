<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

require('../../conf/config.php');
$id_persona=$_GET[$rowTotal["id_per"]];

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

<?php  
include_once('config.php');
class NuevoRegistro 
{
  
  
  public $id;
  public $nombre;
  public $edad;
  public $contrasena;
  public $tipo;
  
  function __construct($id, $nombre, $edad, $contrasena, $tipo)
  {
  $this->id=$id;
  $this->nombre=$nombre;
  $this->edad=$edad;
  $this->contrasena=$contrasena;
  $this->tipo=$tipo;
  }
  public function actualiza()
  {
  $conexionSacadatos = new Conexion();
    $linkSacadatos = $conexionSacadatos->con();     
  $consulta = "UPDATE nombre SET nombre='$this->nombre', edad='$this->edad', contrasena='$this->contrasena', tipo='$this->tipo' where id=$this->id ";
      if ($linkSacadatos->query($consulta)){
        header("Location: datosper.php");
                      }
      else{
        header("Location: datosper.php");
        }
  }
  ?>