<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");

$obj_car = new cargo;
$obj_car->assignValue();
$obj_car->puntero = $obj_car->filter();

headerr("Cargos Filtrados");

/* check("Roles"); */

?>

<!-- Lista -->
<div class="container-fluid p-3">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Cargos Filtrados</h2>
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
							<th>Restaurado</th>
							<th>Eliminado</th>
							<th>Estatus</th>
							<th>Restaurar</th>
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

							if ($cargo['cod_car'] == 1 || $cargo['nom_car'] == 'Administrador') {
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
											<td>$cargo[res_car]</td>
											<td>$cargo[eli_car]</td>
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
											<td><button type='submit' class='btn btn-success' name='run' value='restore'><i class='fas fa-redo-alt'></i></button></td>
											<td><a class='btn btn-warning' href='car_modificar.php?cod_car=$cargo[cod_car]'><i class='fas fa-edit'></i></a></td>
											<td><button type='submit' class='btn btn-danger' name='run' value='firstDelete'><i class='fas fa-trash'></i></button></td>
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