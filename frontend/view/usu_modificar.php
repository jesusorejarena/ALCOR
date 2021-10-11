<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/usuario.class.php");

$obj_usu = new usuario;

$cod_usu = $_REQUEST['cod_usu'];

$obj_usu->assignValue();
$obj_usu->puntero = $obj_usu->getByCode();
$usuario = $obj_usu->extractData();

$obj_car = new cargo;
$obj_car->puntero = $obj_car->getAll();

headerr("Modificar Usuario");

check("Usuarios", 1);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="usu_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Modificar Usuario</h2>
				<form action="../../backend/controller/usuario.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<input type="hidden" name="cod_usu" id="cod_usu" value="<?php echo $usuario['cod_usu']; ?>">
									<label for="nombre">Nombre:</label>
									<input type="text" name="nom_usu" id="nombre" placeholder="Nombre:" value="<?php echo $usuario['nom_usu']; ?>" class="form-control">
									<small id="nombreDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="apellido">Apellido:</label>
									<input type="text" name="ape_usu" id="apellido" placeholder="Apellido:" value="<?php echo $usuario['ape_usu']; ?>" class="form-control">
									<small id="apellidoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="genero">Genero:</label>
									<select name="gen_usu" id="genero" class="form-control">
										<?php $seleccionado = ($usuario["tip_usu"] == "H") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="H">Hombre</option>
										<?php $seleccionado = ($usuario["tip_usu"] == "M") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="M">Mujer</option>
									</select>
									<small id="generoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="nacimiento">Fecha de nacimiento:</label>
									<input type="date" name="nac_usu" id="nacimiento" placeholder="Fecha de nacimiento:" value="<?php echo $usuario['nac_usu']; ?>" class="form-control">
									<small id="nacimientoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-4">
								<div class="form-group">
									<label for="nacionalidad">Tipo:</label>
									<select name="tip_usu" id="nacionalidad" class="form-control">
										<?php $seleccionado = ($usuario["tip_usu"] == "V") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="V">Venezolano</option>
										<?php $seleccionado = ($usuario["tip_usu"] == "E") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="E">Extranjero</option>
									</select>
									<small id="nacionalidadDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-4">
								<div class="form-group">
									<label for="cedula">Cédula:</label>
									<input type="text" name="ced_usu" id="cedula" placeholder="Cédula:" pattern="[0-9]+" value="<?php echo $usuario['ced_usu']; ?>" class="form-control">
									<small id="cedulaDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-4">
								<div class="form-group">
									<label for="telefono">Teléfono:</label>
									<input type="text" name="tel_usu" id="telefono" placeholder="Teléfono:" pattern="[0-9]+" value="<?php echo $usuario['tel_usu']; ?>" class="form-control">
									<small id="telefonoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="correo">Correo:</label>
									<input type="email" name="cor_usu" id="correo" placeholder="Correo:" value="<?php echo $usuario['cor_usu']; ?>" class="form-control">
									<small id="correoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="cargo">Cargo:</label>
									<select name="cod_car" id="cargo" class="form-control">
										<?php while (($cargo = $obj_car->extractData()) > 0) {
											if ($cargo['cod_car'] == 1 || $cargo['nom_car'] == 'Administrador') {
											} else {
												$select = ($usuario['cod_car'] == $cargo['cod_car']) ? "selected" : "";
												echo "<option $select value='$cargo[cod_car]'>$cargo[nom_car]</option>";
											}
										}
										?>
									</select>
									<small id="cargoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-8">
								<div class="form-group">
									<label for="direccion">Dirección:</label>
									<input type="text" name="dir_usu" id="direccion" placeholder="Dirección:" value="<?php echo $usuario['dir_usu']; ?>" class="form-control">
									<small id="direccionDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-4">
								<div class="form-group">
									<label for="est_usu">Activo/Inactivo:</label>
									<select name="est_usu" id="est_usu" class="form-control">
										<?php $seleccionado = ($usuario["est_usu"] == "A") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="A">Activo</option>
										<?php $seleccionado = ($usuario["est_usu"] == "I") ? "selected" : ""; ?>
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