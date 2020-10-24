<?php

require_once("tema_session.php");
require_once("../../backend/class/permiso.class.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/modulo.class.php");

$obj_per = new permiso;
$obj_per->puntero = $obj_per->filter();

$obj_car = new cargo;
$obj_car->puntero = $obj_car->getAll();

$obj_mod = new modulo;
$obj_mod->puntero = $obj_mod->getAll();

headerr("Filtrar Permisos");

/* check("Roles"); */

?>

<!-- Formulario -->
<div class="container p-3 p-md-2">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-md-6 p-2">
			<div class="card rounded">
				<h4 class="card-title text-center pt-4">Filtrar Permisos</h4>
				<form action="per_filtrado.php" method="POST">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="cod_per">Código:</label>
									<input type="text" name="cod_per" id="cod_per" class="form-control" placeholder="Código" />
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="fky_cargo">Cargo:</label>
									<select name="fky_cargo" id="fky_cargo" class="form-control">
										<option value="">Seleccione...</option>
										<?php while (($cargo = $obj_car->extractData()) > 0) {
											if ($cargo['cod_car'] == 1 || $cargo['nom_car'] == 'Administrador') {
											} else {
												echo "<option value='$cargo[cod_car]'>$cargo[nom_car]</option>";
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="fky_modulo">Módulo:</label>
									<select name="fky_modulo" id="fky_modulo" class="form-control">
										<option value="">Seleccione...</option>
										<?php while (($modulo = $obj_mod->extractData()) > 0) {
											echo "<option value='$modulo[cod_mod]'>Menú de $modulo[nom_mod]</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="est_per">Estatus:</label>
									<select name="est_per" id="est_per" class="form-control">
										<option value="">Todos</option>
										<option value="A">Activo</option>
										<option value="I">Inactivo</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="bas_per">Estado:</label>
									<select name="bas_per" id="bas_per" class="form-control">
										<option value="">Todos</option>
										<option value="A">Activo</option>
										<option value="B">Eliminado</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between">
						<button type="reset" class="btn btn-success">Limpiar</button>
						<button class="btn btn-primary">Filtrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>