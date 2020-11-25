<?php

require_once("tema_session.php");
require_once("../../backend/class/proveedor.class.php");

$obj_edo = new proveedor;
$obj_edo->assignValue();
$obj_edo->puntero = $obj_edo->filter();

headerr("Proveedores Filtrados");

check("Proveedores", 2);

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="edo_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Proveedores Filtrados</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Dirección</th>
							<th>Teléfono</th>
							<th>Correo</th>
							<th>Tipo</th>
							<th>RIF</th>
							<th>Registro</th>
							<th>Modificado</th>
							<th>Eliminado</th>
							<th>Restaurado</th>
							<th>Estatus</th>
							<th>Estado</th>
							<th>PDF</th>
							<th>Editar</th>
							<th>Restaurar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($proveedor = $obj_edo->extractData()) > 0) {
							echo "<form action='../../backend/controller/proveedor.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_edo' value='$proveedor[cod_edo]'>
													<td>$proveedor[cod_edo]</td>
													<td>$proveedor[nom_edo]</td>
													<td>$proveedor[des_edo]</td>
													<td>$proveedor[dir_edo]</td>
													<td>$proveedor[tel_edo]</td>
													<td>$proveedor[cor_edo]</td>
													<td>$proveedor[tip_edo]</td>
													<td>$proveedor[rif_edo]</td>
													<td>$proveedor[cre_edo]</td>
													<td>$proveedor[act_edo]</td>
													<td>$proveedor[eli_edo]</td>
													<td>$proveedor[res_edo]</td>
									";


							if ($proveedor['est_edo'] == "A") {
								echo "
													<td><button class='btn btn-success' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></button></td>
								";
							} else {
								echo "
													<td><button class='btn btn-danger' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></button></td>";
							}

							if ($proveedor['bas_edo'] == "A") {
								echo "<td><b class='text-success'>Activo</b></td>";
							} else {
								echo "<td><b class='text-danger'>Papelera</b></td>";
							}

							echo "<td><a class='btn btn-danger' href='edo_reportepdf.php?cod_edo=$proveedor[cod_edo]'><i class='fas fa-file-pdf'></i></a></td>
													<td><a class='btn btn-warning' href='edo_modificar.php?cod_edo=$proveedor[cod_edo]'><i class='fas fa-edit'></i></a></td>
													<td><button type='submit' class='btn btn-success' name='run' value='restore'><i class='fas fa-redo-alt'></i></button></td>
													<td><button type='submit' class='btn btn-danger' name='run' value='firstDelete'><i class='fas fa-trash'></i></button></td>
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