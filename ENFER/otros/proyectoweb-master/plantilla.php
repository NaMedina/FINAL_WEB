
	<!DOCTYPE html>
<html class="csstransforms no-csstransforms3d csstransitions"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Checador de Horas</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="css/normalize.css">    
	<link rel="stylesheet" href="css/select-css.css">
	<link rel="stylesheet" href="css/select-css-compat.css">
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <script src="../js/Chart.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/function.js"></script>

</head>
<body>

		<div id="wrap">
			<header>
				<div class="inner relative">
					<a class="logo"><img src="imagenes/logo2.png" width="180" height="63" alt="fresh design web"></a>
					<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
					<nav id="navigation">
						
						
						<ul id="main-menu">
							<li class="current-menu-item"><a href="principal.php?id_us=10&t=1">Inicio</a></li>
							<li>
								<a href="registrous.php?id_us=10&t=1">Registro Admin o Jefes</a>
							</li>
							<li><a href="depto.php?id_us=10&t=1">Departamentos</a></li>
							<li>
								<a href="plan_trab.php?id_us=10&t=1">Planes</a>
							</li>
							<li><a href="semestre.php?id_us=10&t=1">Semestre</a></li>
							<li><a href="reportes_dep.php?id_us=10&t=1">Reportes</a></li>
							<li>
								<a href="clases/cerrar.php"><img src="imagenes/sign-out.png" width="35" height="35"></a>
							</li>
						</ul>
											</nav>
					<div class="clear"></div>
				</div>
			</header>	
		</div> 

<!--
		<div id="cmenu">
		<h1 id="prin">UNAV</h1>
		<p id="cerses"><a href="clases/cerrar.php" id="cerrar">Cerrar Sesión</a></p>
		<ul id="menu">
				<center>
				<li><a href="reportes_dep.php?id_us=10&t=1" id="lm">Reportes</a></li>
				<li><a href="semestre.php?id_us=10&t=1" id="lm">Semestre</a></li>
				<li><a href="plan_trab.php?id_us=10&t=1" id="lm">Planes</a></li>
				<li><a href="depto.php?id_us=10&t=1" id="lm">Departamentos</a></li>
				<li><a href="registrous.php?id_us=10&t=1" id="lm">Registro</a></li>
				<li><a href="principal.php?id_us=10&t=1" id="lm">Inicio</a></li>
				</center>
				</ul></div> -->
	<div>
		
			<center><table class="responstable">
			<thead>
				<tr>
					<th>Usuario</th>
					<th>Nombre</th>
					<th>Modificar</th>
					<th>Empleados</th>
					<th>Tipo de Usuario</th>
					<th>Activo</th>
				</tr>
			</thead>
			<tbody>		<tr>
						<td>9800216</td>
						<td>Gustavo</td>
						<td><a href=modus.php?id_us=10&id=10&t=1><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>
						<td><a href=../empleados.php?id_us=10&id=10&t=1><span><span><center><img src=imagenes/lupa.png width=35 height=35 /></center></span></a></td>
						<td>Administrador</td>
						<td><center><img src=../imagenes/verde.png width=22 height=22></center></td>
						</tr>	<tr>
						<td>1130032</td>
						<td>Beyda</td>
						<td><a href=modus.php?id_us=10&id=11&t=1><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>
						<td><a href=../empleados.php?id_us=10&id=11&t=1><span><span><center><img src=imagenes/lupa.png width=35 height=35 /></center></span></a></td>
						<td>Jefe</td>
						<td><center><img src=../imagenes/verde.png width=22 height=22></center></td>
						</tr>	<tr>
						<td>9810001</td>
						<td>Daniel</td>
						<td><a href=modus.php?id_us=10&id=12&t=1><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>
						<td><a href=../empleados.php?id_us=10&id=12&t=1><span><span><center><img src=imagenes/lupa.png width=35 height=35 /></center></span></a></td>
						<td>Jefe</td>
						<td><center><img src=../imagenes/verde.png width=22 height=22></center></td>
						</tr>	<tr>
						<td>1234567</td>
						<td>Benjamin</td>
						<td><a href=modus.php?id_us=10&id=14&t=1><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>
						<td><a href=../empleados.php?id_us=10&id=14&t=1><span><span><center><img src=imagenes/lupa.png width=35 height=35 /></center></span></a></td>
						<td>Jefe</td>
						<td><center><img src=../imagenes/verde.png width=22 height=22></center></td>
						</tr>	<tr>
						<td>1130037</td>
						<td>Felipe</td>
						<td><a href=modus.php?id_us=10&id=15&t=1><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>
						<td><a href=../empleados.php?id_us=10&id=15&t=1><span><span><center><img src=imagenes/lupa.png width=35 height=35 /></center></span></a></td>
						<td>Jefe</td>
						<td><center><img src=../imagenes/verde.png width=22 height=22></center></td>
						</tr>	<tr>
						<td>9800217</td>
						<td>Rodrigo</td>
						<td><a href=modus.php?id_us=10&id=16&t=1><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>
						<td><a href=../empleados.php?id_us=10&id=16&t=1><span><span><center><img src=imagenes/lupa.png width=35 height=35 /></center></span></a></td>
						<td>Jefe</td>
						<td><center><img src=../imagenes/verde.png width=22 height=22></center></td>
						</tr>	<tr>
						<td>9800057</td>
						<td>Samuel </td>
						<td><a href=modus.php?id_us=10&id=17&t=1><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>
						<td><a href=../empleados.php?id_us=10&id=17&t=1><span><span><center><img src=imagenes/lupa.png width=35 height=35 /></center></span></a></td>
						<td>Jefe</td>
						<td><center><img src=../imagenes/verde.png width=22 height=22></center></td>
						</tr>	<tr>
						<td>1130041</td>
						<td>Lizeth</td>
						<td><a href=modus.php?id_us=10&id=18&t=1><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>
						<td><a href=../empleados.php?id_us=10&id=18&t=1><span><span><center><img src=imagenes/lupa.png width=35 height=35 /></center></span></a></td>
						<td>Administrador</td>
						<td><center><img src=../imagenes/verde.png width=22 height=22></center></td>
						</tr>	<tr>
						<td>9810028</td>
						<td>Román</td>
						<td><a href=modus.php?id_us=10&id=19&t=1><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>
						<td><a href=../empleados.php?id_us=10&id=19&t=1><span><span><center><img src=imagenes/lupa.png width=35 height=35 /></center></span></a></td>
						<td>Jefe</td>
						<td><center><img src=../imagenes/verde.png width=22 height=22></center></td>
						</tr>	<tr>
						<td>9800003</td>
						<td>Victor</td>
						<td><a href=modus.php?id_us=10&id=20&t=1><span><center><img src=imagenes/edit.png width=35 height=35 /></center></span></a></td>
						<td><a href=../empleados.php?id_us=10&id=20&t=1><span><span><center><img src=imagenes/lupa.png width=35 height=35 /></center></span></a></td>
						<td>Jefe</td>
						<td><center><img src=../imagenes/verde.png width=22 height=22></center></td>
						</tr></tbody>
			</table>
			<table><tr>
			<td><a href="pasah.php?id_us=10&t=1"><button type="submit" class="button" style="margin-bottom: 30%;"><span>Iniciar mes</span></button></a></td>
			</tr>
			</table>
			</center>
		</div>
	<div class="footer"><center>Copyright © 2015,Universidad de Navojoa. Todos los derechos reservados | Km. 13 Carretera Navojoa - Huatabampo - Navojoa, Sonora, México | 01 800 000 8628</center></div>
	</body>
</html>