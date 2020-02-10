<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/producto.class.php");

	$obj_pro = new producto;
	$obj_pro->estandar();
	$obj_pro->puntero=$obj_pro->listar_normal();

	encabezado("Lista de productos - ALCOR C.A.");

?>

	<div class="<?php echo $obj_pro->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_pro->btn_atras; ?>" onClick="window.location.href='pro_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_pro->card; ?>">
			<h2 class="<?php echo $obj_pro->titulocard; ?>">Lista de productos</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="<?php echo $obj_pro->tabla; ?>">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nombre</th>
									<th>Código del producto</th>
									<th>Descripción</th>
									<th>Precio</th>
									<th>Cantidad</th>
									<th>Fecha de ingreso</th>
									<th>Ultima modificación</th>
									<th>Fecha de eliminación</th>
									<th>Fecha de restauración</th>
									<th>Reporte PDF</th>
									<th>Editar</th>
									<th>Restaurar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while(($producto=$obj_pro->extraer_dato())>0)
									{
										echo "<form action='../../backend/controlador/producto.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_pro' value='$producto[cod_pro]'>
													<td>$producto[cod_pro]</td>
													<td>$producto[nom_pro]</td>
													<td>$producto[ser_pro]</td>
													<td>$producto[des_pro]</td>
													<td>$producto[pre_pro]</td>
													<td>$producto[can_pro]</td>
													<td>$producto[cre_pro]</td>
													<td>$producto[act_pro]</td>
													<td>$producto[eli_pro]</td>
													<td>$producto[res_pro]</td>
													<td><a class='$obj_pro->btn_eliminar' href=''>PDF</a></td>
													<td><a class='$obj_pro->btn_editar' href='pro_modificar.php?cod_pro=$producto[cod_pro]'>Editar</a></td>
													<td><button type='submit' class='$obj_pro->btn_restaurar' name='ejecutar' value='modificar_restaurar'>Restaurar</button></td>
													<td><button type='submit' class='$obj_pro->btn_eliminar' name='ejecutar' value='modificar_eliminar'>Eliminar</button></td>
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