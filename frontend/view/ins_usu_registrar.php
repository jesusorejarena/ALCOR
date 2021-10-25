<?php

require_once("tema_instalar.php");
require_once("../../backend/class/preguntas.class.php");

$obj_pse = new preguntas;

headerr("Instalación");

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Registrar Usuario Administrador</h2>
				<form action="../../backend/controller/instalacion.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="nombre">Nombre:</label>
									<input type="text" name="nom_usu" id="nombre" class="form-control" placeholder="Nombre" />
									<small id="nombreDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="apellido">Apellido:</label>
									<input type="text" name="ape_usu" id="apellido" class="form-control" placeholder="Apellido" />
									<small id="apellidoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="genero">Género:</label>
									<select name="gen_usu" id="genero" class="form-control">
										<option value="">Seleccione...</option>
										<option value="H">Hombre</option>
										<option value="M">Mujer</option>
									</select>
									<small id="generoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="nacimiento">Fecha de Nacimiento:</label>
									<input type="date" name="nac_usu" id="nacimiento" class="form-control" />
									<small id="nacimientoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="nacionalidad">Nacionalidad:</label>
									<select name="tip_usu" id="nacionalidad" class="form-control">
										<option value="">Seleccione...</option>
										<option value="V">Venezolano</option>
										<option value="E">Extranjero</option>
									</select>
									<small id="nacionalidadDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="cedula">Cédula:</label>
									<input type="text" name="ced_usu" id="cedula" class="form-control" placeholder="Cédula" />
									<small id="cedulaDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="direccion">Dirección:</label>
									<input type="text" name="dir_usu" id="direccion" class="form-control" placeholder="Dirección" />
									<small id="direccionDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="telefono">Teléfono:</label>
									<input type="text" name="tel_usu" id="telefono" class="form-control" placeholder="Teléfono" />
									<small id="telefonoDiv" class="invalid-feedback"></small>
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
									<input type="text" name="re1_usu" id="respuesta1" class="form-control" placeholder="Primera respuesta" />
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
									<input type="text" name="re2_usu" id="respuesta2" class="form-control" placeholder="Segunda respuesta" />
									<small id="respuesta2Div" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="correo">Correo:</label>
									<input type="text" name="cor_usu" id="correo" class="form-control" placeholder="Correo" />
									<small id="correoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="contrasena">Contraseña:</label>
									<input type="password" name="cla_usu" id="contrasena" class="form-control" placeholder="Contraseña" />
									<small id="contrasenaDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="repetirContrasena">Repite la Contraseña:</label>
									<input type="password" id="repetirContrasena" class="form-control" placeholder="Repite la Contraseña" />
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
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="reset" class="btn btn-outline-primary">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="instalacion">Guardar</button>
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