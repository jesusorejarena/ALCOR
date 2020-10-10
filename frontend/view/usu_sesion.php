<?php

require_once("temainicio.php");
require_once("../../backend/class/empleado.class.php");

$obj_ado = new empleado;
$obj_ado->classBootstrap();

encabezado("Iniciar Sesión");

?>

<div class="<?php echo $obj_ado->container; ?>">
	<div class="row py-4">
		<div class="col-12"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-12 col-md-6">
			<div class="<?php echo $obj_ado->card; ?>">
				<h2 class="<?php echo $obj_ado->titulocard; ?>">Iniciar Sesión</h2>
				<hr>
				<p class="<?php echo $obj_ado->subtitulocard; ?>">Solo personal de la empresa</p>
				<div class="card-body">
					<form action="../../backend/controller/sesion.php" method="POST">
						<div class="row p-3">
							<div class="col-12">
								<div class="form-group">
									<label for="cor_ado" class="<?php echo $obj_ado->for; ?>">Correo:</label>
									<input type="email" name="cor_ado" id="cor_ado" placeholder="Correo:" minlength="3" maxlength="100"
										required="" class="<?php echo $obj_ado->input_normal; ?>">
								</div>
							</div>
						</div>
						<div class="row p-3">
							<div class="col-12">
								<div class="form-group">
									<label for="cla_ado" class="<?php echo $obj_ado->for; ?>">Contraseña: </label>
									<input type="password" name="cla_ado" id="cla_ado" placeholder="Contraseña:" minlength="8"
										maxlength="20" required="" class="<?php echo $obj_ado->input_normal; ?>">
								</div>
							</div>
						</div>
						<div class="row p-3">
							<div class="col-12">
								<div class="form-group text-center">
									<button type="submit" name="run" value="session" class="<?php echo $obj_ado->btn_enviar; ?>">Iniciar
										Sesión</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="<?php echo $obj_ado->footercard; ?>"><a href="ado_olvidocontrasena.php">¿Olvidaste tu
						contraseña?</a></div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row py-4">
		<div class="col-12"></div>
	</div>
</div>

<?php

pie();

?>