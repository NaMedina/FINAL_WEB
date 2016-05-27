<?php
session_start();
if($_SESSION["tipo"]=="admin")
{
include("encabezado.php");

include("menu.php");

include("fusuario.php");

include("pie.php");

}
else
{

header("Location: login.php?valido=No existes");	
}

?>