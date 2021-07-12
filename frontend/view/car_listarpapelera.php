<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");

$obj_car = new cargo;
$obj_car->assignValue();
$obj_car->puntero = $obj_car->getFirstDelete();
headerr("Cargos Eliminados");

checkAdmin();

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Cargos Eliminados</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Creado</th>
							<th>Modificado</th>
							<th>Eliminado</th>
							<th>Restaurar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($cargo = $obj_car->extractData()) > 0) {
							echo "<form action='../../backend/controller/cargo.php' method='POST'>
											<tr>
												<input type='hidden' name='cod_car' value='$cargo[cod_car]'>
												<td>$cargo[cod_car]</td>
												<td>$cargo[nom_car]</td>
												<td>$cargo[cre_car]</td>
												<td>$cargo[act_car]</td>
												<td>$cargo[res_car]</td>
												<td><button type='submit' class='btn btn-success' name='run' value='restore'><i class='fas fa-redo-alt'></i></button></	td>
												<td><button type='button' data-toggle='modal' class='btn btn-danger' data-target='#modalDelete$cargo[cod_car]'><i class='fas fa-trash'></i></button></td>
													<div class='modal fade' id='modalDelete$cargo[cod_car]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
														<div class='modal-dialog modal-sm'>
															<div class='modal-content'>
																<div class='modal-header'>
																	<h5 class='modal-title' id='exampleModalLabel'>¿Estas seguro de eliminar?</h5>
																	<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
																		<span aria-hidden='true'>&times;</span>
																	</button>
																</div>
																<div class='modal-body d-flex justify-content-around'>
																	<button type='submit' name='run' value='delete' class='btn btn-light'>Eliminar</button>
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