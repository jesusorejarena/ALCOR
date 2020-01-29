<?php 

	require("tema.php");
	require("../../backend/clase/formulario.class.php");

	$obj_for = new formulario;
	$obj_for->puntero=$obj_for->listar_normal();

	encabezado("Lista de formularios - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="btn btn-outline-success" onClick="window.location.href=''">Atras</button>
			</div>
		</div>
		<div class=" mx-auto bg-dark border border-success shadow-lg">
			<h2 class="card-title text-white text-center pt-3">Lista de formularios</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="table table-hover table-dark table-bordered text-center">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Telefono</th>
									<th>Correo</th>
									<th>Asunto</th>
									<th>Fecha de Registro</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while(($formulario=$obj_for->extraer_dato())>0)
									{
										echo "<form action='../../backend/controlador/formulario.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_for' value='$formulario[cod_for]'>
													<td>$formulario[nom_for]</td>
													<td>$formulario[ape_for]</td>
													<td>$formulario[tel_for]</td>
													<td>$formulario[cor_for]</td>
													<td>$formulario[asu_for]</td>
													<td>$formulario[cre_for]</td>
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