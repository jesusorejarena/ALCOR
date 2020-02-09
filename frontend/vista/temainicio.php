<?php 


	function encabezado($titulo)
	{
		
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
										<ul class='navbar-nav'>
											<li class='nav-item'>
												<a href='inicio.php' class='nav-link'>Inicio</a>
											</li>
											<li class='nav-item'>
												<a href='inicio_empresa.php' class='nav-link'>Empresa</a>
											</li>
											<li class='nav-item'>
												<a href='inicio_servicio.php' class='nav-link'>Servicio</a>
											</li>
											<li class='nav-item'>
												<a href='inicio_producto.php' class='nav-link'>Productos</a>
											</li>
											<li class='nav-item'>
												<a href='inicio_contacto.php' class='nav-link'>Contacto</a>
											</li>
											<li class='nav-item'>
												<a href='usu_sesion.php' class='nav-link btn btn-md btn-primary'>Iniciar Sesión</a>
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

		require("../../backend/clase/empresa.class.php");

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