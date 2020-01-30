<?php 

	require("tema.php");
	require("../../backend/clase/empleado.class.php");

	$obj_ado = new empleado;
	$obj_ado->estandar();

	encabezado("Iniciar Sesión - ALCOR C.A.");

?>

	<div class="<?php echo $obj_ado->container; ?>">
		<div class="card mx-auto bg-dark border border-primary shadow-lg" style="width: 40rem">
			<h2 class="card-title text-white text-center pt-4">Iniciar Sesión</h2>
			<hr>
			<p class="card-subtitle text-muted px-5 text-right">Solo personal de la empresa</p>
			<div class="card-body">
				<form action="../../backend/controlador/empleado.php">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="ced_usu" class="text-white text-left h5">Cédula:</label>
								<input type="text" name="ced_usu" id="ced_usu" placeholder="Correo:" minlength="3" maxlength="8" require="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="cla_usu" class="text-white text-left h5">Contraseña: </label>
								<input type="password" name="cla_usu" id="cla_usu" placeholder="Contraseña:" minlength="8" maxlength="20" require="" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group text-center">
								<button class="<?php echo $obj_ado->btn_atras; ?> btn-lg" onClick="window.location.href=''">Iniciar Sesión</button>
							</div>
						</div>
					</div>					
				</form>
			</div>
			<div class="card-footer text-right"><a href="">Olvidaste tu contraseña?</a></div>
		</div>
	</div>

<?php 

	pie();

?>