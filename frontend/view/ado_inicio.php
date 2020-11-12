<?php

require_once("tema_session.php");
require_once("../../backend/class/empleado.class.php");
require_once("../../backend/class/cargo.class.php");

$obj_ado = new empleado;
$obj_car = new cargo;

headerr("Menu principal");

$obj_ado->cod_ado = $_SESSION['codigo'];
$obj_ado->puntero = $obj_ado->getByCode();
$empleado = $obj_ado->extractData();

$obj_car->cod_car = $empleado['cod_car'];
$obj_car->puntero = $obj_car->getByCode();
$cargo = $obj_car->extractData();

?>

<div class="container-fluid p-3">
	<h2 class="text-center p-3">Cuenta</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-4">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Información</h3>
				<div class="card-body">
					<?php echo "
						<p><b>Nombre:</b> $empleado[nom_ado]</p>
						<p><b>Apellido:</b> $empleado[ape_ado]</p>
						<p><b>Teléfono:</b> $empleado[tel_ado]</p>
						<p><b>Correo:</b> $empleado[cor_ado]</p>
						<p><b>Cargo:</b> $cargo[nom_car]</p>
						<p><b>Dirección:</b> $empleado[dir_ado]</p>
					"; ?>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Configuración</h3>
				<div class="card-body">
					<a class="btn btn-outline-primary btn-block" href="ado_cambiar_datos">Cambiar datos</a>
					<a class="btn btn-outline-primary btn-block" href="ado_cambiar_contrasena.php">Cambiar contraseña</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>