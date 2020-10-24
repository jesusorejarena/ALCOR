<?php

require_once("tema_session.php");
require_once("../../backend/class/producto.class.php");
require_once("../../backend/class/proveedor.class.php");

$obj_pro = new producto;
$obj_pro->classBootstrap();
$obj_pro->puntero = $obj_pro->getBackup();

$obj_edo = new proveedor;

headerr("Lista de Productos 'Historial'");

check("Historial");


?>

<div class="<?php echo $obj_pro->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_pro->btn_atras; ?>" onClick="window.location.href='menu_config.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="<?php echo $obj_pro->card; ?>">
		<h2 class="<?php echo $obj_pro->titulocard; ?>">Lista de Productos 'Historial'</h2>
		<hr>
		<div class="row p-3 m-3">
			<div class="col-12">
				<div class="table-responsive">
					<table class="<?php echo $obj_pro->tabla; ?>">
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
</div>

<?php

footer();

?>