<?php

function headerr($titulo)
{
	require_once("../../backend/class/instalacion.class.php");

	$obj_ins = new instalacion;
	$obj_ins->contador = $obj_ins->check();

	if (($obj_ins->count()) == 0) {
		header("Location: ins_usu_registrar.php");
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
										<a href='inicio.php' class='navbar-brand'><img class='img-fluid' src='../img/Logo-Solo.png' alt='Logo' width='300rm'></a>

										<!--Botones de las secciones-->
										<div class='collapse navbar-collapse justify-content-end' id='collapsibleNavbar'>
											<ul class='navbar-nav'>
												<li class='nav-item m-1 text-center'>
													<a href='inicio.php#section1' class='nav-link active'>Inicio</a>
												</li>
												<!-- Dropdown 1 -->
											<li class='nav-item m-1 dropdown'>
												<a class='nav-link active dropdown-toggle text-center' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
													Acerca de
												</a>
												<div class='dropdown-menu text-center' aria-labelledby='navbarDropdown'>
													<a class='dropdown-item' href='inicio.php#section2'>Misión y Visión</a>
													<a class='dropdown-item' href='inicio.php#section3'>Historia</a>
													<a class='dropdown-item' href='inicio.php#section4'>Testimonios</a>
												</div>
											</li>
												<li class='nav-item m-1 text-center'>
													<a href='inicio.php#section5' class='nav-link active'>Ubicación</a>
												</li>
												<li class='nav-item m-1 text-center'>
													<a href='inicio.php#section6' class='nav-link active'>Contacto</a>
												</li>
												<li class='nav-item my-1 mx-2 text-center'>
													<a href='usu_signup.php' class='btn btn-outline-primary shadow-sm'>Registrate</a>
												</li>
												<li class='nav-item my-1 mx-2 text-center'>
													<a href='usu_login.php' class='btn btn-primary shadow-sm'>Ingresar</a>
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

				<span class='screenUp' id='screenUp'><i class='fas fa-chevron-up'></i></span>
		";
}

function footer()
{
	require_once("../../backend/class/empresa.class.php");

	$obj_emp = new empresa;
	$obj_emp->puntero = $obj_emp->getByCode();
	$empresa = $obj_emp->extractData();

	echo "
				<!-- Comienza footer -->

				<footer class='bg-light'>
					<div class='container-fluid px-4 px-xl-5'>
						<div class='container'>
							<div class='row'>
								<div class='col-12 col-xl-3 text-center'>
									<img class='img-fluid' src='../img/Logo-Cuadrado.png' alt='Logo' width='200rm'>
								</div>
								<div class='col-12 col-xl-3 text-left my-2'>
									<h6><a class='text-dark' href='inicio.php#section1'>Inicio</a></h6>
									<h6><a class='text-dark' href='inicio.php#section2'>Misión y Visión</a></h6>
									<h6><a class='text-dark' href='inicio.php#section3'>Testimonios</a></h6>
									<h6><a class='text-dark' href='inicio.php#section4'>Historia</a></h6>
									<h6><a class='text-dark' href='inicio.php#section5'>Ubicación</a></h6>
									<h6><a class='text-dark' href='inicio.php#section6'>Contacto</a></h6>
									<h6><a class='text-dark' href='usu_signup.php'>Registrarse</a></h6>
									<h6><a class='text-dark' href='usu_login.php'>Ingresar</a></h6>
								</div>
								<div class='col-12 col-xl-3 text-left my-2'>
									<h6 class='text-dark'><b>Dirección: </b></h6>
									<h6 class='text-dark'>$empresa[dir_emp]</h6>
									<h6 class='text-dark'><b>E-mail: </b> </h6>
									<h6 class='text-dark'>$empresa[cor_emp] </h6>
									<h6 class='text-dark'><b>Teléfono: </b></h6>
									<h6 class='text-dark'>$empresa[tel_emp]</h6>
								</div>
								<div class='col-12 col-xl-3 text-left my-2'>
									<h6 class='text-dark'><b>Horario</b></h6>
									<h6 class='text-dark'>$empresa[hou_emp]</h6>
									<h6 class='text-dark'>$empresa[hod_emp]</h6>
								</div>
							</div>
							<div class='row mt-4'>
								<div class='col-12 text-center'>
									<a class='text-dark' href='#'><i class='fab fa-twitter imd'></i></a>
									<a class='text-dark' href='#'><i class='fab fa-instagram imd'></i></a>
									<a class='text-dark' href='#'><i class='fab fa-youtube imd'></i></a>
									<a class='text-dark' href='#'><i class='fab fa-linkedin imd'></i></a>
								</div>
							</div>
							<div class='row mt-3'>
								<div class='col-12 text-center'>
									<p class='text-dark'>$empresa[nom_emp]</p>
									<p class='text-dark'>$empresa[rif_emp]</p>
								</div>
								<div class='col-12 text-center'>
									<p class='text-dark'>Una aplicacion hecha con <i class='fas fa-heart ism'></i></p>
								</div>
							</div>
						</div>
					</div>
				</footer>

				<!-- Termina footer -->

				<script src='../js/validaciones.js'></script>
				<script src='../css/bootstrap/js/bootstrap.bundle.min.js'></script>
				<script src='../js/screenUp.js'></script>
				
			</body>
				
		</html>
		";
}
