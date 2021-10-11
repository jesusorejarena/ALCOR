<?php

require_once("tema_login.php");

headerr("Iniciar Sesión");

?>

<div class="container-fluid px-4 px-xl-5 mb-5">
	<div class="row">
		<div class="col-12">
			<div id="section1" class="container bg-light shadow-lg my-3 px-4 py-5 my-xl-3 px-xl-5 py-xl-5">
				<div class="row">
					<div class="d-none d-xl-flex col-xl-6 align-items-center">
						<img class="img-fluid" src="../img/undraw_shared_goals_3d12.svg" alt="Fasty" width="100%">
					</div>
					<div class="col-12 col-xl-6">
						<div class="row my-4">
							<div class="col-12">
								<h1 class="text-center text-primary font-weight-bold">Ingresar</h1>
							</div>
						</div>
						<div class="row my-3">
							<div class="col-12 px-5">
								<form action="../../backend/controller/session.php" method="POST" class="was-validation" novalidate>
									<div class="form-group">
										<label for="correo_repart">Correo electronico:</label>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="correo"><i class="fas fa-user"></i></span>
											</div>
											<input type="email" name="cor_usu" id="correo" class="form-control" placeholder="Correo" />
										</div>
									</div>
									<div class="form-group">
										<label for="contra_repart">Ingrese una contraseña:</label>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="contrasena"><i class="fas fa-lock"></i></span>
											</div>
											<input type="password" name="cla_usu" id="contrasena" class="form-control" placeholder="Contraseña" />
										</div>
									</div>
									<div class="row justify-content-between">
										<div class="col-12 col-xl-6">
											<small><a class="text-primary" href="usu_olvido_contrasena.php">¿Olvido su contraseña?</a></small>
										</div>
										<div class="col-12 col-xl-6">
											<small class="form-text text-right text-muted">¿No tienes cuenta? <a href="usu_signup.php">Registrate</a>.</small>
										</div>
									</div>
									<div class="pt-4 text-center">
										<button class="btn btn-outline-primary" name="run" value="session">Ingresar</button>
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

<?php

footer();

?>