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

function checkAdminOrClient($cargo)
{
	if ($_SESSION['cargo'] == $cargo) {
	} else {
		header("Location: usu_inicio.php");
		echo "Chao";
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
				<link rel='stylesheet' href='../css/bootstrap/css/bootstrap.min.css' />
				<link rel='stylesheet' href='../css/fontawesome-free/css/all.min.css' />
				<link rel='stylesheet' href='../css/estilos.css' />
				<script src='../js/jquery.min.js'></script>
			</head>

			<body>

				<!-- Comienza nav superior -->

				<!-- Comienza el nav -->

				<div class='bg-light container-fluid'>
					<div class='row navbar navbar-light align-items-center'>
						<div class='col-12 d-flex justify-content-start'>
							<a class='button-toggler py-2' type='button'>
								<i id='bars' class='fas fa-bars' style='font-size: 24px'></i>
							</a>
						</div>
					</div>
				</div>

				<!-- Termina el nav -->

				<!-- Termina nav superior -->

				<!-- Comienza sideBar -->
				<div id='sideBar' class='bg-light shadow-lg'>
					<div class='container-fluid mt-2'>
						<div class='row'>
							<div class='col-12'>
								<a href='usu_inicio.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-home'></i></div>
									<div class='col-9 px-0 text-left'>Inicio</div>
								</a>
					";

	if ($_SESSION['cargo'] == 1) {
		echo "
								<a href='emp_modificar.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-store'></i></div>
									<div class='col-9 px-0 text-left'>Empresa</div>
								</a>
								<a href='rol_menu.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-users-cog'></i></div>
									<div class='col-9 px-0 text-left'>Roles</div>
								</a>
								<a href='usu_menu.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-users','></i></div>
									<div class='col-9 px-0 text-left'>Empleados</div>
								</a>
								<a href='pre_menu.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-tshirt','></i></div>
									<div class='col-9 px-0 text-left'>Prendas</div>
								</a>
								<a href='edo_menu.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-truck','></i></div>
									<div class='col-9 px-0 text-left'>Proveedores</div>
								</a>
								<a href='pro_menu.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-shopping-basket'></i></div>
									<div class='col-9 px-0 text-left'>Productos</div>
								</a>
								<a href='pedidos.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-receipt','></i></div>
									<div class='col-9 px-0 text-left'>Pedidos</div>
								</a>
								<a href='for_menu.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-clipboard-list'></i></div>
									<div class='col-9 px-0 text-left'>Formularios</div>
								</a>
								<a href='menu_config.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-server'></i></div>
									<div class='col-9 px-0 text-left'>Auditoria y Respaldo</div>
								</a>
				";
	} else if ($_SESSION['cargo'] == 2) {
		echo "
								<a href='mis_pedidos.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-clipboard-list'></i></div>
									<div class='col-9 px-0 text-left'>Mis pedidos</div>
								</a>
								<a href='realizar_pedido.php' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='fas fa-receipt'></i></div>
									<div class='col-9 px-0 text-left'>Realizar pedido</div>
								</a>
				";
	} else {
		// verifica el cargo
		if ($_SESSION['cargo'] >= 3) {
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
								<a href='$modulo[url_mod]' class='row text-dark py-2 my-2 border-bottom'>
									<div class='col-3 text-center'>
										<i class='$modulo[ico_mod]'></i>
									</div>
									<div class='col-9 px-0 text-left'>$modulo[nom_mod]</div>
								</a>
				";

				// termina el ciclo
			}
		}
	}

	echo "
								<a href='cerrar_sesion.php' class='row text-dark py-2 my-2'>
									<div class='col-3 text-center'>
										<i class='fas fa-sign-out-alt ism'></i>
									</div>
									<div class='col-9 px-0 text-left'>Cerrar sesión</div>
								</a>
								<div class='row text-dark text-center pt-4'>
									<div class='col-12'>
										<a href='usu_inicio.php'>
											<img
												loading='lazy'
												class='img-fluid'
												src='../img/Logo-Cuadrado.png'
												alt=''
												width='200rem'
											/>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Termina sideBar -->

				<span class='screenUp' id='screenUp'><i class='fas fa-chevron-up'></i></span>
			";
}

function footer()
{
	echo "
				<script src='../js/validaciones.js'></script>
				<script src='../css/bootstrap/js/bootstrap.bundle.min.js'></script>
				<script src='../js/screenUp.js'></script>
				<script src='../js/sideBar.js'></script>
				<script src='../js/showPassword.js'></script>
				
			</body>
				
		</html>
		";
}
