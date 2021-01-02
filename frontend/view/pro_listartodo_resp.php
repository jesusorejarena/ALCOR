<?php

require_once("tema_session.php");
require_once("../../backend/class/producto.class.php");
require_once("../../backend/class/proveedor.class.php");

$obj_pro = new producto;
$obj_pro->puntero = $obj_pro->getBackup();

$obj_edo = new proveedor;

headerr("Lista de Productos - Historial");

checkAdmin();

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Productos Eliminados - Historial</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Proveedor</th>
							<th>Fecha de Ingreso</th>
							<th>Modificado</th>
							<th>Eliminado</th>
							<th>Restaurado</th>
							<th>Estatus</th>
							<th>Estado</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($producto = $obj_pro->extractData()) > 0) {
							$obj_edo->cod_edo = $producto['cod_edo'];
							$obj_edo->puntero = $obj_edo->filter();
							$proveedor = $obj_edo->extractData();

							echo "<form action='../../backend/controller/producto.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_pro' value='$producto[cod_pro]'>
													<td>$producto[cod_pro]</td>
													<td>$producto[nom_pro]</td>
													<td>$producto[des_pro]</td>
													<td>$producto[pre_pro]</td>
													<td>$producto[can_pro]</td>
													<td>$proveedor[nom_edo]</td>
													<td>$producto[cre_pro]</td>
													<td>$producto[act_pro]</td>
													<td>$producto[eli_pro]</td>
													<td>$producto[res_pro]</td>
													<td>$producto[est_pro]</td>
													<td>$producto[bas_pro]</td>
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