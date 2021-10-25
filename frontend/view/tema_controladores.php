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
				<link rel='stylesheet' href='../../frontend/css/bootstrap-4.5.2/css/bootstrap.min.css' />
				<link rel='stylesheet' href='../../frontend/css/fontawesome-free-5.15.0/css/all.min.css' />
				<link rel='stylesheet' href='../../frontend/css/estilos.css' />
			</head>
				
			</head>
			
			<body class='m-0 p-0'>

				<div class='row'>
					<div class='col-12 p-5 mt-5 text-center'>
		";
}

function footer()
{

	echo "
					</div>
				</div>

				<script src='../../frontend/css/bootstrap-4.5.2/js/bootstrap.bundle.min.js'></script>
				<script src='../../frontend/js/sideBar.js'></script>

			</body>
				
		</html>
		";
}
