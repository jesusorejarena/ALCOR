<?php	

	//session
	
	require_once("tema_instalar.php");
	require_once("../../backend/clase/empleado.class.php");

	$obj_ado = new empleado;
	$obj_ado->estandar();

	encabezado("Instalación - ALCOR C.A.");

?>

	<div class="<?php echo $obj_ado->container3; ?>">
		<div class="<?php echo $obj_ado->card; ?>" style="width: 40rem">
			<h2 class="<?php echo $obj_ado->titulocard; ?>">Registrar Empleado Administrador</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/instalacion.php" method="POST">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="nom_ado" class="<?php echo $obj_ado->for; ?>">Nombre:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Nombre:" minlength="3" maxlength="50" required="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="ape_ado" class="<?php echo $obj_ado->for; ?>">Apellido:</label>
								<input type="text" name="ape_ado" id="ape_ado" placeholder="Apellido:" minlength="3" maxlength="50" required="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="gen_ado" class="<?php echo $obj_ado->for; ?>">Genero:</label>
								<select name="gen_ado" id="gen_ado" required="" class="<?php echo $obj_ado->input_normal; ?>">
									<option value="">Seleccione...</option>
									<option value="H">Hombre</option>
									<option value="M">Mujer</option>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="nac_ado" class="<?php echo $obj_ado->for; ?>">Fecha de nacimiento:</label>
								<input type="date" name="nac_ado" id="nac_ado" placeholder="Fecha de nacimiento:" required="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-4">
							<div class="form-group">
								<label for="tip_ado" class="<?php echo $obj_ado->for; ?>">Nacionalidad:</label>
								<select name="tip_ado" id="tip_ado" required="" class="<?php echo $obj_ado->input_normal; ?>">
									<option value="">Seleccione...</option>
									<option value="V">Venezolano</option>
									<option value="E">Extranjero</option>
								</select>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="ced_ado" class="<?php echo $obj_ado->for; ?>">Cédula:</label>
								<input type="text" name="ced_ado" id="ced_ado" placeholder="Cédula:" minlength="1" maxlength="8" required="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="tel_ado" class="<?php echo $obj_ado->for; ?>">Teléfono:</label>
								<input type="text" name="tel_ado" id="tel_ado" placeholder="Teléfono:" minlength="11" maxlength="11" required="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="cor_ado" class="<?php echo $obj_ado->for; ?>">Correo:</label>
								<input type="email" name="cor_ado" id="cor_ado" placeholder="Correo:" minlength="1" maxlength="100" required="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="cla_ado" class="<?php echo $obj_ado->for; ?>">Clave:</label>
								<input type="password" name="cla_ado" id="cla_ado" placeholder="Clave:" minlength="8" maxlength="20" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="cla_ado" class="<?php echo $obj_ado->for; ?>">Repita la clave:</label>
								<input type="password" name="cla_ado" id="cla_ado" placeholder="Repita la clave:" minlength="8" maxlength="20" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="dir_ado" class="<?php echo $obj_ado->for; ?>">Dirección:</label>
								<input type="text" name="dir_ado" id="dir_ado" placeholder="Dirección:" minlength="3" maxlength="100" required="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3 text-center">
						<div class="col-6">
							<div class="form-group">
								<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_ado->btn_limpiar; ?>">Limpiar</button>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<button type="submit" name="ejecutar" id="ejecutar" value="instalacion" class="<?php echo $obj_ado->btn_enviar; ?>">Siguiente</button>
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