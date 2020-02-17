<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/modulo.class.php");

	$obj_mod = new modulo;
	$obj_mod->estandar();
	$obj_mod->asignar_valor();
	$obj_mod->puntero=$obj_mod->filtrar();

	encabezado("Módulos Filtrados - ALCOR C.A.");

	comprobar("Roles");

?>

	<div class="<?php echo $obj_mod->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_mod->btn_atras; ?>" onClick="window.location.href='mod_filtrar.php'"><i class="icon ion-md-arrow-round-back"></i></button>
			</div>
		</div>
		<div class="<?php echo $obj_mod->card; ?>">
			<h2 class="<?php echo $obj_mod->titulocard; ?>">Módulos Filtrados</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="<?php echo $obj_mod->tabla; ?>">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nombre</th>
									<th>Fecha de Creación</th>
									<th>Ultima Modificación</th>
									<th>Fecha de Eliminación</th>
									<th>Fecha de Restauración</th>
									<th>Estatus</th>
									<th>Estado</th>
									<th>PDF</th>
									<th>Restaurar</th>
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while(($modulo=$obj_mod->extraer_dato())>0)
									{
										echo "<form action='../../backend/controlador/modulo.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_mod' value='$modulo[cod_mod]'>
													<td>$modulo[cod_mod]</td>
													<td>Menú de $modulo[nom_mod]</td>
													<td>$modulo[cre_mod]</td>
													<td>$modulo[act_mod]</td>
													<td>$modulo[eli_mod]</td>
													<td>$modulo[res_mod]</td>
													<td>$modulo[est_mod]</td>
													<td>$modulo[bas_mod]</td>
													<td><a class='$obj_mod->btn_pdf' href='mod_reportepdf.php?cod_mod=$modulo[cod_mod]'><i class='icon ion-md-document'></i></a></td>
													<td><a class='$obj_mod->btn_editar' href='mod_modificar.php?cod_mod=$modulo[cod_mod]'><i class='icon ion-md-create'></i></a></td>
													<td><button type='submit' class='$obj_mod->btn_restaurar' name='ejecutar' value='modificar_restaurar'><i class='icon ion-md-refresh'></i></button></td>
													<td><button type='submit' class='$obj_mod->btn_eliminar' name='ejecutar' value='modificar_eliminar'><i class='icon ion-md-trash'></i></button></td>
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