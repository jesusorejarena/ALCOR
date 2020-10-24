<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");

$obj_car = new cargo;
$obj_car->classBootstrap();
$obj_car->puntero = $obj_car->getBackup();

headerr("Filtrar Empleado 'Historial'");

check("Historial");

?>

<div class="<?php echo $obj_car->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_car->btn_atras; ?>" onClick="window.location.href='menu_config.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-12 col-md-8">
			<div class="<?php echo $obj_car->card; ?>">
				<h2 class="<?php echo $obj_car->titulocard; ?>">Filtrar Empleado</h2>
				<hr>
				<div class="card-body">
					<form action="ado_filtrado.php" method="POST">
						<div class="row p-3">
							<div class="col-12 col-md-2">
								<div class="form-group">
									<label for="cod_ado" class="<?php echo $obj_car->for; ?>">Código:</label>
									<input type="text" name="cod_ado" id="cod_ado" placeholder="Código:" pattern="[0-9]+"
										class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-5">
								<div class="form-group">
									<label for="nom_ado" class="<?php echo $obj_car->for; ?>">Nombre:</label>
									<input type="text" name="nom_ado" id="nom_ado" placeholder="Nombre:"
										class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-5">
								<div class="form-group">
									<label for="ape_ado" class="<?php echo $obj_car->for; ?>">Apellido:</label>
									<input type="text" name="ape_ado" id="ape_ado" placeholder="Apellido:"
										class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="gen_ado" class="<?php echo $obj_car->for; ?>">Genero:</label>
									<select name="gen_ado" id="gen_ado" class="<?php echo $obj_car->input_normal; ?>">
										<option value="">General</option>
										<option value="H">Hombre</option>
										<option value="M">Mujer</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="tel_ado" class="<?php echo $obj_car->for; ?>">Teléfono:</label>
									<input type="text" name="tel_ado" id="tel_ado" placeholder="Teléfono:" pattern="[0-9]+"
										class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="tip_ado" class="<?php echo $obj_car->for; ?>">Tipo:</label>
									<select name="tip_ado" id="tip_ado" class="<?php echo $obj_car->input_normal; ?>">
										<option value="">General</option>
										<option value="V">Venezolano</option>
										<option value="E">Extranjero</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="ced_ado" class="<?php echo $obj_car->for; ?>">Cédula:</label>
									<input type="text" name="ced_ado" id="ced_ado" placeholder="Cédula:" pattern="[0-9]+"
										class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="cor_ado" class="<?php echo $obj_car->for; ?>">Correo:</label>
									<input type="text" name="cor_ado" id="cor_ado" placeholder="Correo:"
										class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="cod_car" class="<?php echo $obj_car->for; ?>">Cargo:</label>
									<select name="cod_car" id="cod_car" class="<?php echo $obj_car->input_normal; ?>">
										<option value="">General</option>
										<?php while (($cargo = $obj_car->extractData()) > 0) {
											echo "<option value='$cargo[cod_car]'>$cargo[nom_car]</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-12">
								<div class="form-group">
									<label for="dir_ado" class="<?php echo $obj_car->for; ?>">Dirección:</label>
									<input type="text" name="dir_ado" id="dir_ado" placeholder="Dirección:"
										class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="est_ado" class="<?php echo $obj_car->for; ?>">Activo/Inactivo:</label>
									<select name="est_ado" id="est_ado" class="<?php echo $obj_car->input_normal; ?>">
										<option value="">General</option>
										<option value="A">Activo</option>
										<option value="I">Inactivo</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="bas_ado" class="<?php echo $obj_car->for; ?>">Activo/Papelera:</label>
									<select name="bas_ado" id="bas_ado" class="<?php echo $obj_car->input_normal; ?>">
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
									<button type="reset" name="run" id="run" value="limpiar"
										class="<?php echo $obj_car->btn_limpiar; ?>">Limpiar</button>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<button type="submit" name="run" id="run" value="filter"
										class="<?php echo $obj_car->btn_enviar; ?>">Filtrar</button>
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

footer();

?>