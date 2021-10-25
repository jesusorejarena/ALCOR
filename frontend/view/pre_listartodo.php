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
	<h2 class="text-center text-primary font-weight-bold p-3">Lista de Prendas</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="card-header">
				<div class="row">
					<div class="col-12">
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
							<th>Acciones</th>
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
													<td>
														<div class='btn-group' role='group'>";
							if ($prenda['est_pre'] == "A") {
								echo "				<button class='btn btn-success py-2' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></i></button>";
							} else {
								echo "				<button class='btn btn-danger py-2' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></i></button>";
							}
							echo "					<a class='btn btn-danger py-2' href='pre_reportepdf.php?cod_pre=$prenda[cod_pre]'><i class='fas fa-file-pdf'></i></a>
															<a class='btn btn-warning py-2' href='pre_modificar.php?cod_pre=$prenda[cod_pre]'><i class='fas fa-edit'></i></a>
															<button type='button' data-toggle='modal' class='btn btn-danger py-2' data-target='#modalDelete$prenda[cod_pre]'><i class='fas fa-trash'></i></button>
														</div>
													</td>
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