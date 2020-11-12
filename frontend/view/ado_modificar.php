<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/empleado.class.php");

$obj_ado = new empleado;

$obj_ado->classBootstrap();

$cod_ado = $_REQUEST['cod_ado'];

$obj_ado->assignValue();
$obj_ado->puntero = $obj_ado->getByCode();
$empleado = $obj_ado->extractData();

$obj_car = new cargo;
$obj_car->puntero = $obj_car->getAll();

headerr("Modificar Empleado");

check("Empleados");

?>

<div class="<?php echo $obj_ado->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_ado->btn_atras; ?>" onClick="window.location.href='ado_menu.php'"><i class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-12 col-md-8">
			<div class="<?php echo $obj_ado->card; ?>">
				<h2 class="<?php echo $obj_ado->titulocard; ?>">Modificar Empleado</h2>
				<hr>
				<div class="card-body">
					<form action="../../backend/controller/empleado.php" method="POST">
						<div class="row p-3">

						</div>
						<div class="row p-3 text-center">
							<div class="col-6">
								<div class="form-group">
									<button type="reset" name="run" id="run" value="limpiar" class="<?php echo $obj_ado->btn_limpiar; ?>">Limpiar</button>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<button type="submit" name="run" id="run" value="update" class="<?php echo $obj_ado->btn_enviar; ?>">Modificar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<?php

footer();

?>

<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");

$obj_car = new cargo;
$cod_car = $_REQUEST['cod_car'];

$obj_car->assignValue();
$obj_car->puntero = $obj_car->getByCode();
$cargo = $obj_car->extractData();

headerr("Modificar Cargo");

/* check("Roles"); */

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="ado_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-md-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Modificar Cargo</h2>
				<form action="../../backend/controller/cargo.php" method="POST" class="was-validation" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<input type="hidden" name="cod_ado" id="cod_ado" value="<?php echo $empleado['cod_ado']; ?>">
									<label for="nom_ado">Nombre:</label>
									<input type="text" name="nom_ado" id="nom_ado" placeholder="Nombre:" value="<?php echo $empleado['nom_ado']; ?>" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="ape_ado">Apellido:</label>
									<input type="text" name="ape_ado" id="ape_ado" placeholder="Apellido:" value="<?php echo $empleado['ape_ado']; ?>" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="gen_ado">Genero:</label>
									<select name="gen_ado" id="gen_ado" class="form-control">
										<?php $seleccionado = ($empleado["tip_ado"] == "H") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="H">Hombre</option>
										<?php $seleccionado = ($empleado["tip_ado"] == "M") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="M">Mujer</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="nac_ado">Fecha de nacimiento:</label>
									<input type="date" name="nac_ado" id="nac_ado" placeholder="Fecha de nacimiento:" value="<?php echo $empleado['nac_ado']; ?>" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="tip_ado">Tipo:</label>
									<select name="tip_ado" id="tip_ado" class="form-control">
										<?php $seleccionado = ($empleado["tip_ado"] == "V") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="V">Venezolano</option>
										<?php $seleccionado = ($empleado["tip_ado"] == "E") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="E">Extranjero</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="ced_ado">Cédula:</label>
									<input type="text" name="ced_ado" id="ced_ado" placeholder="Cédula:" pattern="[0-9]+" value="<?php echo $empleado['ced_ado']; ?>" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="tel_ado">Teléfono:</label>
									<input type="text" name="tel_ado" id="tel_ado" placeholder="Teléfono:" pattern="[0-9]+" value="<?php echo $empleado['tel_ado']; ?>" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="cor_ado">Correo:</label>
									<input type="email" name="cor_ado" id="cor_ado" placeholder="Correo:" value="<?php echo $empleado['cor_ado']; ?>" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="cod_car">Cargo:</label>
									<select name="cod_car" id="cod_car" class="form-control">
										<?php while (($cargo = $obj_car->extractData()) > 0) {
											if ($cargo['cod_car'] == 1 || $cargo['nom_car'] == 'Administrador') {
											} else {
												$select = ($empleado['cod_car'] == $cargo['cod_car']) ? "selected" : "";
												echo "<option $select value='$cargo[cod_car]'>$cargo[nom_car]</option>";
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="form-group">
									<label for="dir_ado">Dirección:</label>
									<input type="text" name="dir_ado" id="dir_ado" placeholder="Dirección:" value="<?php echo $empleado['dir_ado']; ?>" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="est_ado">Activo/Inactivo:</label>
									<select name="est_ado" id="est_ado" class="form-control">
										<?php $seleccionado = ($empleado["est_ado"] == "A") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="A">Activo</option>
										<?php $seleccionado = ($empleado["est_ado"] == "I") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="I">Inactivo</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between">
						<button type="reset" class="btn btn-success">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="update">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>