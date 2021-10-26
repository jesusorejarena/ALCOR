<?php

function headerr($titulo)
{
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
				
			</head>
			
			<body class='m-0 p-0'>

				<span class='screenUp' id='screenUp'><i class='fas fa-chevron-up'></i></span>

				<h1 class='text-center text-primary font-weight-bold pt-4'>Proceso de Instalación</h1>
		";
}

function footer()
{

	echo "
				<script src='../js/validaciones.js'></script>
				<script src='../css/bootstrap/js/bootstrap.bundle.min.js'></script>
				<script src='../js/screenUp.js'></script>
				<script src='../js/showPassword.js'></script>

			</body>
				
		</html>
		";
}
