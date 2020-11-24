<?php

require_once("tema_session.php");
require_once("../../backend/class/empleado.class.php");
require_once("../../backend/class/cargo.class.php");

$obj_ado = new empleado;
$obj_ado->assignValue();
$obj_ado->puntero = $obj_ado->filter();

$obj_car = new cargo;

headerr("Empleados Filtrados");

check("Empleados");

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="ado_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Empleados Filtrados</h2>
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
						<th>Estatus</th>
						<th>Estado</th>
						<th>PDF</th>
						<th>Editar</th>
						<th>Restaurar</th>
						<th>Eliminar</th>
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

							if ($empleado['nac_ado'] == "V") {
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

								if ($empleado['bas_ado'] == "A") {
									echo "<td><b class='text-success'>Activo</b></td>";
								} else {
									echo "<td><b class='text-danger'>Papelera</b></td>";
								}

								echo "
													<td><a class='btn btn-danger' href='ado_reportepdf.php?cod_ado=$empleado[cod_ado]'><i class='fas fa-file-pdf'></i></a></td>
													<td><a class='btn btn-warning' href='ado_modificar.php?cod_ado=$empleado[cod_ado]'><i class='fas fa-edit'></i></a></td>
													<td><button type='submit' class='btn btn-success' name='run' value='restore'><i class='fas fa-redo-alt'></i></button></td>
													<td><button type='submit' class='btn btn-danger' name='run' value='firstDelete'><i class='fas fa-trash'></i></button></td>";
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