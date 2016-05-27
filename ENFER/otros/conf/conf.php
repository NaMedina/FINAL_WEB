
	<?php
$dbhost='localhost';
$dbusername='root';
$dbuserpass='dbimcsegundo';
$dbname = 'admision';

//////////////
/*
$dbhost='localhost';
$dbusername='root';
$dbuserpass='dbimcsegundo';
$dbname = 'admision';

$con=mysql_connect($dbhost,$dbusername,$dbuserpass);
 if (!$con) 
  die('Fallo la conexion con el servidor Mysql'.mysql_error());
  $db=mysql_select_db($dbname, $con);
  if(!$db)
  die('Fallo al selecionar la base de datos '.mysql_error());
  mysql_query("SET NAMES 'utf8'");
*/


$mysqli =@new mysqli($dbhost, $dbusername, $dbuserpass, $dbname);

// verificar la conexión 
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}



?>