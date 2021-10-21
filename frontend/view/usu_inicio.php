<?php

require_once("tema_session.php");
require_once("../../backend/class/usuario.class.php");
require_once("../../backend/class/cargo.class.php");

$obj_usu = new usuario;
$obj_car = new cargo;

headerr("Menu principal");

$obj_usu->cod_usu = $_SESSION['codigo'];
$obj_usu->puntero = $obj_usu->getByCode();
$usuario = $obj_usu->extractData();

$obj_car->cod_car = $usuario['cod_car'];
$obj_car->puntero = $obj_car->getByCode();
$cargo = $obj_car->extractData();

?>

<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<h2 class="text-center p-3">Cuenta</h2>
	<div class="row justify-content-center p-3">
		<div class="col-12 col-md-4 p-1">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Información</h3>
				<div class="card-body">
					<?php echo "
						<p><b>Nombre:</b> $usuario[nom_usu]</p>
						<p><b>Apellido:</b> $usuario[ape_usu]</p>
						<p><b>Teléfono:</b> $usuario[tel_usu]</p>
						<p><b>Correo:</b> $usuario[cor_usu]</p>
						<p><b>Cargo:</b> $cargo[nom_car]</p>
						<p><b>Dirección:</b> $usuario[dir_usu]</p>
					"; ?>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4 p-1">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Configuración</h3>
				<div class="card-body">
					<a class="btn btn-outline-primary btn-block" href="usu_cambiar_preguntas.php">Cambiar preguntas de seguridad</a>
					<a class="btn btn-outline-primary btn-block" href="usu_cambiar_contrasena.php">Cambiar contraseña</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>