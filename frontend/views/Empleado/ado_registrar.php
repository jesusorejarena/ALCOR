<?php

require_once("tema_session.php");
require_once("../../backend/class/cargo.class.php");

$obj_car = new cargo;
$obj_car->classBootstrap();
$obj_car->puntero = $obj_car->getAllActive();

headerr("Registrar Empleado");

check("Empleados");

?>

<script src="../js/ado.validacion.js"></script>

<div class="<?php echo $obj_car->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_car->btn_atras; ?>" onClick="window.location.href='ado_menu.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-12 col-md-8">
			<div class="<?php echo $obj_car->card; ?>">
				<h2 class="<?php echo $obj_car->titulocard; ?>">Registrar Empleado</h2>
				<hr>
				<div class="card-body">
					<form action="../../backend/controller/empleado.php" method="POST">
						<div class="row p-3">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="nom_ado" class="<?php echo $obj_car->for; ?>">Nombre:</label>
									<input type="text" name="nom_ado" id="nom_ado" placeholder="Nombre:" minlength="3" maxlength="50"
										required="" class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="ape_ado" class="<?php echo $obj_car->for; ?>">Apellido:</label>
									<input type="text" name="ape_ado" id="ape_ado" placeholder="Apellido:" minlength="3" maxlength="50"
										required="" class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="gen_ado" class="<?php echo $obj_car->for; ?>">Genero:</label>
									<select name="gen_ado" id="gen_ado" required="" class="<?php echo $obj_car->input_normal; ?>">
										<option value="">Seleccione...</option>
										<option value="H">Hombre</option>
										<option value="M">Mujer</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="nac_ado" class="<?php echo $obj_car->for; ?>">Fecha de nacimiento:</label>
									<input type="date" name="nac_ado" id="nac_ado" placeholder="Fecha de nacimiento:" required=""
										class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="tip_ado" class="<?php echo $obj_car->for; ?>">Nacionalidad:</label>
									<select name="tip_ado" id="tip_ado" required="" class="<?php echo $obj_car->input_normal; ?>">
										<option value="">Seleccione...</option>
										<option value="V">Venezolano</option>
										<option value="E">Extranjero</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="ced_ado" class="<?php echo $obj_car->for; ?>">Cédula:</label>
									<input type="text" name="ced_ado" id="ced_ado" placeholder="Cédula:" minlength="1" maxlength="8"
										required="" pattern="[0-9]+" class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="tel_ado" class="<?php echo $obj_car->for; ?>">Teléfono:</label>
									<input type="text" name="tel_ado" id="tel_ado" placeholder="Teléfono:" minlength="11" maxlength="11"
										required="" pattern="[0-9]+" class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="cor_ado" class="<?php echo $obj_car->for; ?>">Correo:</label>
									<input type="email" name="cor_ado" id="cor_ado" placeholder="Correo:" minlength="1" maxlength="100"
										required="" class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="cod_car" class="<?php echo $obj_car->for; ?>">Cargo:</label>
									<select name="cod_car" id="cod_car" required="" class="<?php echo $obj_car->input_normal; ?>">
										<option value="">Seleccione...</option>
										<?php while (($cargo = $obj_car->extractData()) > 1) {
											if ($cargo['cod_car'] == 1 || $cargo['nom_car'] == 'Administrador') {
											} else {
												echo "<option value='$cargo[cod_car]'>$cargo[nom_car]</option>";
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="cla_ado" class="<?php echo $obj_car->for; ?>">Clave:</label>
									<input type="password" name="cla_ado" id="cla_ado" placeholder="Clave:" minlength="8" maxlength="20"
										required="" class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="dir_ado" class="<?php echo $obj_car->for; ?>">Dirección:</label>
									<input type="text" name="dir_ado" id="dir_ado" placeholder="Dirección:" minlength="3" maxlength="100"
										required="" class="<?php echo $obj_car->input_normal; ?>">
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
									<button type="submit" name="run" id="run" value="create"
										class="<?php echo $obj_car->btn_enviar; ?>">Registrar</button>
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