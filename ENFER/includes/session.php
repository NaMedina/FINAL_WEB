<?php
session_start();
     if (isset($_SESSION["k_username"])){
       //echo "La sesión existe ...";
     	} else {
     header ('Location: ../index.php');
     }
?>