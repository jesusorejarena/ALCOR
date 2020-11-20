<?php

function check($menu, $cod_mod)
{
	require_once("../../backend/class/modulo.class.php");
	require_once("../../backend/class/permiso.class.php");

	$obj_mod = new modulo;
	$obj_per = new permiso;

	if ($_SESSION['cargo'] >= 2) {

		// busca los codigos del cargo en permisos
		$obj_per->cod_car = $_SESSION['cargo'];
		$obj_per->cod_mod = $cod_mod;
		$obj_per->puntero = $obj_per->getMenuVerify();
		$permiso = $obj_per->extractData();

		// el codigo del modulo del permiso se lo asigna al query en el modulo
		$obj_mod->cod_mod = $permiso['cod_mod'];
		$obj_mod->puntero = $obj_mod->getMenu();
		$modulo = $obj_mod->extractData();

		//compara el nombre del modulo con el nombre del modulo por parametro
		if ($modulo['nom_mod'] == $menu) {
		} else {
			header("Location: inicio.php");
		}
	}
}

function checkAdmin()
{
	if ($_SESSION['cargo'] == 1) {
	} else {
		header("Location: inicio.php");
	}
}

function headerr($titulo)
{
	ini_set("session.cookie_lifetime", "36000");

	session_start();

	if ($_SESSION['activo'] == true) {
		if (time() - $_SESSION["time"] < 28800) {
		} else {
			session_destroy();
		}

		require_once("../../backend/class/modulo.class.php");
		require_once("../../backend/class/permiso.class.php");

		$obj_mod = new modulo;
		$obj_per = new permiso;
	} else {
		header('Location: login.php');
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
								<a class='nav-link active' href='ado_inicio.php'>Inicio</a>
								";

	if ($_SESSION['cargo'] == 1) {
		echo "
								<a href='emp_modificar.php' class='nav-link active'>Empresa</a>
								<a href='rol_menu.php' class='nav-link active'>Roles</a>
								<a href='ado_menu.php' class='nav-link active'>Empleados</a>
								<a href='edo_menu.php' class='nav-link active'>Proveedores</a>
								<a href='pro_menu.php' class='nav-link active'>Productos</a>
								<a href='ven_menu.php' class='nav-link active'>Ventas</a>
								<a href='for_menu.php' class='nav-link active'>Formularios</a>
								<a href='menu_config.php' class='nav-link active'>Configuración</a>
												";
	} else {
		// verifica el cargo
		if ($_SESSION['cargo'] >= 2) {
			// asigna el cargo sesion al codigo de permiso
			$obj_per->cod_car = $_SESSION['cargo'];
			$obj_per->puntero = $obj_per->getMenu();

			//hace el ciclo
			while (($permiso = $obj_per->extractData()) > 0) {
				// asigna el codigo del modulo de permiso
				$obj_mod->cod_mod = $permiso['cod_mod'];
				$obj_mod->puntero = $obj_mod->getMenu();
				$modulo = $obj_mod->extractData();

				// extrae los nombres y url de la tabla modulo con el codigo del modulo de permiso

				echo "
							<li class='nav-item'>
								<a href='$modulo[url_mod]' class='nav-link active'>$modulo[nom_mod]</a>
							</li>
						";

				// termina el ciclo
			}
		}
	}

	echo "
								<a href='cerrar_sesion.php' class='nav-link text-light btn btn-sesion'><i class='fas fa-power-off'></i></a>
							</div>
						</div>
					</nav>
				</header>";
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