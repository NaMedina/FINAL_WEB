

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

/*
-- =============================================
-- Author:      Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Formulario Eliminar
-- Parametros: $persona_selec, id_per, $person, $resultadods, $accionds, $resultado
$accion, $resultadod, $acciond, $accion, $accion1,  $resultado1
-- =============================================
*/

include_once('includes/conexion_database.php');
$persona_selec = $_GET["id_per"];
//$mysqli->set_charset("utf8");

       		 // realiza el ciclo
      if (isset($_GET["id_per"])) 
        {
            $person=$_GET['id_per'];
            echo $accionds = "DELETE FROM diagnostico WHERE id_persona=$person";
            $resultadods = $mysqli->query($accionds);
             echo $accion = "DELETE FROM datos WHERE id_persona=$person";
            $resultado = $mysqli->query($accion);
            echo $acciond = "DELETE FROM persona WHERE id_persona=$person";
            $resultadod = $mysqli->query($acciond);

            $accion1 = "SELECT * FROM persona WHERE id_persona=$person";
            $resultado1 = $mysqli->query($accion1);
            
            if ($resultado1->num_rows == 0) {
                header("Location:   content.php");
            }else{
            header("Location:   index.php");
        }
    }
?>
                
                
                <?php			


if($accion and $persona_selec){
echo '<h1>El proceso de Eliminar se realizó correctamente</h1><br><a href="content.php">ir atrás</a>';
}
else{
echo '<h1>El proceso de Eliminar no se realizó correctamente</h1><br><a href="content.php">ir atrás</a>';
		}
?>