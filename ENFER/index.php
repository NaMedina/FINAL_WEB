
 <!--
/*
-- =============================================
-- Author:		Nahum Ramirez Medina
-- Fecha de Creacions: 20/05/2016
-- Descripcion: Formulario Principal de Login
-- Parametros: method="post"
-- =============================================
*/
-->
<!DOCTYPE html>
<html lang="en">
 
<head>
	    <meta charset="utf-8">
	    <title>Administrador</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	    <meta name="apple-mobile-web-app-capable" content="yes"> 
		<link href="otros/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
		<link href="../css/font-awesome.css" rel="stylesheet">
	    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet" type="text/css">
		<link href="login.css" rel="stylesheet" type="text/css">

		<link href="basic.css" rel="stylesheet" type="text/css">
	
	<div id="cabeza">
		<td id="menu"></td>
		<h2 style="padding-left: 80px; padding-top: 1em">IMC Universidad de Navojoa</h2>
	</div>

</head>

<body>
 <div id="cuerpo">
	
<div class="cuadro-login">
	
	<div class="content clearfix">
		

		<form action="includes/valida.php" method="post">
		
			<h1>Acceso a miembros</h1>		
			
			<div class="login-borde">
				
				<p>Introduce tus datos:</p>
				
				<div class="field">
					<label for="username">Usuario</label>
					<input type="text" id="username" name="username" value="" placeholder="Usuario" class="login usuario-img" required="" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Contraseña:</label>
					<input type="password" id="password" name="password" value="" placeholder="Contraseña" class="login password-img" required="" />
				</div> <!-- /password -->
				
				</div> <br><!-- /login-fields -->
			
				<div class="accion-login">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4"/>
					<label class="choice" for="Field">Recordar Contraseña</label>
					<button class="boton btn btn-success btn-large">Iniciar sesión</button>
				</span>
			</div>
		</form>
			
	
</div> </div>
			<div class="login-extra">
				<a href="#">Olvide mi Contraseña</a>
						
			<script src="js/jquery-1.7.2.min.js"></script>
  
			<script src="js/bootstrap.js"></script>
			<!--<script src="../../js/base.js"></script>-->
			</div>
</div>
		</body>
			
<?php require_once("includes/footer.php"); ?>
	</html>	

<!--/**
 * 
 * @ Por Nahum Ramirez Medina
 * @version 1.0
 */-->