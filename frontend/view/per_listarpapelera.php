<?php

require_once("tema_session.php");
require_once("../../backend/class/permiso.class.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/modulo.class.php");

$obj_per = new permiso;
$obj_per->puntero = $obj_per->getFirstDelete();

$obj_car = new cargo;

$obj_mod = new modulo;

headerr("Lista - Permisos");

/* check("Roles"); */

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Lista de Permisos</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Cargo</th>
							<th>Módulo</th>
							<th>Creado</th>
							<th>Modificado</th>
							<th>Eliminado</th>
							<th>Estatus</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($permiso = $obj_per->extractData()) > 0) {

							$obj_car->cod_car = $permiso['fky_cargo'];
							$obj_car->puntero = $obj_car->filter();
							$cargo = $obj_car->extractData();

							$obj_mod->cod_mod = $permiso['cod_mod'];
							$obj_mod->puntero = $obj_mod->filter();
							$modulo = $obj_mod->extractData();

							echo "<form action='../../backend/controller/permiso.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_per' value='$permiso[cod_per]'>
													<td>$permiso[cod_per]</td>
													<td>$cargo[nom_car]</td>
													<td>$modulo[nom_mod]</td>
													<td>$permiso[cre_per]</td>
													<td>$permiso[act_per]</td>
													<td>$permiso[res_per]</td>
													<td>$permiso[eli_per]</td>
									";

							if ($permiso['est_per'] == "A") {
								echo "
													<td><button class='btn btn-success' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></button></td>
								";
							} else {
								echo "
													<td><button class='btn btn-danger' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></button></td>";
							}

							echo "
													<td><button type='submit' class='btn btn-success' name='run' value='restore'><i class='fas fa-trash'></i></button></td>
													<td><button type='submit' class='btn btn-danger' name='run' value='delete'><i class='fas fa-trash'></i></button></td>
												</tr>
											</form>
										";
						}
						?>
					</tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>