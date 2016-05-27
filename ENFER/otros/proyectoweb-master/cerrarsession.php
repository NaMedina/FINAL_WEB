<?php
  session_start();
  unset($_SESSION["tipo"]); 
  session_destroy();
  header("Location: login.php");
 // exit;
?>