<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/formulario.class.php");

	$obj_for = new formulario;
	$obj_for->estandar();
	$obj_for->puntero=$obj_for->listar_normal();

	encabezado("Lista de formularios - ALCOR C.A.");

?>

	<div class="<?php echo $obj_for->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_for->btn_atras; ?>" onClick="window.location.href='for_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_for->card; ?>">
			<h2 class="<?php echo $obj_for->titulocard; ?>">Lista de formularios</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="<?php echo $obj_for->tabla; ?>">
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
													<td><button type='submit' class='$obj_for->btn_eliminar' name='ejecutar' value='eliminar'>Eliminar</button></td>
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