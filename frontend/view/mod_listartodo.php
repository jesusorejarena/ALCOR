<?php

require_once("tema_session.php");
require_once("../../backend/class/modulo.class.php");

$obj_mod = new modulo;
$obj_mod->puntero = $obj_mod->getAll();

headerr("Lista de Módulos");

checkAdminOrClient(1);

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center text-primary font-weight-bold p-3">Lista de Módulos</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($modulo = $obj_mod->extractData()) > 0) {
							echo "
										<tr>
											<td>$modulo[cod_mod]</td>
											<td>$modulo[nom_mod]</td>
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