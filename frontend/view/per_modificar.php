<?php

require_once("tema_session.php");
require_once("../../backend/class/permiso.class.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/modulo.class.php");

$obj_per = new permiso;

$cod_per = $_REQUEST['cod_per'];

$obj_per->assignValue();
$obj_per->puntero = $obj_per->getByCode();
$permiso = $obj_per->extractData();

$obj_car = new cargo;
$obj_car->puntero = $obj_car->getAllActive();

$obj_mod = new modulo;
$obj_mod->puntero = $obj_mod->getAllActive();

headerr("Modificar - Permisos");

checkAdminOrClient(1);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-outline-primary btn-lg" href="per_modificar.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Modificar Permisos</h2>
				<form action="../../backend/controller/permiso.php" method="POST" class="was-validation" id="formulario" novalidate>
					<input type="hidden" name="cod_per" value="<?php echo $permiso['cod_per']; ?>">
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="cargo">Cargo:</label>
									<select name="cod_car" id="cargo" class="form-control">
										<?php while (($cargo = $obj_car->extractData()) > 0) {
											if ($cargo['cod_car'] == 1 || $cargo['nom_car'] == 'Administrador') {
											} else {
												$select = ($cargo['cod_car'] == $permiso['cod_car']) ? "selected" : "";
												echo "<option $select value='$cargo[cod_car]'>$cargo[nom_car]</option>";
											}
										}
										?>
									</select>
									<small id="cargoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="modulo">Módulo:</label>
									<select name="cod_mod" id="modulo" class="form-control">
										<?php while (($modulo = $obj_mod->extractData()) > 0) {
											$select = ($modulo['cod_mod'] == $permiso['cod_mod']) ? "selected" : "";
											echo "<option $select value='$modulo[cod_mod]'>$modulo[nom_mod]</option>";
										}
										?>
									</select>
									<small id="moduloDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="estatus">Estatus:</label>
									<select name="est_per" id="estatus" class="form-control">
										<?php $seleccionado = ($permiso["est_per"] == "A") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="A">Activo</option>
										<?php $seleccionado = ($permiso["est_per"] == "I") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="I">Inactivo</option>
									</select>
									<small id="estatusDiv" class="invalid-feedback"></small>
								</div>
							</div>
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="reset" class="btn btn-outline-primary">Limpiar</button>
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