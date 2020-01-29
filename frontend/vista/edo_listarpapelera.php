<?php 

	require("tema.php");
	require("../../backend/clase/proveedor.class.php");

	$obj_edo = new proveedor;
	$obj_edo->puntero=$obj_edo->listar_eliminar();

	encabezado("Proveedores eliminados - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="btn btn-outline-success" onClick="window.location.href=''">Atras</button>
			</div>
		</div>
		<div class=" mx-auto bg-dark border border-success shadow-lg">
			<h2 class="card-title text-white text-center pt-3">Proveedores eliminados</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="table table-hover table-dark table-bordered text-center">
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
													<td><button type='submit' class='btn btn-success' name='ejecutar' value='modificar_restaurar'>Restaurar</button></td>
													<td><button type='submit' class='btn btn-danger' name='ejecutar' value='eliminar'>Eliminar</button></td>
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