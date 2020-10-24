<?php

require_once("tema_inicio.php");
require_once("../../backend/class/empleado.class.php");

$obj_ado = new empleado;
$obj_ado->classBootstrap();

headerr("Cambiar Contraseña");

?>

<div class="<?php echo $obj_ado->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_ado->btn_atras; ?>" onClick="window.location.href='usu_login.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-12 col-md-6">
			<div class="<?php echo $obj_ado->card; ?>">
				<h2 class="<?php echo $obj_ado->titulocard; ?>">Cambiar Contraseña</h2>
				<hr>
				<p class="<?php echo $obj_ado->subtitulocard; ?>">Ingrese los datos tal cual fueron agregados</p>
				<div class="card-body">
					<form action="../../backend/controller/empleado.php" method="POST">
						<div class="row p-3">
							<div class="col-12">
								<div class="form-group">
									<label for="cor_ado" class="<?php echo $obj_ado->for; ?>">Correo:</label>
									<input type="email" name="cor_ado" id="cor_ado" placeholder="Correo:" minlength="1" maxlength="100"
										required="" class="<?php echo $obj_ado->input_normal; ?>">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="ced_ado" class="<?php echo $obj_ado->for; ?>">Cédula:</label>
									<input type="text" name="ced_ado" id="ced_ado" placeholder="Cédula:" minlength="8" maxlength="8"
										required="" pattern="[0-9]+" class="<?php echo $obj_ado->input_normal; ?>">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="tel_ado" class="<?php echo $obj_ado->for; ?>">Teléfono:</label>
									<input type="text" name="tel_ado" id="tel_ado" placeholder="Teléfono:" minlength="11" maxlength="11"
										required="" pattern="[0-9]+" class="<?php echo $obj_ado->input_normal; ?>">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="nac_ado" class="<?php echo $obj_ado->for; ?>">Fecha de Nacimiento:</label>
									<input type="date" name="nac_ado" id="nac_ado" placeholder="Fecha de Nacimiento:" minlength="3"
										maxlength="100" required="" class="<?php echo $obj_ado->input_normal; ?>">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="cla_ado" class="<?php echo $obj_ado->for; ?>">Ingrese la Nueva Contraseña:</label>
									<input type="password" name="cla_ado" id="cla_ado" placeholder="Ingrese la Nueva Contraseña:"
										minlength="8" maxlength="20" required="" class="<?php echo $obj_ado->input_normal; ?>">
								</div>
							</div>
						</div>
						<div class="row p-3 text-center">
							<div class="col-6">
								<div class="form-group">
									<button type="reset" name="run" id="run" value="limpiar"
										class="<?php echo $obj_ado->btn_limpiar; ?>">Limpiar</button>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<button type="submit" name="run" id="run" value="check_datos"
										class="<?php echo $obj_ado->btn_enviar; ?>">Cambiar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<?php

footer();

?>