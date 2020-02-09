<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/empresa.class.php");

	$obj_emp = new empresa;
	$obj_emp->estandar();

	$obj_emp->asignar_valor();
	$obj_emp->puntero=$obj_emp->listar_modificar();
	$empresa=$obj_emp->extraer_dato();
	
	encabezado("Modificar datos de la empresa - ALCOR C.A.");

?>

	<div class="<?php echo $obj_emp->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_emp->btn_atras; ?>" onClick="window.location.href='emp_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_emp->card; ?>" style="width: 40rem">
			<h2 class="<?php echo $obj_emp->titulocard; ?>">Modificar datos de la empresa</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/empresa.php" method="POST">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<input type="hidden" name="cod_emp" id="cod_emp" value="<?php echo $empresa['cod_emp']; ?>">
								<label for="nom_emp" class="<?php echo $obj_emp->for; ?>">Nombre:</label>
								<input type="text" name="nom_emp" id="nom_emp" placeholder="Nombre:" minlength="3" maxlength="50" required="" value="<?php echo $empresa['nom_emp']; ?>" class="<?php echo $obj_emp->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="tel_emp" class="<?php echo $obj_emp->for; ?>">Teléfono:</label>
								<input type="text" name="tel_emp" id="tel_emp" placeholder="Teléfono:" minlength="11" maxlength="13" required="" value="<?php echo $empresa['tel_emp']; ?>" class="<?php echo $obj_emp->input_normal; ?>">
								<small id="hou_emp" class="<?php echo $obj_emp->small; ?>">Ejemplo: +584147528826</small>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="rif_emp" class="<?php echo $obj_emp->for; ?>">RIF:</label>
								<input type="text" name="rif_emp" id="rif_emp" placeholder="RIF:" minlength="12" maxlength="12" required="" value="<?php echo $empresa['rif_emp']; ?>" class="<?php echo $obj_emp->input_normal; ?>">
								<small id="rif_emp" class="<?php echo $obj_emp->small; ?>">Ejemplo: J-30161557-3</small>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="dir_emp" class="<?php echo $obj_emp->for; ?>">Dirección:</label>
								<input type="text" name="dir_emp" id="dir_emp" placeholder="Dirección:" minlength="3" maxlength="100" required="" value="<?php echo $empresa['dir_emp']; ?>" class="<?php echo $obj_emp->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="cor_emp" class="<?php echo $obj_emp->for; ?>">Correo:</label>
								<input type="text" name="cor_emp" id="cor_emp" placeholder="Correo:" minlength="3" maxlength="100" required="" value="<?php echo $empresa['cor_emp']; ?>" class="<?php echo $obj_emp->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="hou_emp" class="<?php echo $obj_emp->for; ?>">Horario Uno:</label>
								<input type="text" name="hou_emp" id="hou_emp" placeholder="Horario Uno:" minlength="19" maxlength="19" required="" value="<?php echo $empresa['hou_emp']; ?>" class="<?php echo $obj_emp->input_normal; ?>">
								<small id="hou_emp" class="<?php echo $obj_emp->small; ?>">Ejemplo: 08:00 AM - 12:00 PM</small>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="hod_emp" class="<?php echo $obj_emp->for; ?>">Horario Dos:</label>
								<input type="text" name="hod_emp" id="hod_emp" placeholder="Horario Dos:" minlength="19" maxlength="19" value="<?php echo $empresa['hod_emp']; ?>" class="<?php echo $obj_emp->input_normal; ?>">
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
								<button type="submit" name="ejecutar" id="ejecutar" value="modificar_normal" class="<?php echo $obj_emp->btn_enviar; ?>">Modificar</button>
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