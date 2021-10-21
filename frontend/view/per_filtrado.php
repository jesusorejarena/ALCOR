<?php

require_once("tema_session.php");
require_once("../../backend/class/permiso.class.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/modulo.class.php");

$obj_per = new permiso;
$obj_per->assignValue();
$obj_per->puntero = $obj_per->filter();

$obj_car = new cargo;

$obj_mod = new modulo;

headerr("Permisos Filtrados");

checkAdmin();

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Permisos Filtrados</h2>
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
							<th>Restaurado</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($permiso = $obj_per->extractData()) > 0) {

							$obj_car->cod_car = $permiso['cod_car'];
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
								<td>$permiso[eli_per]</td>
								<td>$permiso[res_per]</td>";

							if ($permiso['bas_per'] == "A") {
								echo "<td><b class='text-success'>Activo</b></td>";
							} else {
								echo "<td><b class='text-danger'>Papelera</b></td>";
							}

							echo "<td>
											<div class='btn-group' role='group'>";
							if ($permiso['est_per'] == "A") {
								echo "	<button class='btn btn-success py-2' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></i></button>";
							} else {
								echo "	<button class='btn btn-danger py-2' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></i></button>";
							}
							echo "		<a class='btn btn-danger py-2' href='per_reportepdf.php?cod_per=$permiso[cod_per]'><i class='fas fa-file-pdf'></i></a>
												<a class='btn btn-warning py-2' href='per_modificar.php?cod_per=$permiso[cod_per]'><i class='fas fa-edit'></i></a>
												<button type='submit' class='btn btn-success py-2' name='run' value='restore'><i class='fas fa-redo-alt'></i></button>
												<button type='button' data-toggle='modal' class='btn btn-danger py-2' data-target='#modalDelete$permiso[cod_per]'><i class='fas fa-trash'></i></button>
											</div>
										</td>
										<div class='modal fade' id='modalDelete$permiso[cod_per]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
											<div class='modal-dialog modal-sm'>
												<div class='modal-content'>
													<div class='modal-header'>
														<h5 class='modal-title' id='exampleModalLabel'>¿Estas seguro de enviar a la papelera?</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
															<span aria-hidden='true'>&times;</span>
														</button>
													</div>
													<div class='modal-body d-flex justify-content-around'>
														<button type='submit' name='run' value='firstDelete' class='btn btn-light'>Eliminar</button>
														<button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
													</div>
												</div>
											</div>
										</div>
									</tr>
								</form>
						";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>