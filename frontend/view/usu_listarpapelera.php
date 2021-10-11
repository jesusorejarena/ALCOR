<?php

require_once("tema_session.php");
require_once("../../backend/class/usuario.class.php");

$obj_usu = new usuario;
$obj_usu->puntero = $obj_usu->getFirstDelete();

headerr("Usuarios Eliminados");

check("Usuarios", 1);

?>


<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="usu_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Usuarios Eliminados</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
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
							<th>Restaurar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($usuario = $obj_usu->extractData()) > 0) {
							echo "<form action='../../backend/controller/usuario.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_usu' value='$usuario[cod_usu]'>
													<td>$usuario[cod_usu]</td>
													<td>$usuario[nom_usu]</td>
													<td>$usuario[ape_usu]</td>";

							if ($usuario['gen_usu'] == "H") {
								echo "<td>Hombre</td>";
							} else {
								echo "<td>Mujer</td>";
							}

							echo "<td>$usuario[nac_usu]</td>";

							if ($usuario['tip_usu'] == "V") {
								echo "<td>Venezolano</td>";
							} else {
								echo "<td>Extranjero</td>";
							}
							echo "
													<td>$usuario[ced_usu]</td>
													<td>$usuario[tel_usu]</td>
													<td>$usuario[cor_usu]</td>
													<td>$usuario[cod_car]</td>
													<td>$usuario[dir_usu]</td>
													<td>$usuario[cre_usu]</td>
													<td>$usuario[act_usu]</td>
													<td>$usuario[eli_usu]</td>
													<td>$usuario[res_usu]</td>
													<td><button type='submit' class='btn btn-success' name='run' value='restore'><i class='fas fa-redo-alt'></i></button></td>
													<td><button type='button' data-toggle='modal' class='btn btn-danger' data-target='#modalDelete$usuario[cod_usu]'><i class='fas fa-trash'></i></button></td>
													<div class='modal fade' id='modalDelete$usuario[cod_usu]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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