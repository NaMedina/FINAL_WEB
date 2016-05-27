<div id="wrap">
			<header>
				<div class="inner relative">
					<a class="logo"><img src="imagenes/logo2.png" width="180" height="63" alt="fresh design web"></a>
					<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
					<nav id="navigation">
						
						
						<ul id="main-menu">
							<li class="current-menu-item"><a href="ejemplo.php?id_us=10&t=1">Inicio</a></li>
							<li>
								<a href="ejemplo2.php?id_us=10&t=1">Registro Admin o Jefes</a>
							</li>
							<li><a href="depto.php?id_us=10&t=1">Departamentos</a></li>
							
							<?php 
							session_start();
							$tipo=$_SESSION["tipo"];
							if($tipo=="admin"){ ?>

							<li>
								<a href="plan_trab.php?id_us=10&t=1">Planes</a>
							</li>
							<?php } else { ?>
							<li>
								<a href="plan_trab.php?id_us=10&t=1">Catalogo</a>
							</li>
							<?php }?>


							<li><a href="semestre.php?id_us=10&t=1">Semestre</a></li>
							<li><a href="reportes_dep.php?id_us=10&t=1">Reportes</a></li>
							<li>
								<a href="cerrarsession.php"><img src="imagenes/sign-out.png" width="35" height="35"></a>
							</li>
						</ul>
											</nav>
					<div class="clear"></div>
				</div>
			</header>	
		</div> 