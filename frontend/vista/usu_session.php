<?php	

	require("temainicio.php");
	require("../../backend/clase/empleado.class.php");

	$obj_ado = new empleado;
	$obj_ado->estandar();

	encabezado("Iniciar Sesión - ALCOR C.A.");

?>

	<div class="<?php echo $obj_ado->container; ?>">
		<div class="<?php echo $obj_ado->card; ?>" style="width: 40rem">
			<h2 class="<?php echo $obj_ado->titulocard; ?>">Iniciar Sesión</h2>
			<hr>
			<p class="<?php echo $obj_ado->subtitulocard; ?>">Solo personal de la empresa</p>
			<div class="card-body">
				<form action="../../backend/controlador/session.php" method="POST">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="ced_ado" class="text-white text-left h5">Cédula:</label>
								<input type="text" name="ced_ado" id="ced_ado" placeholder="Correo:" minlength="3" maxlength="8" require="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="cla_ado" class="text-white text-left h5">Contraseña: </label>
								<input type="password" name="cla_ado" id="cla_ado" placeholder="Contraseña:" minlength="8" maxlength="20" require="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group text-center">
								<button type="submit" name="ejecutar" value="session" class="<?php echo $obj_ado->btn_enviar; ?>" onClick="window.location.href=''">Iniciar Sesión</button>
							</div>
						</div>
					</div>					
				</form>
			</div>
			<div class="<?php echo $obj_ado->footercard; ?>"><a href="">Olvidaste tu contraseña?</a></div>
		</div>
	</div>

<?php 

	pie();

?>