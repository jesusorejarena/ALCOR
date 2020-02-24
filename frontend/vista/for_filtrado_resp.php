<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/formulario.class.php");

	$obj_for = new formulario;
	$obj_for->estandar();
	$obj_for->asignar_valor();
	$obj_for->puntero=$obj_for->filtrar_resp();

	encabezado("Formularios Filtrados 'Respaldo'");

	comprobar("Historial");

?>

	<div class="<?php echo $obj_for->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_for->btn_atras; ?>" onClick="window.location.href='for_filtrar_resp.php'"><i class="icon ion-md-arrow-round-back"></i></button>
			</div>
		</div>
		<div class="<?php echo $obj_for->card; ?>">
			<h2 class="<?php echo $obj_for->titulocard; ?>">Formularios Filtrados 'Respaldo'</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="<?php echo $obj_for->tabla; ?>">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Teléfono</th>
									<th>Correo</th>
									<th>Asunto</th>
									<th>Fecha de Registro</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while(($formulario=$obj_for->extraer_dato())>0)
									{
										echo "<form action='../../backend/controlador/formulario.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_for' value='$formulario[cod_for]'>
													<td>$formulario[cod_for]</td>
													<td>$formulario[nom_for]</td>
													<td>$formulario[ape_for]</td>
													<td>$formulario[tel_for]</td>
													<td>$formulario[cor_for]</td>
													<td>$formulario[asu_for]</td>
													<td>$formulario[cre_for]</td>
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