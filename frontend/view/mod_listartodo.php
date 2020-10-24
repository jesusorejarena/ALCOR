<?php

require_once("tema_session.php");
require_once("../../backend/class/modulo.class.php");

$obj_mod = new modulo;
$obj_mod->puntero = $obj_mod->getAll();

headerr("Lista de Módulos");

/* check("Roles"); */

?>

<!-- Lista -->
<div class="container-fluid p-3">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Lista de Módulos</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Modificado</th>
							<th>Estatus</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($modulo = $obj_mod->extractData()) > 0) {
							echo "<form action='../../backend/controller/modulo.php' method='POST'>
											<tr>
												<input type='hidden' name='cod_mod' value='$modulo[cod_mod]'>
												<td>$modulo[cod_mod]</td>
												<td>$modulo[nom_mod]</td>
												<td>$modulo[act_mod]</td>
									";

							if ($modulo['est_mod'] == "A") {
								echo "
													<td><button class='btn btn-success' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></button></td>
								";
							} else {
								echo "
													<td><button class='btn btn-danger' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></button></td>";
							}
							echo "
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