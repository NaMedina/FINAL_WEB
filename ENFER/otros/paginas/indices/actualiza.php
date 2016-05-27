<?php  
include_once('../../config.php');
class NuevoRegistro 
{
  
  
  public $id;
  public $nombre;
  public $apellido;
  public $sexo;
  public $matricula;
  
  function __construct($id, $nombre, $Apellido, $sexo, $matricula)
  {
  $this->id=$id;
  $this->nombre=$nombre;
  $this->apellido=$apellido;
  $this->sexo=$sexo;
  $this->matricula=$matricula;
  }
  public function actualiza()
  {
  $consulta = "UPDATE FROM persona SET Nombre='$this->nombre', Apellido='$this->apellido', Sexo='$this->sexo', matricula='$this->matricula' where id=$this->id ";
      if ($linkSacadatos->query($consulta)){
        header("Location: datosper.php");
                      }
      else{
        header("Location: datosper.php");
        }
  }

  /*?>

// actualizo
$conexion = require('../../conf/config.php');
           
		   
		   
$sql= "UPDATE FROM persona (Nombre, Apellido, Sexo, matricula) 
SET ($persona, $matricula, $sexo)";
           //$resultado2 = $mysqli->query($sql);
	//$sql= "UPDATE FROM diagnostico, persona (Nombre, edad, Apellido, Sexo, matricula, imc, p_ideal, circ_cintura, complexion, cutaneo, Fecha, id_persona, sig_cita, area_brazo) 
	//SET ($imc, $p_ideal, $circ_cintura, $complex, $cutaneo, NOW(), $persona, '$cita', $area_brazo)";

// direciono 

	if ($resultado2 = $mysqli->query($sql))
              header ("Location: ../registro/fichacom.php?id_per=$persona;");
         else
               //echo mysql_error();

*/


?>
