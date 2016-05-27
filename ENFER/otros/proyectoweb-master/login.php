

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Sesión</title>
</head>
<body id="bodylog" >
		<h1 style="font-size: 50px; color: white; margin-bottom: -10px;"></h1>
		
		<div class="box">
		<h1 class="logtit">Iniciar Sesión</h1>
		<form method="post"action="valida.php"><?php
if (isset($_GET["nosession"])) echo "tu usuario y contraseña son incorrectos";

?>
		<input type="text" name="nombre" placeholder="Usuario" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" required/>
		  
		<input type="password" name="contrasena" placeholder="contraseña" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" required/>
		 
		<div style="margin-left: 120px;"><input type="submit" value="Entrar" id="btn2"/></div>
		 </form> 
		</div>  </div>
		</div>
	</div>
	</body>
</html>