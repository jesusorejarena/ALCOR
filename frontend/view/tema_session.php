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
			header("Location: usu_inicio.php");
		}
	}
}

function checkAdmin()
{
	if ($_SESSION['cargo'] == 1) {
	} else {
		header("Location: usu_inicio.php");
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
		header('Location: usu_login.php');
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

			<body>

			<!-- Comienza el nav -->

				<div class='bg-light container-fluid px-4 px-xl-5'>
					<div class='container'>
						<div class='row'>
							<div class='col-12'>
								<header class='header'>
									<nav class='navbar navbar-expand-xl navbar-light form-control-static'>

										<!--Menu de hamburguesa-->
										<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
											<span class='navbar-toggler-icon'></span>
										</button>

										<!--Nombre de la app-->
										<a href='inicio.html' class='navbar-brand'><img class='img-fluid' src='' alt='Logo de Fasty' width='100rm'></a>

										<!--Botones de las secciones-->
										<div class='collapse navbar-collapse justify-content-end' id='collapsibleNavbar'>
											<ul class='navbar-nav'>
												<li class='nav-item m-1 text-center'><a class='nav-link active' href='usu_inicio.php'>Inicio</a></li>
						";

	if ($_SESSION['cargo'] == 1) {
		echo "
								<li class='nav-item m-1 text-center'><a href='emp_modificar.php' class='nav-link active'>Empresa</a></li>
								<li class='nav-item m-1 text-center'><a href='rol_menu.php' class='nav-link active'>Roles</a></li>
								<li class='nav-item m-1 text-center'><a href='usu_menu.php' class='nav-link active'>Usuarios</a></li>
								<li class='nav-item m-1 text-center'><a href='pre_menu.php' class='nav-link active'>Prendas</a></li>
								<li class='nav-item m-1 text-center'><a href='edo_menu.php' class='nav-link active'>Proveedores</a></li>
								<li class='nav-item m-1 text-center'><a href='pro_menu.php' class='nav-link active'>Productos</a></li>
								<li class='nav-item m-1 text-center'><a href='ven_menu.php' class='nav-link active'>Ventas</a></li>
								<li class='nav-item m-1 text-center'><a href='for_menu.php' class='nav-link active'>Formularios</a></li>
								<li class='nav-item m-1 text-center'><a href='menu_config.php' class='nav-link active'>Configuración</a></li>
												";
	} else if ($_SESSION['cargo'] == 2) {
		echo "
								<li class='nav-item m-1 text-center'><a href='usu_pedidos.php' class='nav-link active'>Pedidos</a></li>
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
											<li class='nav-item m-1 text-center'>
												<a href='$modulo[url_mod]' class='nav-link active'>$modulo[nom_mod]</a>
											</li>
										";

				// termina el ciclo
			}
		}
	}

	echo "
												<li class='nav-item m-1 text-center'>
													<a href='cerrar_sesion.php' class='btn btn-primary'>
														<i class='fas fa-power-off'></i>
													</a>
												</li>
											</ul>
										</div>
									</nav>
								</header>
							</div>
						</div>
					</div>
				</div>

				<!-- Termina el nav -->

				<!-- Comienza onda -->

				<div style='height: 70px; overflow: hidden;'><svg viewBox='0 0 500 150' preserveAspectRatio='none' style='height: 100%; width: 100%;'>
						<path d='M0.00,49.98 C149.99,150.00 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z' style='stroke: none; fill: #f8f9fa;'></path>
					</svg>
				</div>

				<!-- Termina onda -->

				<span class='screenUp' id='screenUp'><i class='fas fa-chevron-up'></i></span>
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