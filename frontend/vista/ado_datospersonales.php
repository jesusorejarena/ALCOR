<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/empleado.class.php");

	$obj_ado = new empleado;
	$obj_ado->estandar();	

	encabezado("Modificar Empleado");

	$obj_ado->asignar_valor();
	$obj_ado->cod_ado=$_SESSION['codigo'];
	$obj_ado->puntero=$obj_ado->listar_modificar();
	$empleado=$obj_ado->extraer_dato();

?>

	<div class="<?php echo $obj_ado->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_ado->btn_atras; ?>" onClick="window.location.href='menu_principal.php'"><i class="icon ion-md-arrow-round-back"></i></button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_ado->card; ?>">
					<h2 class="<?php echo $obj_ado->titulocard; ?>">Modificar Datos</h2>
					<hr>
					<div class="card-body">
						<form action="../../backend/controlador/empleado.php" method="POST">
							<div class="row p-3">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<input type="hidden" name="cod_ado" id="cod_ado" value="<?php echo $empleado['cod_ado']; ?>">
										<label for="tel_ado" class="<?php echo $obj_ado->for; ?>">Teléfono:</label>
										<input type="text" name="tel_ado" id="tel_ado" placeholder="Teléfono:" minlength="11" maxlength="11" required="" pattern="[A-Za-z0-9]" value="<?php echo $empleado['tel_ado']; ?>"  class="<?php echo $obj_ado->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group">
										<label for="cor_ado" class="<?php echo $obj_ado->for; ?>">Correo:</label>
										<input type="email" name="cor_ado" id="cor_ado" placeholder="Correo:" minlength="1" maxlength="100" required="" value="<?php echo $empleado['cor_ado']; ?>"  class="<?php echo $obj_ado->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="dir_ado" class="<?php echo $obj_ado->for; ?>">Dirección:</label>
										<input type="text" name="dir_ado" id="dir_ado" placeholder="Dirección:" minlength="3" maxlength="100" required="" pattern="[A-Za-z0-9]" value="<?php echo $empleado['dir_ado']; ?>"  class="<?php echo $obj_ado->input_normal; ?>">
									</div>
								</div>
							</div>
							<div class="row p-3 text-center">
								<div class="col-6">
									<div class="form-group">
										<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_ado->btn_limpiar; ?>">Limpiar</button>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<button type="submit" name="ejecutar" id="ejecutar" value="modificar_datos" class="<?php echo $obj_ado->btn_enviar; ?>">Modificar</button>
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
	
	pie();

?>