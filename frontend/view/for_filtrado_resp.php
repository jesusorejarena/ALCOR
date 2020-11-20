<?php

require_once("tema_session.php");
require_once("../../backend/class/formulario.class.php");

$obj_for = new formulario;
$obj_for->assignValue();
$obj_for->puntero = $obj_for->filterBackup();

headerr("Formularios Filtrados - Historial");

/* check("Historial"); */

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center p-3">Formularios Filtrados - Historial</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Teléfono</th>
							<th>Correo</th>
							<th>Asunto</th>
							<th>Registro</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($formulario = $obj_for->extractData()) > 0) {
							echo "<form action='../../backend/controller/formulario.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_for' value='$formulario[cod_for]'>
													<td>$formulario[cod_for]</td>
													<td>$formulario[nom_for]</td>
													<td>$formulario[ape_for]</td>
													<td>$formulario[tel_for]</td>
													<td>$formulario[cor_for]</td>
													<td>$formulario[asu_for]</td>
													<td>$formulario[cre_for]</td>
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