<?php

	require_once("temainicio.php");
	require_once("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();

	encabezado("Contacto");

?>
	<div class="<?php echo $obj_car->container; ?>">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_car->card; ?>">
					<h2 class="<?php echo $obj_car->titulocard; ?>">¿Quieres comentarnos algo?</h2>
					<hr>
					<p class="<?php echo $obj_car->subtitulocard; ?>">Campos opcionales con *</p>
					<div class="card-body">
						<form action="../../backend/controlador/formulario.php" method="POST">
							<div class="row p-3">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="nom_for" class="<?php echo $obj_car->for; ?>">Nombre: *</label>
										<input type="text" name="nom_for" id="nom_for" placeholder="Nombre:" minlength="3" maxlength="50" class="<?php echo $obj_car->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="ape_for" class="<?php echo $obj_car->for; ?>">Apellido: *</label>
										<input type="text" name="ape_for" id="ape_for" placeholder="Apellido:" minlength="3" maxlength="50" class="<?php echo $obj_car->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="tel_for" class="<?php echo $obj_car->for; ?>">Telefono: *</label>
										<input type="text" name="tel_for" id="tel_for" placeholder="Telefono:" minlength="11" maxlength="11" class="<?php echo $obj_car->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cor_for" class="<?php echo $obj_car->for; ?>">Correo:</label>
										<input type="email" name="cor_for" id="cor_for" placeholder="Correo:" minlength="3" maxlength="100" required="" class="<?php echo $obj_car->input_normal; ?>">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="asu_for" class="<?php echo $obj_car->for; ?>">Asunto:</label>
										<textarea name="asu_for" id="asu_for" placeholder="Asunto:" minlength="10" maxlength="100" required="" class="<?php echo $obj_car->input_text; ?>" rows="3"></textarea>
									</div>
								</div>
							</div>
							<div class="row p-3">
								<div class="col-12">
									<div class="form-group text-center">
										<button type="submit" name="ejecutar" value="insertar" class="<?php echo $obj_car->btn_enviar; ?>">Enviar</button>
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