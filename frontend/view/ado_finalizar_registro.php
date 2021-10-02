<?php

require_once("tema_login.php");
require_once("../../backend/class/preguntas.class.php");

$obj_pse = new preguntas;

headerr("Termina de Registrarte");

?>

<!-- Formulario -->
<div class="container p-3 p-md-2">
	<a class="btn btn-success btn-lg" href="ado_login.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-md-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Terminar Registro</h2>
				<form action="../../backend/controller/empleado.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="correo">Correo:</label>
									<input type="email" name="cor_ado" id="correo" class="form-control" placeholder="Correo" />
									<small id="correoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="contrasena">Contraseña:</label>
									<input type="password" name="cla_ado" id="contrasena" class="form-control" placeholder="Contraseña" />
									<small id="contrasenaDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="repetirContrasena">Repite la contraseña:</label>
									<input type="password" id="repetirContrasena" class="form-control" placeholder="Repite la contraseña" />
									<small id="repetirContrasenaDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="alert alert-success">
									<b>La contraseña debe de cumplir con estos requisitos minimos:</b>
									<br>
									- Debe de tener entre 8-20 caracteres.
									<br>
									- Un carácter en mayúscula.
									<br>
									- Un carácter en miniscula.
									<br>
									- Un carácter especial. Permitidos <strong>.*/#$%&amp;¡!_\-,@:;?¿</strong>
									<br>
									- Al menos un digito.
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="pregunta1">Primera pregunta:</label>
									<select name="fky_preseg1" id="pregunta1" class="form-control">
										<option value="">Seleccione...</option>
										<?php $obj_pse->puntero = $obj_pse->getPartOne();
										while (($pregunta1 = $obj_pse->extractData()) > 0) {
											echo "<option value='$pregunta1[cod_pse]'>$pregunta1[nom_pse]</option>";
										}
										?>
									</select>
									<small id="pregunta1Div" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="respuesta1">Primera respuesta:</label>
									<input type="text" name="re1_ado" id="respuesta1" class="form-control" placeholder="Primera respuesta" />
									<small id="respuesta1Div" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="pregunta2">Segunda pregunta:</label>
									<select name="fky_preseg2" id="pregunta2" class="form-control">
										<option value="">Seleccione...</option>
										<?php $obj_pse->puntero = $obj_pse->getPartTwo();
										while (($pregunta2 = $obj_pse->extractData()) > 0) {
											echo "<option value='$pregunta2[cod_pse]'>$pregunta2[nom_pse]</option>";
										}
										?>
									</select>
									<small id="pregunta2Div" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="respuesta2">Segunda respuesta:</label>
									<input type="text" name="re2_ado" id="respuesta2" class="form-control" placeholder="Segunda respuesta" />
									<small id="respuesta2Div" class="invalid-feedback"></small>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between">
						<button type="reset" class="btn btn-success">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="finishRegistration">Registrarme</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="../js/validaciones.js"></script>

<?php

footer();

?>