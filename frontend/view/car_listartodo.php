<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");

$obj_car = new cargo;
$obj_car->puntero = $obj_car->getAll();

headerr("Lista de Cargos");

checkAdmin();

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Lista de Cargos</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="card-header">
				<div class="row">
					<div class="col-6">
						<a class="btn btn-danger" href="car_reportes/car_reportepdf_enlace.php"><i class="fas fa-file-pdf mr-1"></i> Descargar listado
							por PDF</i></a>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Creado</th>
							<th>Modificado</th>
							<th>Eliminado</th>
							<th>Restaurado</th>
							<th>Estatus</th>
							<th>PDF</th>
							<th>Editar</th>
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
									";

							if ($cargo['cod_car'] == 1 || $cargo['nom_car'] == 'Administrador' || $cargo['cod_car'] == 2 || $cargo['nom_car'] == 'Cliente') {
								echo "
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
										";
							} else {
								echo "
											<td>$cargo[cre_car]</td>
											<td>$cargo[act_car]</td>
											<td>$cargo[eli_car]</td>
											<td>$cargo[res_car]</td>
									";

								if ($cargo['est_car'] == "A") {
									echo "
													<td><button class='btn btn-success' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></button></td>
								";
								} else {
									echo "
													<td><button class='btn btn-danger' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></button></td>";
								}

								echo "
											<td><a class='btn btn-danger' href='car_reportepdf.php?cod_car=$cargo[cod_car]'><i class='fas fa-file-pdf'></i></a></td>
											<td><a class='btn btn-warning' href='car_modificar.php?cod_car=$cargo[cod_car]'><i class='fas fa-edit'></i></a></td>
											<td><button type='button' data-toggle='modal' class='btn btn-danger' data-target='#modalDelete$cargo[cod_car]'><i class='fas fa-trash'></i></button></td>
													<div class='modal fade' id='modalDelete$cargo[cod_car]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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
										";
							}
							echo "
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