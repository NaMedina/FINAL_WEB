<?php
$mysqli = new mysqli("localhost", "root", "", "ejemplo");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}



?>