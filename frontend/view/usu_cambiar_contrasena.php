<?php

require_once("tema_session.php");

headerr("Cambiar contraseña");

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-outline-primary btn-lg" href="usu_inicio.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Cambiar contraseña</h2>
				<form action="../../backend/controller/usuario.php" method="POST" class="was-validation" id="formulario" novalidate>
					<input type="hidden" name="cod_usu" value="<?php echo $_SESSION['codigo']; ?>">
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="contrasena">Nueva contraseña:</label>
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
									<label for="repetirContrasena">Repite la nueva contraseña:</label>
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
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="reset" class="btn btn-outline-primary">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="changePassword">Cambiar contraseña</button>
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