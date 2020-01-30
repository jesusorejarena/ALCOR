<?php 

	require("tema.php");
	require("../../backend/clase/empleado.class.php");

	$obj_ado = new empleado;
	$obj_ado->puntero=$obj_ado->listar_normal();

	encabezado("Lista de empleados - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="btn btn-outline-success" onClick="window.location.href='ado_.php'">Atras</button>
			</div>
		</div>
		<div class=" mx-auto bg-dark border border-success shadow-lg">
			<h2 class="card-title text-white text-center pt-3">Lista de empleados</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="table table-hover table-dark table-bordered text-center">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Genero</th>
									<th>Fecha de Nacimiento</th>
									<th>Tipo</th>
									<th>Cédula</th>
									<th>Telefono</th>
									<th>Correo</th>
									<th>Cargo</th>
									<th>Dirección</th>
									<th>Fecha de Contrato</th>
									<th>Ultima Modificación</th>
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while(($empleado=$obj_ado->extraer_dato())>0)
									{
										echo "<form action='../../backend/controlador/empleado.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_ado' value='$empleado[cod_ado]'>
													<td>$empleado[nom_ado]</td>
													<td>$empleado[ape_ado]</td>
													<td>$empleado[gen_ado]</td>
													<td>$empleado[nac_ado]</td>
													<td>$empleado[tip_ado]</td>
													<td>$empleado[ced_ado]</td>
													<td>$empleado[tel_ado]</td>
													<td>$empleado[cor_ado]</td>
													<td>$empleado[car_ado]</td>
													<td>$empleado[dir_ado]</td>
													<td>$empleado[cre_ado]</td>
													<td>$empleado[act_ado]</td>
													<td><a class='btn btn-warning' href='ado_modificar.php?cod_ado=$empleado[cod_ado]'>Editar</a></td>
													<td><button type='submit' class='btn btn-danger' name='ejecutar' value='modificar_eliminar'>Eliminar</button></td>
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