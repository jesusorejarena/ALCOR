<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/opcion.class.php");

	$obj_opc = new opcion;
	$obj_opc->estandar();
	$obj_opc->puntero=$obj_opc->listar_normal();

	encabezado("Lista de opciones - ALCOR C.A.");

?>

	<div class="<?php echo $obj_opc->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_opc->btn_atras; ?>" onClick="window.location.href='rol_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_opc->card; ?>">
			<h2 class="<?php echo $obj_opc->titulocard; ?>">Lista de opciones</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="<?php echo $obj_opc->tabla; ?>">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nombre</th>
									<th>Acción</th>
									<th>URL</th>
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while(($opcion=$obj_opc->extraer_dato())>0)
									{
										echo "<form action='../../backend/controlador/opcion.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_opc' value='$opcion[cod_opc]'>
													<td>$opcion[cod_opc]</td>
													<td>$opcion[nom_opc]</td>
													<td>$opcion[acc_opc]</td>
													<td>$opcion[url_opc]</td>
													<td><a class='$obj_opc->btn_editar' href='opc_modificar.php?cod_opc=$opcion[cod_opc]'>Editar</a></td>
													<td><button type='submit' class='$obj_opc->btn_eliminar' name='ejecutar' value='modificar_eliminar'>Eliminar</button></td>
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