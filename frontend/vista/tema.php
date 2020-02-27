<?php 

	function comprobar($menu)
	{
		require_once("../../backend/clase/modulo.class.php");
		require_once("../../backend/clase/permiso.class.php");

		$obj_mod = new modulo;
		$obj_per = new permiso;

		if ($_SESSION['cargo']>=2)
		{
			$obj_per->cod_car=$_SESSION['cargo'];
			$obj_per->puntero=$obj_per->listar_menu();
			

			while(($permisos=$obj_per->extraer_dato())>0)
			{
				
				$obj_mod->nom_mod=$menu;
				$obj_mod->contador=$obj_mod->listar_comprobar();
				
							
				if ($modulos=$obj_mod->contando()>0) {
					
				}
				else
				{
					header("Location: menu_principal.php");
				}
				
			}
		}
	}

	function comprobaradmin()
	{
		if ($_SESSION['cargo']==1)
		{
			
		}
		else
		{
			header("Location: menu_principal.php");
		}

	}

	function encabezado($titulo)
	{
		ini_set("session.cookie_lifetime","36000");

		session_start();

		if($_SESSION['activo']==true )
		{
			if (time() - $_SESSION["time"] < 1200)
			{
				
			}
			else
			{
				session_destroy();
			}

			require_once("../../backend/clase/cargo.class.php");
			require_once("../../backend/clase/modulo.class.php");
			require_once("../../backend/clase/permiso.class.php");
			require_once("../../backend/clase/respaldo.class.php");

			$obj_car = new cargo;
			$obj_mod = new modulo;
			$obj_per = new permiso;
			$obj_res = new respaldo;

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
				<link rel='icon' href='../img/icon.png'>
				<link rel='stylesheet' href='../css/estilos.css'>
				<link rel='stylesheet' href='../css/bootstrap-4.4.1/css/bootstrap.css'>
				<link rel='stylesheet' href='../css/ionicons/css/ionicons.min.css'>
				<link rel='stylesheet' href='../css/animate/animate.min.css'>
				<link rel='stylesheet' href='../css/wow/animate.css'>
				<title>$titulo</title>
				
			</head>
			
			<body class='m-0 p-0 bg-info'>

				<span class='screenup' id='screenup'><i class='icon ion-md-arrow-dropup-circle'></i></span>

				<div class='container-fluid'>
					<div class='row'>
						<div class='col-12 m-0 p-0'>
							<header class='header'>
								<nav class='navbar navbar-expand-md bg-primary navbar-dark form-control-static fixed-top'>
									<!--Nombre de la app-->
									<a href='menu_principal.php' class='navbar-brand animated bounceInLeft px-5'><img src='../img/logo2.png' width='150'></a>
									<!--Menu de hamburguesa-->
									<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
											<span class='navbar-toggler-icon'></span>
									</button>
									<!--Botones de las secciones-->
									<div class='collapse navbar-collapse justify-content-end' id='collapsibleNavbar'>
										<ul class='navbar-nav'>
											<li class='nav-item'>
												<a href='menu_principal.php' class='nav-link text-center texto-nav'>Inicio</a>
											</li>
										";

											if ($_SESSION['cargo']==1)
											{
												echo "
													<li class='nav-item'>
														<a href='emp_menu.php' class='nav-link text-center texto-nav'>Empresa</a>
													</li>
													<li class='nav-item'>
														<a href='rol_menu.php' class='nav-link text-center texto-nav'>Roles</a>
													</li>
													<li class='nav-item'>
														<a href='ado_menu.php' class='nav-link text-center texto-nav'>Empleados</a>
													</li>
													<li class='nav-item'>
														<a href='edo_menu.php' class='nav-link text-center texto-nav'>Proveedores</a>
													</li>
													<li class='nav-item'>
														<a href='pro_menu.php' class='nav-link text-center texto-nav'>Productos</a>
													</li>
													<li class='nav-item'>
														<a href='ven_menu.php' class='nav-link text-center texto-nav'>Ventas</a>
													</li>
													<li class='nav-item'>
														<a href='for_menu.php' class='nav-link text-center texto-nav'>Formularios</a>
													</li>
													<li class='nav-item'>
														<a href='menu_config.php' class='nav-link text-center texto-nav'>Configuración</a>
													</li>
												";
											}
											else
											{	
												if ($_SESSION['cargo']>=2)
												{
													$obj_per->cod_car=$_SESSION['cargo'];
													$obj_per->puntero=$obj_per->listar_menu();

													while (($permiso=$obj_per->extraer_dato())>0)
													{
														$obj_mod->cod_mod=$permiso['cod_mod'];
														$obj_mod->puntero=$obj_mod->listar_menu();
														$modulo=$obj_mod->extraer_dato();

														echo "
															
															<li class='nav-item'>
																<a href='$modulo[url_mod]' class='nav-link text-center texto-nav'>$modulo[nom_mod]</a>
															</li>
														";
													}
												}
											}
											
											echo "<li class='nav-item'>
												<a href='cerrar_sesion.php' class='nav-link text-light btn btn-sesion'><i class='icon ion-md-power'></i></a>
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
					<div class='container-fluid pt-3 pb-1 bg-info text-white'>
						<div class='row'>
							<div class='col-4 text-left'>
								<p><b>Dirección: </b>$empresa[dir_emp] <br>
								<b>E-mail: </b>$empresa[cor_emp] <br>
								<b>Teléfono: </b>$empresa[tel_emp]</p>
							</div>
							<div class='col-4 text-center'>
								<p>
									$empresa[nom_emp]<br>
									$empresa[rif_emp] <br>
									<a href='https://www.instagram.com/comalcorca/' target='_blank' class='btn btn-info'><i class='icon ion-logo-instagram' style='font-size: 32px;'></i></a> 
									<a href='https://twitter.com/comalcorca' target='_blank' class='btn btn-info'><i class='icon ion-logo-twitter' style='font-size: 32px;'></i></a><br>
									<a href='creadores.php' class='btn btn-info'>Creadores del Software AutoSIV</a>
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
				<script src='../js/screenup.js'></script>
				<script src='../css/wow/wow.min.js'></script>
				<script>new WOW().init();</script>

			</body>
				
		</html>
		";

	}

?>