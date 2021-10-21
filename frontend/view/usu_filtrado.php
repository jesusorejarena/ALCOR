<?php

require_once("tema_session.php");
require_once("../../backend/class/usuario.class.php");
require_once("../../backend/class/cargo.class.php");

$obj_usu = new usuario;
$obj_usu->assignValue();
$obj_usu->puntero = $obj_usu->filter();

$obj_car = new cargo;

headerr("Usuarios Filtrados");

check("Usuarios", 1);

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="usu_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Usuarios Filtrados</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
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
						<th>Constancia PDF</th>
						<th>Acciones</th>
					<tbody>
						<?php
						while (($usuario = $obj_usu->extractData()) > 0) {

							$obj_car->cod_car = $usuario['cod_car'];
							$obj_car->puntero = $obj_car->filter();
							$cargo = $obj_car->extractData();

							echo "<form action='../../backend/controller/usuario.php' method='POST'>
											<tr>
												<input type='hidden' name='cod_usu' value='$usuario[cod_usu]'>
												<td>$usuario[cod_usu]</td>
												<td>$usuario[nom_usu]</td>
												<td>$usuario[ape_usu]</td>";

							if ($usuario['gen_usu'] == "H") {
								echo "		<td>Hombre</td>";
							} else {
								echo "		<td>Mujer</td>";
							}

							echo "			<td>$usuario[nac_usu]</td>";

							if ($usuario['nac_usu'] == "V") {
								echo "		<td>Venezolano</td>";
							} else {
								echo "		<td>Extranjero</td>";
							}
							echo "
												<td>$usuario[ced_usu]</td>
												<td>$usuario[tel_usu]</td>
												<td>$usuario[cor_usu]</td>
												<td>$cargo[nom_car]</td>";

							if ($usuario['cod_usu'] == 1 || $usuario['cod_car'] == 1) {
								echo "
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
												<td>$usuario[dir_usu]</td>
												<td>$usuario[cre_usu]</td>
												<td>$usuario[act_usu]</td>
												<td>$usuario[eli_usu]</td>
												<td>$usuario[res_usu]</td>
								";

								if ($usuario['bas_usu'] == "A") {
									echo "	<td><b class='text-success'>Activo</b></td>";
								} else {
									echo "	<td><b class='text-danger'>Papelera</b></td>";
								}

								echo "
												<td>
													<div class='btn-group' role='group'>";
								if ($usuario['est_usu'] == "A") {
									echo "		<button class='btn btn-success py-2' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></i></button>";
								} else {
									echo "		<button class='btn btn-danger py-2' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></i></button>";
								}
								echo "			<a class='btn btn-danger py-2' href='usu_reportepdf.php?cod_usu=$usuario[cod_usu]'><i class='fas fa-file-pdf'></i></a>
														<a class='btn btn-warning py-2' href='usu_modificar.php?cod_usu=$usuario[cod_usu]'><i class='fas fa-edit'></i></a>
														<button type='submit' class='btn btn-success' name='run' value='restore'><i class='fas fa-redo-alt'></i></button>
														<button type='button' data-toggle='modal' class='btn btn-danger py-2' data-target='#modalDelete$usuario[cod_usu]'><i class='fas fa-trash'></i></button>
													</div>
												</td>
												<div class='modal fade' id='modalDelete$usuario[cod_usu]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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
												</div>";
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