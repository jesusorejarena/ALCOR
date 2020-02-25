<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/permiso.class.php");
	require_once("../../backend/clase/cargo.class.php");
	require_once("../../backend/clase/modulo.class.php");

	$obj_per = new permiso;
	$obj_per->estandar();	
	$obj_per->asignar_valor();
	$obj_per->puntero=$obj_per->filtrar_resp();

	$obj_car = new cargo;

	$obj_mod = new modulo;
	
	encabezado("Permisos Filtrados 'Historial'");

	comprobar("Historial");

?>

	<div class="<?php echo $obj_per->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_per->btn_atras; ?>" onClick="window.location.href='per_filtrar_resp.php'"><i class="icon ion-md-arrow-round-back"></i></button>
			</div>
		</div>
		<div class="<?php echo $obj_per->card; ?>">
			<h2 class="<?php echo $obj_per->titulocard; ?>">Permisos Filtrados 'Historial'</h2>
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
									<th>Estado</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while(($permiso=$obj_per->extraer_dato())>0)
									{

										$obj_car->cod_car=$permiso['cod_car'];
										$obj_car->puntero=$obj_car->filtrar();
										$cargo=$obj_car->extraer_dato();

										$obj_mod->cod_mod=$permiso['cod_mod'];
										$obj_mod->puntero=$obj_mod->filtrar();
										$modulo=$obj_mod->extraer_dato();

										echo "<form action='../../backend/controlador/permiso.php' method='POST'>
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
													<td>$permiso[bas_per]</td>
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