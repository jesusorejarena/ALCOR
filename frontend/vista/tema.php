<?php 

	function encabezado($titulo)
	{
		session_start();

		if($_SESSION['activo']==true)
		{
			
			require_once("../../backend/clase/cargo.class.php");
			require_once("../../backend/clase/modulo.class.php");

			$obj_car = new cargo;
			$obj_mod = new modulo;
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
									<a href='inicio.php' class='navbar-brand animated bounceInLeft'><img src='../img/logo2.png' width='150'></a>
									<!--Menu de hamburguesa-->
									<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
											<span class='navbar-toggler-icon'></span>
									</button>
									<!--Botones de las secciones-->
									<div class='collapse navbar-collapse justify-content-end' id='collapsibleNavbar'>
										<ul class='navbar-nav'>
											<li class='nav-item'>
												<a href='menu_principal.php' class='nav-link text-rojo'>Inicio</a>
											</li>
										";

											if ($_SESSION['cargo']==1)
											{
												echo "
													<li class='nav-item'>
														<a href='emp_menu.php' class='nav-link text-rojo'>Empresa</a>
													</li>
													<li class='nav-item'>
														<a href='rol_menu.php' class='nav-link text-rojo'>Roles</a>
													</li>
													<li class='nav-item'>
														<a href='ado_menu.php' class='nav-link text-rojo'>Empleados</a>
													</li>
													<li class='nav-item'>
														<a href='edo_menu.php' class='nav-link text-rojo'>Proveedores</a>
													</li>
													<li class='nav-item'>
														<a href='pro_menu.php' class='nav-link text-rojo'>Productos</a>
													</li>
													<li class='nav-item'>
														<a href='ven_menu.php' class='nav-link text-rojo'>Ventas</a>
													</li>
													<li class='nav-item'>
														<a href='for_menu.php' class='nav-link text-rojo'>Formularios</a>
													</li>
												";
											}
											else
											{	
												if ($_SESSION['cargo']>=2)
												{
													$obj_mod->cod_car=$_SESSION['cargo'];
													$obj_mod->puntero=$obj_mod->listar_menu();

													while (($modulo=$obj_mod->extraer_dato())>0)
													{
														echo "
															
															<li class='nav-item'>
																<a href='$modulo[url_mod]' class='nav-link text-rojo'>$modulo[nom_mod]</a>
															</li>
														";
													}
												}
											}
											
											echo "<li class='nav-item'>
												<a href='cerrar_sesion.php' class='nav-link text-light btn btn-md btn-rojo'>Cerrar Sesión</a>
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
							<div class='col-4 text-left'>
								<p><b>Dirección: </b>$empresa[dir_emp] <br>
								<b>E-mail: </b>$empresa[cor_emp] <br>
								<b>Teléfonos: </b>$empresa[tel_emp]</p>
							</div>
							<div class='col-4 text-center'>
								<p>
									$empresa[nom_emp]<br>
									$empresa[rif_emp] <br>
									<a href='https://www.instagram.com/comalcorca/' target='_blank' class='btn btn-danger'><i class='icon ion-logo-instagram' style='font-size: 32px;'></i></a> 
									<a href='https://twitter.com/comalcorca' target='_blank' class='btn btn-danger'><i class='icon ion-logo-twitter' style='font-size: 32px;'></i></a>
								</p>
							</div>
							<div class='col-4 text-right'>
								<p>
									<b>Horario:</b><br>
									$empresa[hou_emp]<br>
									$empresa[hod_emp]<br>
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