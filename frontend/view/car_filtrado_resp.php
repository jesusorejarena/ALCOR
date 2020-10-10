<?php

//session

require_once("tema.php");
require_once("../../backend/class/cargo.class.php");

$obj_car = new cargo;
$obj_car->classBootstrap();
$obj_car->assignValue();
$obj_car->puntero = $obj_car->filterBackup();

encabezado("Cargos Filtrados 'Historial'");

check("Historial");

?>

<div class="<?php echo $obj_car->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_car->btn_atras; ?>" onClick="window.location.href='car_filterBackup.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="<?php echo $obj_car->card; ?>">
		<h2 class="<?php echo $obj_car->titulocard; ?>">Cargos Filtrados 'Historial'</h2>
		<hr>
		<div class="row p-3 m-3">
			<div class="col-12">
				<div class="table-responsive">
					<table class="<?php echo $obj_car->tabla; ?>">
						<thead>
							<tr>
								<th>Código</th>
								<th>Nombre</th>
								<th>Fecha de Creación</th>
								<th>Ultima Modificación</th>
								<th>Fecha de Eliminado</th>
								<th>Fecha de Restauración</th>
								<th>Estatus</th>
								<th>Estado</th>
							</tr>
						</thead>
						<?php
						while (($cargo = $obj_car->extractData()) > 0) {
							echo "<form action='../../backend/controller/cargo.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_car' value='$cargo[cod_car]'>
													<td>$cargo[cod_car]</td>
													<td>$cargo[nom_car]</td>
													<td>$cargo[cre_car]</td>
													<td>$cargo[act_car]</td>
													<td>$cargo[eli_car]</td>
													<td>$cargo[res_car]</td>
													<td>$cargo[est_car]</td>
													<td>$cargo[bas_car]</td>
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

pie();

?>