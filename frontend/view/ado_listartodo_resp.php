<?php

require_once("tema_session.php");
require_once("../../backend/class/empleado.class.php");

$obj_ado = new empleado;
$obj_ado->puntero = $obj_ado->getFirstDelete();

headerr("Lista de Empleados 'Historial'");

/* check("Historial"); */

?>


<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Lista de Empleados 'Historial'</h2>
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
													<td><button type='submit' class='btn btn-success' name='run' value='restore'><i class='fas fa-redo-alt'></i></button></td>
													<td><button type='submit' class='btn btn-danger' name='run' value='delete'><i class='fas fa-trash'></i></button></td>
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