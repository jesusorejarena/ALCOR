<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/modulo.class.php");

$obj_car = new cargo;
$obj_car->puntero = $obj_car->getAllActive();

$obj_mod = new modulo;
$obj_mod->puntero = $obj_mod->getAllActive();

headerr("Registrar - Permisos");

checkAdmin();

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-md-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Registrar Permisos</h2>
				<form action="../../backend/controller/permiso.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="cargo">Cargo:</label>
									<select name="cod_car" id="cargo" class="form-control">
										<option value="">Seleccione...</option>
										<?php while (($cargo = $obj_car->extractData()) > 0) {
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
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="modulo">Módulo:</label>
									<select name="cod_mod" id="modulo" class="form-control">
										<option value="">Seleccione...</option>
										<?php while (($modulo = $obj_mod->extractData()) > 0) {
											echo "<option value='$modulo[cod_mod]'>Menú de $modulo[nom_mod]</option>";
										}
										?>
									</select>
									<small id="moduloDiv" class="invalid-feedback"></small>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between">
						<button type="reset" class="btn btn-success">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="create">Guardar</button>
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