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
	<div class="row mt-5 mb-3">
		<div class="col-12">
			<h1 class="text-center text-primary font-weight-bold">Inicio</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div id="section1" class="container border shadow my-3 px-4 py-5 my-xl-3 px-xl-5 py-xl-5">
				<div class="row">
					<div class="col-12 col-xl-6">
						<?php echo "
						<p><b>Nombre(s):</b> $usuario[nom_usu]</p>
						<p><b>Apellido(s):</b> $usuario[ape_usu]</p>
						<p><b>Teléfono:</b> $usuario[tel_usu]</p>
						<p><b>Correo:</b> $usuario[cor_usu]</p>
						<p><b>Cargo:</b> $cargo[nom_car]</p>
						<p><b>Dirección:</b> $usuario[dir_usu]</p>
					"; ?>
					</div>
					<div class="col-12 col-xl-6">
						<div class="row my-4">
							<div class="col-12">
								<h3 class="text-center text-primary font-weight-bold">Configuración</h3>
							</div>
						</div>
						<div class="row my-3">
							<div class="col-12">
								<a class="btn btn-outline-primary btn-block" href="usu_cambiar_preguntas.php">Cambiar preguntas de seguridad</a>
								<a class="btn btn-outline-primary btn-block" href="usu_cambiar_contrasena.php">Cambiar contraseña</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>