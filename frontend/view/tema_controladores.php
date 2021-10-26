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
				<link rel='stylesheet' href='../../frontend/css/bootstrap/css/bootstrap.min.css' />
				<link rel='stylesheet' href='../../frontend/css/fontawesome-free/css/all.min.css' />
				<link rel='stylesheet' href='../../frontend/css/estilos.css' />
			</head>
				
			<body>

				<div class='container-fluid'>
					<div class='row abs-center'>
						<div class='col-12 col-xl-4'>
		";
}

function footer()
{

	echo "
						</div>
					</div>
				</div>

				<script src='../../frontend/css/bootstrap/js/bootstrap.bundle.min.js'></script>

			</body>
				
		</html>
		";
}
