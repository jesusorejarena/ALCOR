<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/empleado.class.php");

$obj_ado = new empleado;

$cod_ado = $_REQUEST['cod_ado'];

$obj_ado->assignValue();
$obj_ado->puntero = $obj_ado->getByCode();
$empleado = $obj_ado->extractData();

$obj_car = new cargo;
$obj_car->puntero = $obj_car->getAll();

headerr("Modificar Empleado");

check("Empleados", 1);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="ado_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-md-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Modificar Cargo</h2>
				<form action="../../backend/controller/empleado.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<input type="hidden" name="cod_ado" id="cod_ado" value="<?php echo $empleado['cod_ado']; ?>">
									<label for="nombre">Nombre:</label>
									<input type="text" name="nom_ado" id="nombre" placeholder="Nombre:" value="<?php echo $empleado['nom_ado']; ?>" class="form-control">
									<small id="nombreDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="apellido">Apellido:</label>
									<input type="text" name="ape_ado" id="apellido" placeholder="Apellido:" value="<?php echo $empleado['ape_ado']; ?>" class="form-control">
									<small id="apellidoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="genero">Genero:</label>
									<select name="gen_ado" id="genero" class="form-control">
										<?php $seleccionado = ($empleado["tip_ado"] == "H") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="H">Hombre</option>
										<?php $seleccionado = ($empleado["tip_ado"] == "M") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="M">Mujer</option>
									</select>
									<small id="generoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="nacimiento">Fecha de nacimiento:</label>
									<input type="date" name="nac_ado" id="nacimiento" placeholder="Fecha de nacimiento:" value="<?php echo $empleado['nac_ado']; ?>" class="form-control">
									<small id="nacimientoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="nacionalidad">Tipo:</label>
									<select name="tip_ado" id="nacionalidad" class="form-control">
										<?php $seleccionado = ($empleado["tip_ado"] == "V") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="V">Venezolano</option>
										<?php $seleccionado = ($empleado["tip_ado"] == "E") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="E">Extranjero</option>
									</select>
									<small id="nacionalidadDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="cedula">Cédula:</label>
									<input type="text" name="ced_ado" id="cedula" placeholder="Cédula:" pattern="[0-9]+" value="<?php echo $empleado['ced_ado']; ?>" class="form-control">
									<small id="cedulaDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="telefono">Teléfono:</label>
									<input type="text" name="tel_ado" id="telefono" placeholder="Teléfono:" pattern="[0-9]+" value="<?php echo $empleado['tel_ado']; ?>" class="form-control">
									<small id="telefonoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="correo">Correo:</label>
									<input type="email" name="cor_ado" id="correo" placeholder="Correo:" value="<?php echo $empleado['cor_ado']; ?>" class="form-control">
									<small id="correoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="cargo">Cargo:</label>
									<select name="cod_car" id="cargo" class="form-control">
										<?php while (($cargo = $obj_car->extractData()) > 0) {
											if ($cargo['cod_car'] == 1 || $cargo['nom_car'] == 'Administrador') {
											} else {
												$select = ($empleado['cod_car'] == $cargo['cod_car']) ? "selected" : "";
												echo "<option $select value='$cargo[cod_car]'>$cargo[nom_car]</option>";
											}
										}
										?>
									</select>
									<small id="cargoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="form-group">
									<label for="direccion">Dirección:</label>
									<input type="text" name="dir_ado" id="direccion" placeholder="Dirección:" value="<?php echo $empleado['dir_ado']; ?>" class="form-control">
									<small id="direccionDiv" class="invalid-feedback"></small>
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

<script src="../js/validaciones.js"></script>

<?php

footer();

?>