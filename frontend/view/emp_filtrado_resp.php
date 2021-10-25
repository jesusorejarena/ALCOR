<?php

require_once("tema_session.php");
require_once("../../backend/class/empresa.class.php");

$obj_emp = new empresa;
$obj_emp->assignValue();
$obj_emp->puntero = $obj_emp->filterBackup();

headerr("Empresa Filtrada - Auditoria");

checkAdminOrClient(1);

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center text-primary font-weight-bold p-3">Empresa Filtrada - Auditoria</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Teléfono</th>
							<th>Dirección</th>
							<th>Correo</th>
							<th>RIF</th>
							<th>Horario Uno</th>
							<th>Horario Dos</th>
							<th>Modificado</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($empresa = $obj_emp->extractData()) > 0) {
							echo "
										<tr>
											<td>$empresa[cod_emp]</td>
											<td>$empresa[nom_emp]</td>
											<td>$empresa[tel_emp]</td>
											<td>$empresa[dir_emp]</td>
											<td>$empresa[cor_emp]</td>
											<td>$empresa[rif_emp]</td>
											<td>$empresa[hou_emp]</td>
											<td>$empresa[hod_emp]</td>
											<td>$empresa[act_emp]</td>
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