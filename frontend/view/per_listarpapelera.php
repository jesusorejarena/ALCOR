<?php

//session

require_once("tema.php");
require_once("../../backend/class/permiso.class.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/modulo.class.php");

$obj_per = new permiso;
$obj_per->classBootstrap();
$obj_per->puntero = $obj_per->getFirstDelete();

$obj_car = new cargo;

$obj_mod = new modulo;

encabezado("Permisos Eliminados");

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
		<h2 class="<?php echo $obj_per->titulocard; ?>">Permisos Eliminados</h2>
		<hr>
		<div class="row p-3 m-3">
			<div class="col-12">
				<div class="table-responsive">
					<table class="<?php echo $obj_per->tabla; ?>">
						<thead>
							<tr>
								<th>Código</th>
								<th>Nombre del Cargo</th>
								<th>Nombre del Módulo</th>
								<th>Fecha de Creación</th>
								<th>Ultima Modificación</th>
								<th>Fecha de Eliminación</th>
								<th>Fecha de Restauración</th>
								<th>Estatus</th>
								<th>Restaurar</th>
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
													<td><button type='submit' class='$obj_per->btn_restaurar' name='run' value='restore'><i class='icon ion-md-refresh'></i></button></td>
													<td><button type='submit' class='$obj_per->btn_eliminar' name='run' value='delete'><i class='icon ion-md-trash'></i></button></td>
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