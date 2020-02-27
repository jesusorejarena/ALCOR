<?php	

	//session
	
	require_once("tema_instalar.php");
	require_once("../../backend/clase/empresa.class.php");

	$obj_emp = new empresa;
	$obj_emp->estandar();

	encabezado("Registrar Datos de la Empresa");

?>

	<div class="<?php echo $obj_emp->container3; ?>">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_emp->card; ?>">
					<h2 class="<?php echo $obj_emp->titulocard; ?>">Registrar Datos de la Empresa</h2>
					<hr>
					<p class="<?php echo $obj_emp->subtitulocard; ?>">Campos opcionales con *</p>
					<div class="card-body">
						<form action="../../backend/controlador/empresa.php" method="POST">
							<div class="row p-3">
								<div class="col-12">
									<div class="form-group">
										<label for="nom_emp" class="<?php echo $obj_emp->for; ?>">Nombre:</label>
										<input type="text" name="nom_emp" id="nom_emp" placeholder="Nombre:" pattern="[A-Za-z]" minlength="3" maxlength="50" required="" class="<?php echo $obj_emp->input_normal; ?>">
									</div>
								</div>
							</div>
							<div class="row p-3">
								<div class="col-6">
									<div class="form-group">
										<label for="tel_emp" class="<?php echo $obj_emp->for; ?>">Teléfono:</label>
										<input type="text" name="tel_emp" id="tel_emp" placeholder="Teléfono:" pattern="[0-9]" minlength="11" maxlength="13" required="" class="<?php echo $obj_emp->input_normal; ?>">
										<small id="hou_emp" class="<?php echo $obj_emp->small; ?>">Ejemplo: +584147528826</small>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="rif_emp" class="<?php echo $obj_emp->for; ?>">RIF:</label>
										<input type="text" name="rif_emp" id="rif_emp" placeholder="RIF:" pattern="[A-Za-z0-9]" minlength="12" maxlength="12" required="" class="<?php echo $obj_emp->input_normal; ?>">
										<small id="rif_emp" class="<?php echo $obj_emp->small; ?>">Ejemplo: J-30161557-3</small>
									</div>
								</div>
							</div>
							<div class="row p-3">
								<div class="col-12">
									<div class="form-group">
										<label for="dir_emp" class="<?php echo $obj_emp->for; ?>">Dirección:</label>
										<input type="text" name="dir_emp" id="dir_emp" placeholder="Dirección:" pattern="[A-Za-z0-9]" minlength="3" maxlength="100" required="" class="<?php echo $obj_emp->input_normal; ?>">
									</div>
								</div>
							</div>
							<div class="row p-3">
								<div class="col-12">
									<div class="form-group">
										<label for="cor_emp" class="<?php echo $obj_emp->for; ?>">Correo:</label>
										<input type="email" name="cor_emp" id="cor_emp" placeholder="Correo:" pattern="[A-Za-z0-9]" minlength="3" maxlength="100" required="" class="<?php echo $obj_emp->input_normal; ?>">
									</div>
								</div>
							</div>
							<div class="row p-3">
								<div class="col-6">
									<div class="form-group">
										<label for="hou_emp" class="<?php echo $obj_emp->for; ?>">Horario Uno:</label>
										<input type="text" name="hou_emp" id="hou_emp" placeholder="Horario Uno:" pattern="[A-Za-z0-9]" minlength="3" maxlength="19" required="" class="<?php echo $obj_emp->input_normal; ?>">
										<small id="hou_emp" class="<?php echo $obj_emp->small; ?>">Ejemplo: 08:00 AM - 12:00 PM</small>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label for="hod_emp" class="<?php echo $obj_emp->for; ?>">Horario Dos: *</label>
										<input type="text" name="hod_emp" id="hod_emp" placeholder="Horario Dos:" pattern="[A-Za-z0-9]" minlength="3" maxlength="19" class="<?php echo $obj_emp->input_normal; ?>">
										<small id="hod_emp" class="<?php echo $obj_emp->small; ?>">Ejemplo: 02:00 PM - 06:00 PM</small>
									</div>
								</div>
							</div>
							<div class="row p-3 text-center">
								<div class="col-6">
									<div class="form-group">
										<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_emp->btn_limpiar; ?>">Limpiar</button>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<button type="submit" name="ejecutar" id="ejecutar" value="insertar" class="<?php echo $obj_emp->btn_enviar; ?>">Registrar</button>
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