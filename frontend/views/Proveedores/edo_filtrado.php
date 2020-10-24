<?php

require_once("tema_session.php");
require_once("../../backend/class/proveedor.class.php");

$obj_edo = new proveedor;
$obj_edo->classBootstrap();
$obj_edo->assignValue();
$obj_edo->puntero = $obj_edo->filter();

headerr("Proveedores Filtrados");

check("Proveedores");

?>

<div class="<?php echo $obj_edo->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_edo->btn_atras; ?>" onClick="window.location.href='edo_filtrar.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="<?php echo $obj_edo->card; ?>">
		<h2 class="<?php echo $obj_edo->titulocard; ?>">Proveedores Filtrados</h2>
		<hr>
		<div class="row p-3 m-3">
			<div class="col-12">
				<div class="table-responsive">
					<table class="<?php echo $obj_edo->tabla; ?>">
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
								<th>Fecha de Registro</th>
								<th>Modificado</th>
								<th>Eliminado</th>
								<th>Restaurado</th>
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
													<td>$proveedor[bas_edo]</td>
													<td><a class='$obj_edo->btn_pdf' href='edo_reportepdf.php?cod_edo=$proveedor[cod_edo]'><i class='fas fa-file-pdf'></i></a></td>
													<td><a class='$obj_edo->btn_editar' href='edo_modificar.php?cod_edo=$proveedor[cod_edo]'><i class='fas fa-edit'></i></a></td>
													<td><button type='submit' class='$obj_edo->btn_restaurar' name='run' value='restore'><i class='fas fa-redo-alt'></i></button></td>
													<td><button type='submit' class='$obj_edo->btn_eliminar' name='run' value='firstDelete'><i class='fas fa-trash'></i></button></td>
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
</div>

<?php

footer();

?>