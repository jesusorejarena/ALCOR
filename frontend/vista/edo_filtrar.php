<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/proveedor.class.php");

	$obj_edo = new proveedor;
	$obj_edo->estandar();
	
	encabezado("Filtrar proveedores - ALCOR C.A.");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_edo->btn_atras; ?>" onClick="window.location.href='edo_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_edo->card; ?>" style="width: 60rem">
			<h2 class="<?php echo $obj_edo->titulocard; ?>">Filtrar proveedores</h2>
			<hr>
			<div class="card-body">
				<form action="edo_filtrado.php" method="POST">
					<div class="row p-3">
						<div class="col-2">
							<div class="form-group">
								<label for="cod_edo" class="text-white text-left h5">Código:</label>
								<input type="text" name="cod_edo" id="cod_edo" placeholder="Código:" minlength="1" maxlength="11" class="<?php echo $obj_edo->input_normal; ?>">
							</div>
						</div>
						<div class="col-10">
							<div class="form-group">
								<label for="nom_edo" class="text-white text-left h5">Nombre:</label>
								<input type="text" name="nom_edo" id="nom_edo" placeholder="Nombre:" minlength="2" maxlength="50" class="<?php echo $obj_edo->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="des_edo" class="text-white text-left h5">Descripción:</label>
								<textarea name="des_edo" id="des_edo" placeholder="Descripción:" minlength="3" maxlength="100" class="<?php echo $obj_edo->input_text; ?>"></textarea>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="dir_edo" class="text-white text-left h5">Dirección:</label>
								<textarea name="dir_edo" id="dir_edo" placeholder="Dirección:" minlength="3" maxlength="100" class="<?php echo $obj_edo->input_text; ?>"></textarea>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="tel_edo" class="text-white text-left h5">Telefono:</label>
								<input type="text" name="tel_edo" id="tel_edo" placeholder="Telefono:" minlength="11" maxlength="11" class="<?php echo $obj_edo->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="cor_edo" class="text-white text-left h5">Correo:</label>
								<input type="email" name="cor_edo" id="cor_edo" placeholder="Correo:" minlength="1" maxlength="100" class="<?php echo $obj_edo->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-4">
							<div class="form-group">
								<label for="tip_edo" class="text-white text-left h5">Tipo:</label>
								<select name="tip_edo" id="tip_edo" class="<?php echo $obj_edo->input_normal; ?>">
									<option value="">Seleccione...</option>
									<option value="V">Venezolano</option>
									<option value="P">Personal</option>
									<option value="J">Juridico</option>
								</select>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="rif_edo" class="text-white text-left h5">RIF:</label>
								<input type="text" name="rif_edo" id="rif_edo" placeholder="RIF:" minlength="9" maxlength="9" class="<?php echo $obj_edo->input_normal; ?>">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="bas_ado" class="text-white text-left h5">Activo/Papelera:</label>
								<select name="bas_ado" id="bas_ado" class="<?php echo $obj_edo->input_normal; ?>">
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

<?php 
	
	pie();

?>