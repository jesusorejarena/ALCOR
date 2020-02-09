<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();
	$obj_car->asignar_valor();
	$obj_car->puntero=$obj_car->filtrar();

	encabezado("Cargos filtrados - ALCOR C.A.");

?>

	<div class="<?php echo $obj_car->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_car->btn_atras; ?>" onClick="window.location.href='car_filtrar.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_car->card; ?>">
			<h2 class="<?php echo $obj_car->titulocard; ?>">Cargos filtrados</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="<?php echo $obj_car->tabla; ?>">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nombre</th>
									<th>Fecha de creación</th>
									<th>Ultima modificación</th>
									<th>Fecha de eliminado</th>
									<th>Fecha de restauración</th>
									<th>Estado</th>
									<th>Reporte PDF</th>
									<th>Editar</th>
									<th>Restaurar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<?php 
									while(($cargo=$obj_car->extraer_dato())>0)
									{
										echo "<form action='../../backend/controlador/cargo.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_car' value='$cargo[cod_car]'>
													<td>$cargo[cod_car]</td>
													<td>$cargo[nom_car]</td>";
													
													if ($cargo['cod_car']==1 || $cargo['nom_car']=='Administrador') {
														echo "
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
														";
													} else {
														echo "
																<td>$cargo[cre_car]</td>
																<td>$cargo[act_car]</td>
																<td>$cargo[eli_car]</td>
																<td>$cargo[res_car]</td>
																<td>$cargo[bas_car]</td>
																<td><a class='$obj_car->btn_eliminar' href='ado_reportepdf.php?cod_car=$cargo[cod_car]'>PDF</a></td>
																<td><a class='$obj_car->btn_editar' href='car_modificar.php?cod_car=$cargo[cod_car]'>Editar</a></td>
																<td><button type='submit' class='$obj_car->btn_restaurar' name='ejecutar' value='modificar_restaurar'>Restaurar</button></td>
																<td><button type='submit' class='$obj_car->btn_eliminar' name='ejecutar' value='modificar_eliminar'>Eliminar</button></td>
														";
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
	</div>

<?php 
	
	pie();

?>