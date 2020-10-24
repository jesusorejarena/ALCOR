<?php

require_once("tema_session.php");
require_once("../../backend/class/permiso.class.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/modulo.class.php");

$obj_per = new permiso;
$obj_per->classBootstrap();
$obj_per->puntero = $obj_per->getAll();

$obj_car = new cargo;

$obj_mod = new modulo;

headerr("Lista de Permisos");

check("Roles");

?>

<div class="<?php echo $obj_per->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_per->btn_atras; ?>" onClick="window.location.href='rol_menu.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="<?php echo $obj_per->card; ?>">
		<h2 class="<?php echo $obj_per->titulocard; ?>">Lista de Permisos</h2>
		<hr>
		<div class="row p-3 m-3">
			<div class="col-12">
				<div class="table-responsive">
					<table class="<?php echo $obj_per->tabla; ?>">
						<thead>
							<tr>
								<th>Código</th>
								<th>Nombre del Cargo</th>
								<th>Módulo</th>
								<th>Creado</th>
								<th>Modificado</th>
								<th>Eliminado</th>
								<th>Restaurado</th>
								<th>Estatus</th>
								<th>PDF</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while (($permiso = $obj_per->extractData()) > 0) {

								$obj_car->cod_car = $permiso['cod_car'];
								$obj_car->puntero = $obj_car->filter();
								$cargo = $obj_car->extractData();

								$obj_mod->cod_mod = $permiso['cod_mod'];
								$obj_mod->puntero = $obj_mod->filter();
								$modulo = $obj_mod->extractData();

								echo "<form action='../../backend/controller/permiso.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_per' value='$permiso[cod_per]'>
													<td>$permiso[cod_per]</td>
													<td>$cargo[nom_car]</td>
													<td>$modulo[nom_mod]</td>
													<td>$permiso[cre_per]</td>
													<td>$permiso[act_per]</td>
													<td>$permiso[eli_per]</td>
													<td>$permiso[res_per]</td>
													<td>$permiso[est_per]</td>
													<td><a class='btn btn-danger' href='per_reportepdf.php?cod_per=$permiso[cod_per]'><i class='fas fa-file-pdf'></i></a></td>
													<td><a class='btn btn-warning' href='per_modificar.php?cod_per=$permiso[cod_per]'><i class='fas fa-edit'></i></a></td>
													<td><button type='submit' class='btn btn-danger' name='run' value='firstDelete'><i class='fas fa-trash'></i></button></td>
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