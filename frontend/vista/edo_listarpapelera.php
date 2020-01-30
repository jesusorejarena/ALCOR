<?php 

	require("tema.php");
	require("../../backend/clase/proveedor.class.php");

	$obj_edo = new proveedor;	
	$obj_edo->estandar();
	$obj_edo->puntero=$obj_edo->listar_eliminar();

	encabezado("Proveedores eliminados - ALCOR C.A.");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_edo->btn_atras; ?>" onClick="window.location.href=''">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_edo->card; ?>">
			<h2 class="<?php echo $obj_edo->titulocard; ?>">Proveedores eliminados</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="<?php echo $obj_edo->tabla; ?>">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Descripción</th>
									<th>Dirección</th>
									<th>Telefono</th>
									<th>Correo</th>
									<th>Tipo</th>
									<th>RIF</th>
									<th>Registro</th>
									<th>Ultima Modificación</th>
									<th>Fecha de Eliminación</th>
									<th>Restaurar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while(($proveedor=$obj_edo->extraer_dato())>0)
									{
										echo "<form action='../../backend/controlador/proveedor.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_edo' value='$proveedor[cod_edo]'>
													<td>$proveedor[nom_edo]</td>
													<td>$proveedor[des_edo]</td>
													<td>$proveedor[dir_edo]</td>
													<td>$proveedor[tel_edo]</td>
													<td>$proveedor[cor_edo]</td>
													<td>$proveedor[tip_edo]</td>
													<td>$proveedor[rif_edo]</td>
													<td>$proveedor[cre_edo]</td>
													<td>$proveedor[act_edo]</td>
													<td>$proveedor[eli_edo]</td>
													<td><button type='submit' class='$obj_edo->btn_restaurar' name='ejecutar' value='modificar_restaurar'>Restaurar</button></td>
													<td><button type='submit' class='$obj_edo->btn_eliminar' name='ejecutar' value='eliminar'>Eliminar</button></td>
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