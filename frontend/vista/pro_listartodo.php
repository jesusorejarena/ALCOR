<?php 

	require("tema.php");
	require("../../backend/clase/producto.class.php");

	$obj_pro = new producto;
	$obj_pro->puntero=$obj_pro->listar_normal();

	encabezado("Lista de productos - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="btn btn-outline-success" onClick="window.location.href=''">Atras</button>
			</div>
		</div>
		<div class=" mx-auto bg-dark border border-success shadow-lg">
			<h2 class="card-title text-white text-center pt-3">Lista de productos</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="table table-hover table-dark table-bordered text-center">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Código del producto</th>
									<th>Descripción</th>
									<th>Precio</th>
									<th>Cantidad</th>
									<th>Fecha de Ingreso</th>
									<th>Ultima Modificación</th>
									<th>Editar</th>
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
													<td>$producto[nom_pro]</td>
													<td>$producto[ser_pro]</td>
													<td>$producto[des_pro]</td>
													<td>$producto[pre_pro]</td>
													<td>$producto[can_pro]</td>
													<td>$producto[cre_pro]</td>
													<td>$producto[act_pro]</td>
													<td><button type='submit' class='btn btn-warning' name='ejecutar' value='modificar_normal'>Editar</button></td>
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