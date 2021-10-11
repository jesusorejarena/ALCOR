<?php

require_once("tema_session.php");
require_once("../../backend/class/prenda.class.php");

$obj_pre = new prenda;
$obj_pre->puntero = $obj_pre->getBackup();

headerr("Lista de Prendas - Historial");

checkAdmin();

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Prendas Eliminados - Historial</h2>
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
						while (($prenda = $obj_pre->extractData()) > 0) {
							echo "<form action='../../backend/controller/prenda.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_pre' value='$prenda[cod_pre]'>
													<td>$prenda[cod_pre]</td>
													<td>$prenda[nom_pre]</td>
													<td>$prenda[des_pre]</td>
													<td>$prenda[pre_pre]</td>
													<td>$prenda[cre_pre]</td>
													<td>$prenda[act_pre]</td>
													<td>$prenda[eli_pre]</td>
													<td>$prenda[res_pre]</td>
													<td>$prenda[est_pre]</td>
													<td>$prenda[bas_pre]</td>
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