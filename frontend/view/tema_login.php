<?php


function headerr($titulo)
{
	require_once("../../backend/class/instalacion.class.php");

	$obj_ins = new instalacion;
	$obj_ins->contador = $obj_ins->check();

	if (($obj_ins->count()) == 0) {
		header("Location: ins_ado_registrar.php");
	}

	echo "
		<!DOCTYPE html>
		<html lang='es'>
			<head>
				<meta charset='UTF-8' />
				<meta name='viewport' content='width=device-width, initial-scale=1.0' />
				<title>$titulo</title>
				<link rel='shortcut icon' href='' type='image/x-icon' />
				<link rel='stylesheet' href='../css/bootstrap-4.5.2/css/bootstrap.min.css' />
				<link rel='stylesheet' href='../css/fontawesome-free-5.15.0/css/all.min.css' />
				<link rel='stylesheet' href='../css/estilos.css' />
			</head>

			<body class='m-0 p-0'>

				<!-- screenUp -->
				<span class='screenUp' id='screenUp'><i class='fas fa-arrow-circle-up'></i></span>

				<!-- Nav -->
				<header>
					<nav class='navbar navbar-expand-lg navbar-dark bg-primary'>
						<!-- Nombre de la App -->
						<a href='ado_inicio.php' class='navbar-brand px-5'>
							<img src='../img/logo2.png' width='150'>
						</a>

						<!-- Menu de hamburguesa -->
						<button
							class='navbar-toggler'
							type='button'
							data-toggle='collapse'
							data-target='#navbarNavAltMarkup'
							aria-controls='navbarNavAltMarkup'
							aria-expanded='false'
							aria-label='Toggle navigation'
						>
							<span class='navbar-toggler-icon'></span>
						</button>

						<!-- Menu -->
						<div class='collapse navbar-collapse justify-content-end text-center' id='navbarNavAltMarkup'>
							<div class='navbar-nav'>
								<a class='nav-link active' href='inicio.php'>Inicio</a>
								<a class='nav-link active' href='inicio_empresa.php'> Empresa</a>
								<a class='nav-link active' href='inicio_servicio.php'> Servicio</a>
								<a class='nav-link active' href='inicio_producto.php'> Productos</a>
								<a class='nav-link active' href='inicio_contacto.php'> Contacto</a>
								<a class='nav-link active' href='ado_login.php'>Iniciar Sesión</a>
							</div>
						</div>
					</nav>
				</header>
		";
}

function footer()
{
	echo "
				<script src='../js/jquery-3.5.1.min.js'></script>
				<script src='../css/bootstrap-4.5.2/js/bootstrap.bundle.min.js'></script>
				<script src='../js/screenUp.js'></script>

			</body>
				
		</html>
		";
}
