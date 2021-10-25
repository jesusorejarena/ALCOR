<?php

require_once("tema_session.php");
require_once("../../backend/class/formulario.class.php");

$obj_for = new formulario;
$obj_for->assignValue();
$obj_for->puntero = $obj_for->filter();

headerr("Formularios Filtrados");

check("Formularios", 5);

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="for_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center text-primary font-weight-bold p-3">Formularios Filtrados</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Teléfono</th>
							<th>Correo</th>
							<th>Asunto</th>
							<th>Fecha de Registro</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($formulario = $obj_for->extractData()) > 0) {
							echo "<form action='../../backend/controller/formulario.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_for' value='$formulario[cod_for]'>
													<td>$formulario[cod_for]</td>
													<td>$formulario[nom_for]</td>
													<td>$formulario[ape_for]</td>
													<td>$formulario[tel_for]</td>
													<td>$formulario[cor_for]</td>
													<td>$formulario[asu_for]</td>
													<td>$formulario[cre_for]</td>
													<td>
														<div class='btn-group' role='group'>
															<a class='btn btn-danger py-2' href='for_reportepdf.php?cod_for=$formulario[cod_for]'><i class='fas fa-file-pdf'></i></a>
															<button type='button' data-toggle='modal' class='btn btn-danger py-2' data-target='#modalDelete$formulario[cod_for]'><i class='fas fa-trash'></i></button>
														</div>
													</td>
													<div class='modal fade' id='modalDelete$formulario[cod_for]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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