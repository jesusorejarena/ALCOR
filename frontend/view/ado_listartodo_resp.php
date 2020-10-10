<?php

//session

require_once("tema.php");
require_once("../../backend/class/empleado.class.php");

$obj_ado = new empleado;
$obj_ado->classBootstrap();
$obj_ado->puntero = $obj_ado->getBackup();

encabezado("Lista de Empleados 'Historial'");

check("Historial");

?>

<div class="<?php echo $obj_ado->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_ado->btn_atras; ?>" onClick="window.location.href='menu_config.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="<?php echo $obj_ado->card; ?>">
		<h2 class="<?php echo $obj_ado->titulocard; ?>">Lista de Empleados 'Historial'</h2>
		<hr>
		<div class="row p-3 m-3">
			<div class="col-12">
				<div class="table-responsive">
					<table class="<?php echo $obj_ado->tabla; ?>">
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
								<th>Ultima Modificación</th>
								<th>Fecha de Eliminación</th>
								<th>Fecha de Restauración</th>
								<th>Estatus</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while (($empleado = $obj_ado->extractData()) > 0) {
								echo "<form action='../../backend/controller/empleado.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_ado' value='$empleado[cod_ado]'>
													<td>$empleado[cod_ado]</td>
													<td>$empleado[nom_ado]</td>
													<td>$empleado[ape_ado]</td>
													<td>$empleado[gen_ado]</td>
													<td>$empleado[nac_ado]</td>
													<td>$empleado[tip_ado]</td>
													<td>$empleado[ced_ado]</td>
													<td>$empleado[tel_ado]</td>
													<td>$empleado[cor_ado]</td>
													<td>$empleado[cod_car]</td>
													<td>$empleado[dir_ado]</td>
													<td>$empleado[cre_ado]</td>
													<td>$empleado[act_ado]</td>
													<td>$empleado[eli_ado]</td>
													<td>$empleado[res_ado]</td>
													<td>$empleado[est_ado]</td>
													<td>$empleado[bas_ado]</td>
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