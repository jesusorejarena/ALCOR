<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/proveedor.class.php");

	$obj_edo = new proveedor;
	$obj_edo->estandar();
	
	encabezado("Filtrar Proveedores 'Historial'");

	comprobar("Historial");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_edo->btn_atras; ?>" onClick="window.location.href='menu_config.php'"><i class="icon ion-md-arrow-round-back"></i></button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_edo->card; ?>">
					<h2 class="<?php echo $obj_edo->titulocard; ?>">Filtrar Proveedores</h2>
					<hr>
					<div class="card-body">
						<form action="edo_filtrado.php" method="POST">
							<div class="row p-3">
								<div class="col-12 col-md-2">
									<div class="form-group">
										<label for="cod_edo" class="<?php echo $obj_edo->for; ?>">Código:</label>
										<input type="text" name="cod_edo" id="cod_edo" placeholder="Código:" pattern="[0-9]" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-10">
									<div class="form-group">
										<label for="nom_edo" class="<?php echo $obj_edo->for; ?>">Nombre:</label>
										<input type="text" name="nom_edo" id="nom_edo" placeholder="Nombre:" pattern="[A-Za-z]" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="des_edo" class="<?php echo $obj_edo->for; ?>">Descripción:</label>
										<textarea name="des_edo" id="des_edo" placeholder="Descripción:" pattern="[A-Za-z]" class="<?php echo $obj_edo->input_text; ?>"></textarea>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="dir_edo" class="<?php echo $obj_edo->for; ?>">Dirección:</label>
										<input type="text" name="dir_edo" id="dir_edo" placeholder="Dirección:" pattern="[A-Za-z0-9]" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="tel_edo" class="<?php echo $obj_edo->for; ?>">Teléfono:</label>
										<input type="text" name="tel_edo" id="tel_edo" placeholder="Teléfono:" pattern="[0-9]" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cor_edo" class="<?php echo $obj_edo->for; ?>">Correo:</label>
										<input type="text" name="cor_edo" id="cor_edo" placeholder="Correo:" pattern="[A-Za-z0-9]" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="tip_edo" class="<?php echo $obj_edo->for; ?>">Tipo:</label>
										<select name="tip_edo" id="tip_edo" class="<?php echo $obj_edo->input_normal; ?>">
											<option value="">General</option>
											<option value="V">Venezolano</option>
											<option value="P">Personal</option>
											<option value="J">Juridico</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="rif_edo" class="<?php echo $obj_edo->for; ?>">RIF:</label>
										<input type="text" name="rif_edo" id="rif_edo" placeholder="RIF:" pattern="[A-Za-z0-9]" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="est_edo" class="<?php echo $obj_edo->for; ?>">Activo/Inactivo:</label>
										<select name="est_edo" id="est_edo" class="<?php echo $obj_edo->input_normal; ?>">
											<option value="">General</option>
											<option value="A">Activo</option>
											<option value="I">Inactivo</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="bas_edo" class="<?php echo $obj_edo->for; ?>">Activo/Papelera:</label>
										<select name="bas_edo" id="bas_edo" class="<?php echo $obj_edo->input_normal; ?>">
											<option value="">General</option>
											<option value="A">Activo</option>
											<option value="B">En papelera</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row p-3 text-center">
								<div class="col-6">
									<div class="form-group">
										<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_edo->btn_limpiar; ?>">Limpiar</button>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<button type="submit" name="ejecutar" id="ejecutar" value="filtrar" class="<?php echo $obj_edo->btn_enviar; ?>">Filtrar</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

<?php 
	
	pie();

?>