<?php

require_once("tema_session.php");
require_once("../../backend/class/prenda.class.php");

$obj_pre = new prenda;
$obj_pre->puntero = $obj_pre->getAll();

headerr("Lista de Prendas");

check("Prendas", 3);

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="pre_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Lista de Prendas</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="card-header">
				<div class="row">
					<div class="col-6">
						<a class="btn btn-danger" href="pre_reportes/pre_reportepdf_enlace.php"><i class="fas fa-file-pdf mr-1"></i> Descargar listado
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
							<th>Descripción</th>
							<th>Precio</th>
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
						while (($prenda = $obj_pre->extractData()) > 0) {
							echo "<form action='../../backend/controller/prenda.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_pre' value='$prenda[cod_pre]'>
													<td>$prenda[cod_pre]</td>
													<td>$prenda[nom_pre]</td>
													<td>$prenda[des_pre]</td>
													<td>$prenda[pre_pre]</td>
													<td>$prenda[cre_pre]</td>
													<td>$prenda[act_pre]</td>
													<td>$prenda[eli_pre]</td>
													<td>$prenda[res_pre]</td>
									";

							if ($prenda['est_pre'] == "A") {
								echo "
													<td><button class='btn btn-success' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></button></td>
								";
							} else {
								echo "
													<td><button class='btn btn-danger' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></button></td>";
							}
							echo "
													<td><a class='btn btn-danger' href='pre_reportepdf.php?cod_pre=$prenda[cod_pre]'><i class='fas fa-file-pdf'></i></a></td>
													<td><a class='btn btn-warning' href='pre_modificar.php?cod_pre=$prenda[cod_pre]'><i class='fas fa-edit'></i></a></td>
													<td><button type='button' data-toggle='modal' class='btn btn-danger' data-target='#modalDelete$prenda[cod_pre]'><i class='fas fa-trash'></i></button></td>
													<div class='modal fade' id='modalDelete$prenda[cod_pre]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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