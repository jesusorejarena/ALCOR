<?php 

	function encabezado($titulo)
	{
		session_start();

		if($_SESSION['activo']==true)
		{
			
		}
		else
		{
			header('Location: inicio.php');
		}

		echo "
		<!DOCTYPE html>
		<html lang='es'>

			<head>
			
				<meta charset='UTF-8'>
				<meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
				<link rel='icon' src='../img/icon.png'>
				<link rel='stylesheet' href='../css/estilos.css'>
				<link rel='stylesheet' href='../css/bootstrap-4.4.1/css/bootstrap.min.css'>
				<link rel='stylesheet' href='../css/ionicons/css/ionicons.min.css'>
				<link rel='stylesheet' href='../css/animate/animate.min.css'>
				<link rel='stylesheet' href='../css/wow/animate.css'>
				<title>$titulo</title>
				
			</head>
			
			<body class='m-0 p-0 bg-dark'>

				<!--Comienzo del nav-->
				
				<div class='row'>
					<div class='col-12 m-0 p-0'>
						<header class='header'>
							<nav class='navbar navbar-expand-md bg-success navbar-dark form-control-static fixed-top'>

								<!--Nombre de la app-->
								<a href='menu_principal.php' class='navbar-brand animated bounceInLeft px-5'><img src='../img/logo2.png' width='200'></a>

								<!--Menu de hamburguesa-->
								<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
										<span class='navbar-toggler-icon'></span>
								</button>

								<!--Botones de las secciones-->
								<div class='collapse navbar-collapse justify-content-end' id='collapsibleNavbar'>
									<ul class='navbar-nav'>
										<li class='nav-item btn btn-sm'>
											<a href='menu_principal.php' class='nav-link'>Inicio</a>
										</li>
										<li class='nav-item btn btn-sm'>
											<a href='emp_menu.php' class='nav-link'>Empresa</a>
										</li>
										<li class='nav-item btn btn-sm'>
											<a href='car_menu.php' class='nav-link'>Cargos</a>
										</li>
										<li class='nav-item btn btn-sm'>
											<a href='ado_menu.php' class='nav-link'>Empleados</a>
										</li>
										<li class='nav-item btn btn-sm'>
											<a href='edo_menu.php' class='nav-link'>Proveedores</a>
										</li>
										<li class='nav-item btn btn-sm'>
											<a href='pro_menu.php' class='nav-link'>Productos</a>
										</li>
										<li class='nav-item btn btn-sm'>
											<a href='for_menu.php' class='nav-link'>Formularios</a>
										</li>
										<li class='nav-item btn btn-sm btn-dark'>
											<a href='cerrar_session.php' class='nav-link'>Cerrar Sesión</a>
										</li>
									</ul>
								</div>
							</nav>
						</header>
					</div>
				</div>
				
				<!--Termina el nav-->

		";

	}

	function pie()
	{

		echo "
				<footer class='bg-dark'>
					<div class='container pt-5 bg-dark text-white justify-content-around'>
						<div class='row'>
							<div class='col-6'><img src='../img/logo2.png' width='300' class=''></div>
							<div class='col-6 text-right'>
								<p>Dirección: Barrio El Carmen, casa Nº 9-170 La Concordia, <br>
									San Cristóbal, Estado Táchira. Venezuela. <br>
									e-mail: comalcorca@gmail.com <br>
									Teléfonos: +58(424)-7128313 / +58(424)-7467809</p>
							</div>
						</div>
						<div class='row'>
							<div class='col-4'></div>
							<div class='col-4 text-center'>
								<p>Comercializadora Alcor, C.A. Rif J-40929480-3. <br>
									Diseñado y desarrollado por Jesus Orejarena y David Lozada</p>
								</div>
							<div class='col-4 text-right'>Iconos de redes sociales</div>
						</div>
					</div>
				</footer>
							
				<script src='../css/bootstrap-4.4.1/js/jquery-3.4.1.min.js'></script>
				<script src='../css/bootstrap-4.4.1/js/popper.min.js'></script>
				<script src='../css/bootstrap-4.4.1/js/bootstrap.min.js'></script>
				<script src='../css/wow/wow.min.js'></script>
				<script>new WOW().init();</script>

			</body>
				
		</html>
		";

	}

?>

