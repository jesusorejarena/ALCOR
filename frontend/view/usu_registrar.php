<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");

$obj_car = new cargo;
$obj_car->puntero = $obj_car->getAllActive();

headerr("Registrar Empleado");

check("Empleados", 1);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-outline-primary btn-lg" href="usu_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Registrar Empleado</h2>
				<form action="../../backend/controller/usuario.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="nombre">Nombre:</label>
									<input type="text" name="nom_usu" id="nombre" class="form-control" placeholder="Nombre" />
									<small id="nombreDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="apellido">Apellido:</label>
									<input type="text" name="ape_usu" id="apellido" class="form-control" placeholder="Apellido" />
									<small id="apellidoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="genero">Género:</label>
									<select name="gen_usu" id="genero" class="form-control">
										<option value="">Seleccione...</option>
										<option value="H">Hombre</option>
										<option value="M">Mujer</option>
									</select>
									<small id="generoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="nacimiento">Fecha de Nacimiento:</label>
									<input type="date" max='<?php echo date("Y-m-d"); ?>' name="nac_usu" id="nacimiento" class="form-control" />
									<small id="nacimientoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="nacionalidad">Nacionalidad:</label>
									<select name="tip_usu" id="nacionalidad" class="form-control">
										<option value="">Seleccione...</option>
										<option value="V">Venezolano</option>
										<option value="E">Extranjero</option>
									</select>
									<small id="nacionalidadDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="cedula">Cédula:</label>
									<input type="text" name="ced_usu" id="cedula" class="form-control" placeholder="Cédula" />
									<small id="cedulaDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="correo">Correo:</label>
									<input type="text" name="cor_usu" id="correo" class="form-control" placeholder="Correo" />
									<small id="correoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="telefono">Teléfono:</label>
									<input type="text" name="tel_usu" id="telefono" class="form-control" placeholder="Teléfono" />
									<small id="telefonoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="cargo">Cargo:</label>
									<select name="cod_car" id="cargo" class="form-control">
										<option value="">Seleccione...</option>
										<?php while (($cargo = $obj_car->extractData()) > 1) {
											if ($cargo['cod_car'] == 1 || $cargo['nom_car'] == 'Administrador') {
											} else {
												echo "<option value='$cargo[cod_car]'>$cargo[nom_car]</option>";
											}
										}
										?>
									</select>
									<small id="cargoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="direccion">Dirección:</label>
									<input type="text" name="dir_usu" id="direccion" class="form-control" placeholder="Dirección" />
									<small id="direccionDiv" class="invalid-feedback"></small>
								</div>
							</div>
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="reset" class="btn btn-outline-primary">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="createEmployee">Guardar</button>
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