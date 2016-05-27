<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="<?php echo $nivel_dir; ?>css/header.css" rel="stylesheet">
<link href="<?php echo $nivel_dir; ?>css/boot/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $nivel_dir; ?>css/boot/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php echo $nivel_dir; ?>css/style.css" rel="stylesheet">
<title>Administrador de Enfermería</title>

<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a>
                    <a class="brand" href="<?php echo $nivel_dir;?>index.html">Indice de Masa Corporal UNAV</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="<?php echo $nivel_dir;?>conf/cerrarsession.php" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Cerrar Sesion <b class="caret"></b></a>
            
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Buscar">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
</head>