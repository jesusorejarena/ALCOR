<?php

require_once("tema_session.php");
require_once("../../backend/class/usuario.class.php");

$obj_usu = new usuario;
$obj_usu->puntero = $obj_usu->getBackup();

headerr("Lista de Empleados - Auditoria");

checkAdminOrClient(1);

?>


<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-outline-primary btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center text-primary font-weight-bold p-3">Lista de Empleados - Auditoria</h2>
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
						</tr>
					</thead>
					<tbody>
						<?php
						while (($usuario = $obj_usu->extractData()) > 0) {
							echo "
										<tr>
											<td>$usuario[cod_usu]</td>
											<td>$usuario[nom_usu]</td>
											<td>$usuario[ape_usu]</td>";

							if ($usuario['gen_usu'] == "H") {
								echo "<td>Hombre</td>";
							} else {
								echo "<td>Mujer</td>";
							}

							echo "<td>$usuario[nac_usu]</td>";

							if ($usuario['tip_usu'] == "V") {
								echo "<td>Venezolano</td>";
							} else {
								echo "<td>Extranjero</td>";
							}
							echo "
											<td>$usuario[ced_usu]</td>
											<td>$usuario[tel_usu]</td>
											<td>$usuario[cor_usu]</td>
											<td>$usuario[cod_car]</td>
											<td>$usuario[dir_usu]</td>
											<td>$usuario[cre_usu]</td>
											<td>$usuario[act_usu]</td>
											<td>$usuario[eli_usu]</td>
											<td>$usuario[res_usu]</td>
										</tr>
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