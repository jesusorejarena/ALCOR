<?php

require_once("tema_login.php");

headerr("Registrate");

?>

<div class="container-fluid px-4 px-xl-5 mb-5">
	<div class="row">
		<div class="col-12">
			<div id="section1" class="container bg-light shadow-lg my-3 px-4 py-5 my-xl-3 px-xl-5 py-xl-5">
				<div class="row">
					<div class="d-none d-xl-flex col-xl-6 align-items-center">
						<img class="img-fluid" src="../img/undraw_career_progress_ivdb.svg" alt="Fasty" width="100%">
					</div>
					<div class="col-12 col-xl-6">
						<div class="row my-4">
							<div class="col-12">
								<h1 class="text-center text-primary font-weight-bold">Registrate</h1>
							</div>
						</div>
						<div class="row my-3">
							<div class="col-12 px-5">
								<form action="../../backend/controller/usuario.php" method="POST" class="was-validation" id="formulario" novalidate>
									<div class="row">
										<div class="col-12 col-xl-6">
											<div class="form-group">
												<label for="nombre">Nombre(s):</label>
												<input id="nombre" class="form-control" type="text" name="nom_usu" placeholder='Nombre(s)'>
												<small id="nombreDiv" class="invalid-feedback"></small>
											</div>
										</div>
										<div class="col-12 col-xl-6">
											<div class="form-group">
												<label for="apellido">Apellido(s):</label>
												<input id="apellido" class="form-control" type="text" name="ape_usu" placeholder='Apellido(s)'>
												<small id="apellidoDiv" class="invalid-feedback"></small>
											</div>
										</div>
										<div class="col-12 col-xl-6">
											<div class="form-group">
												<label for="cedula">Cédula:</label>
												<input id="cedula" class="form-control" type="text" name="ced_usu" placeholder='Cédula'>
												<small id="cedulaDiv" class="invalid-feedback"></small>
											</div>
										</div>
										<div class="col-12 col-xl-6">
											<div class="form-group">
												<label for="telefono">Teléfono:</label>
												<input id="telefono" class="form-control" type="text" name="tel_usu" placeholder='Teléfono'>
												<small id="telefonoDiv" class="invalid-feedback"></small>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label for="nacimiento">Fecha de nacimiento:</label>
												<input id="nacimiento" class="form-control" max='<?php echo date("Y-m-d"); ?>' type="date" name="nac_usu">
												<small id="nacimientoDiv" class="invalid-feedback"></small>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label for="correo_repart">Correo electronico:</label>
												<input type="email" name="cor_usu" id="correo" class="form-control" placeholder="Correo" />
												<small id="correoDiv" class="invalid-feedback"></small>
											</div>
										</div>
										<div class="col-12 col-xl-6">
											<div class="form-group">
												<label for="contra_repart">Ingrese una contraseña:</label>
												<div class="input-group mb-3">
													<input type="password" name="cla_usu" id="contrasena" class="form-control" placeholder="Contraseña" />
													<div class="input-group-append">
														<button class="btn btn-outline-primary" type="button" id="ShowPassword"><i id="iconEye" class="fas fa-eye"></i></button>
													</div>
													<small id="contrasenaDiv" class="invalid-feedback"></small>
												</div>
											</div>
										</div>
										<div class="col-12 col-xl-6">
											<div class="form-group">
												<label for="repetirContrasena">Repita la contraseña:</label>
												<input type="password" id="repetirContrasena" class="form-control" placeholder="Repetir contraseña" />
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
									<div class="row justify-content-end">
										<div class="col-12">
											<small class="form-text text-right text-muted">¿Ya tienes cuenta? <a href="usu_login.php">Ingresa ahora</a>.</small>
										</div>
									</div>
									<div class="pt-4 text-center">
										<button class="btn btn-outline-primary" name="run" value="createClient">Registrarse</button>
									</div>
								</form>
								<div class="py-4 text-center">
									<small>
										<a href="usu_finalizar_registro.php">Si ya te registro un administrador y es la primera vez que vas a ingresar, termina de
											configurar tu cuenta aqui.</a>
									</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Termina el body -->

<?php

footer();

?>