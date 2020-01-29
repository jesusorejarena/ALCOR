<?php 

	require("tema.php");
	require("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->puntero=$obj_car->listar_normal();

	encabezado("Lista de cargos - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="btn btn-outline-success" onClick="window.location.href=''">Atras</button>
			</div>
		</div>
		<div class=" mx-auto bg-dark border border-success shadow-lg">
			<h2 class="card-title text-white text-center pt-3">Lista de cargos</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="table table-hover table-dark table-bordered text-center">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nombre</th>
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while(($cargo=$obj_car->extraer_dato())>0)
									{
										echo "<form action='../../backend/controlador/cargo.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_car' value='$cargo[cod_car]'>
													<td>$cargo[cod_car]</td>
													<td>$cargo[nom_car]</td>
													<td><button type='submit' class='btn btn-warning' name='ejecutar' value='modificar_normal'>Editar</button></td>
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