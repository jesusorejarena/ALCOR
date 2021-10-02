<?php

require_once("tema_session.php");
require_once("../../backend/class/empleado.class.php");
require_once("../../backend/class/cargo.class.php");

$obj_ado = new empleado;
$obj_ado->puntero = $obj_ado->getAll();

$obj_car = new cargo;

headerr("Lista de Empleados");

check("Empleados", 1);

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="ado_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Lista de Empleados</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="card-header">
				<div class="row">
					<div class="col-6">
						<a class="btn btn-danger" href="ado_reportes/ado_reportepdf_enlace.php"><i class="fas fa-file-pdf mr-1"></i> Descargar listado
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
							<th>Apellido</th>
							<th>Genero</th>
							<th>Fecha de Nacimiento</th>
							<th>Tipo</th>
							<th>Cédula</th>
							<th>Teléfono</th>
							<th>Correo</th>
							<th>Cargo</th>
							<th>Dirección</th>
							<th>Fecha de Contrato</th>
							<th>Modificado</th>
							<th>Eliminado</th>
							<th>Restaurado</th>
							<th>Estatus</th>
							<th>PDF</th>
							<th>Constancia PDF</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($empleado = $obj_ado->extractData()) > 0) {

							$obj_car->cod_car = $empleado['cod_car'];
							$obj_car->puntero = $obj_car->filter();
							$cargo = $obj_car->extractData();

							echo "<form action='../../backend/controller/empleado.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_ado' value='$empleado[cod_ado]'>
													<td>$empleado[cod_ado]</td>
													<td>$empleado[nom_ado]</td>
													<td>$empleado[ape_ado]</td>";

							if ($empleado['gen_ado'] == "H") {
								echo "<td>Hombre</td>";
							} else {
								echo "<td>Mujer</td>";
							}

							echo "<td>$empleado[nac_ado]</td>";

							if ($empleado['tip_ado'] == "V") {
								echo "<td>Venezolano</td>";
							} else {
								echo "<td>Extranjero</td>";
							}
							echo "
													<td>$empleado[ced_ado]</td>
													<td>$empleado[tel_ado]</td>
													<td>$empleado[cor_ado]</td>
													<td>$cargo[nom_car]</td>";

							if ($empleado['cod_ado'] == 1 || $empleado['cod_car'] == 1) {
								echo "
																<td></td>
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
																<td>$empleado[dir_ado]</td>
																<td>$empleado[cre_ado]</td>
																<td>$empleado[act_ado]</td>
																<td>$empleado[eli_ado]</td>
																<td>$empleado[res_ado]</td>
									";

								if ($empleado['est_ado'] == "A") {
									echo "
													<td><button class='btn btn-success' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></button></td>
								";
								} else {
									echo "
													<td><button class='btn btn-danger' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></button></td>";
								}

								echo "
													<td><a class='btn btn-danger' href='ado_reportepdf.php?cod_ado=$empleado[cod_ado]'><i class='fas fa-file-pdf'></i></a></td>
													<td><a class='btn btn-danger' href='ado_reportepdf_constancia.php?cod_ado=$empleado[cod_ado]'><i class='fas fa-user'></i></a></td>
													<td><a class='btn btn-warning' href='ado_modificar.php?cod_ado=$empleado[cod_ado]'><i class='fas fa-edit'></i></a></td>
													<td><button type='button' data-toggle='modal' class='btn btn-danger' data-target='#modalDelete$empleado[cod_ado]'><i class='fas fa-trash'></i></button></td>
													<div class='modal fade' id='modalDelete$empleado[cod_ado]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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