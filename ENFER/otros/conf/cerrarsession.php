<?php
session_start();
     if ($_SESSION["k_username"])
        //session_unregister('id_usuario');
     //session_start();
     session_destroy();
     header ('Location: ../index.html');
?>
