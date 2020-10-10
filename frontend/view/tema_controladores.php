<?php

function encabezado($titulo)
{
	echo "
		<!DOCTYPE html>
		<html lang='es'>

			<head>
			
				<meta charset='UTF-8'>
				<meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
				<link rel='icon' href='../img/icon.png'>
				<link rel='stylesheet' href='../../frontend/css/estilos.css'>
				<link rel='stylesheet' href='../../frontend/css/bootstrap-4.4.1/css/bootstrap.css'>
				<link rel='stylesheet' href='../../frontend/css/ionicons/css/ionicons.min.css'>
				<link rel='stylesheet' href='../../frontend/css/animate/animate.min.css'>
				<link rel='stylesheet' href='../../frontend/css/wow/animate.css'>
				<title>$titulo</title>
				
			</head>
			
			<body class='bg-light'>

				<span class='screenup' id='screenup'><i class='icon ion-md-arrow-dropup-circle'></i></span>

				<div class='row'>
					<div class='col-12 p-5 mt-5 text-center'>
		";
}

function pie()
{

	echo "	
					</div>
				</div>

				<script src='../../frontend/css/bootstrap-4.4.1/js/jquery-3.4.1.min.js'></script>
				<script src='../../frontend/css/bootstrap-4.4.1/js/popper.min.js'></script>
				<script src='../../frontend/css/bootstrap-4.4.1/js/bootstrap.min.js'></script>
				<script src='../../frontend/js/screenup.js'></script>
				<script src='../../frontend/css/wow/wow.min.js'></script>
				<script>new WOW().init();</script>

			</body>
				
		</html>
		";
}