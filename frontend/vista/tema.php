<?php 

	function encabezado($titulo)
	{
		session_start();

		if($_SESSION['activo']==true)
		{
			
			require_once("../../backend/clase/modulo.class.php");
			require_once("../../backend/clase/opcion.class.php");
			require_once("../../backend/clase/cargo.class.php");

			$obj_mod = new modulo;
			$obj_opc = new opcion;
			$obj_car = new cargo;
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
				<link rel='stylesheet' href='../css/bootstrap-4.4.1/css/bootstrap.css'>
				<link rel='stylesheet' href='../css/ionicons/css/ionicons.min.css'>
				<link rel='stylesheet' href='../css/animate/animate.min.css'>
				<link rel='stylesheet' href='../css/wow/animate.css'>
				<title>$titulo</title>
				
			</head>
			
			<body class='m-0 p-0 bg-danger'>

				<div class='container-fluid'>
					<div class='row'>
						<div class='col-12 m-0 p-0'>
							<header class='header'>
								<nav class='navbar navbar-expand-md bg-primary navbar-dark form-control-static fixed-top'>

									<!--Nombre de la app-->
									<a href='inicio.php' class='navbar-brand animated bounceInLeft px-5'><img src='../img/logo2.png' width='200'></a>

									<!--Menu de hamburguesa-->
									<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
											<span class='navbar-toggler-icon'></span>
									</button>

									<!--Botones de las secciones-->
									<div class='collapse navbar-collapse justify-content-end' id='collapsibleNavbar'>
										<ul class='navbar-nav'>";

											$obj_car->cod_car=$_SESSION['cargo'];
											$obj_car->puntero=$obj_car->listar_modificar();

											while ($cargo=$obj_car->extraer_dato())
											{
												if ($_SESSION['cargo']==$cargo['cod_car'])
												{
													$obj_mod->cod_car=$_SESSION['cargo'];
													$obj_mod->puntero=$obj_mod->listar_menu();
																							
													while (($modulo=$obj_mod->extraer_dato())>0)
													{
														$obj_opc->cod_opc=$modulo['cod_opc'];
														$obj_opc->puntero=$obj_opc->filtrar();
														$opcion=$obj_opc->extraer_dato();

														echo "

																<li class='nav-item btn btn-sm'>
																	<a href='$opcion[url_opc]' class='nav-link'>$opcion[nom_opc] - $opcion[acc_opc]</a>
																</li>

														";
													}
												}
											}
									
											echo "
											<li class='nav-item'>
												<a href='menu_principal.php' class='nav-link'>Inicio</a>
											</li>
											<li class='nav-item'>
												<a href='emp_menu.php' class='nav-link'>Empresa</a>
											</li>
											<li class='nav-item'>
												<a href='rol_menu.php' class='nav-link'>Roles</a>
											</li>
											<li class='nav-item'>
												<a href='ado_menu.php' class='nav-link'>Empleados</a>
											</li>
											<li class='nav-item'>
												<a href='edo_menu.php' class='nav-link'>Proveedores</a>
											</li>
											<li class='nav-item'>
												<a href='pro_menu.php' class='nav-link'>Productos</a>
											</li>
											<li class='nav-item'>
												<a href='pro_venta.php' class='nav-link'>Venta</a>
											</li>
											<li class='nav-item'>
												<a href='for_menu.php' class='nav-link'>Formularios</a>
											</li>
											<li class='nav-item'>
												<a href='cerrar_sesion.php' class='nav-link btn btn-md btn-primary'>Cerrar Sesión</a>
											</li>
										</ul>
									</div>
								</nav>
							</header>
						</div>
					</div>
				</div>

		";

	}

	function pie()
	{

		require_once("../../backend/clase/empresa.class.php");

		$obj_emp = new empresa;
		$obj_emp->puntero=$obj_emp->listar_modificar();
		$empresa=$obj_emp->extraer_dato();

		echo "
				<footer class=''>
					<div class='container-fluid pt-5 bg-danger text-white'>
						<div class='row'>
							<div class='col-4'><img src='../img/logo2.png' width='100%' class='animated bounceInLeft'></div>
							<div class='col-4'></div>
							<div class='col-4 text-right'>
								<p><b>Dirección:</b> <br>$empresa[dir_emp]</p>
								<p><b>E-mail</b> <br>$empresa[cor_emp]</p>
								<p><b>Teléfonos:</b> <br>$empresa[tel_emp]</p>
							</div>
						</div>
						<div class='row'>
							<div class='col-12 text-center'>
								<p>
									$empresa[nom_emp]<br>
									$empresa[rif_emp] <br>
									<a href='https://www.instagram.com/comalcorca/' target='_blank' class='btn btn-danger'><i class='icon ion-logo-instagram' style='font-size: 32px;'></i></a> 
									<a href='https://twitter.com/comalcorca' target='_blank' class='btn btn-danger'><i class='icon ion-logo-twitter' style='font-size: 32px;'></i></a>
								</p>
							</div>
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