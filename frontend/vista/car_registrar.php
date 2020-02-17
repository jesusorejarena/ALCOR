<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();

	encabezado("Registrar Cargo - ALCOR C.A.");

	comprobar("Roles");

?>

	<div class="<?php echo $obj_car->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_car->btn_atras; ?>" onClick="window.location.href='rol_menu.php'"><i class="icon ion-md-arrow-round-back"></i></button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_car->card; ?>">
					<h2 class="<?php echo $obj_car->titulocard; ?>">Registrar Cargo</h2>
					<hr>
					<div class="card-body">
						<form action="../../backend/controlador/cargo.php" method="POST">
							<div class="row p-3">
								<div class="col-12">
									<div class="form-group">
										<label for="nom_car" class="<?php echo $obj_car->for; ?>">Nombre:</label>
										<input type="text" name="nom_car" id="nom_car" placeholder="Nombre: " minlength="3" maxlength="50" class="<?php echo $obj_car->input_normal; ?>">
									</div>
								</div>
							</div>
							<div class="row p-3 text-center">
								<div class="col-6">
									<div class="form-group">
										<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_car->btn_limpiar; ?>">Limpiar</button>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<button type="submit" name="ejecutar" id="ejecutar" value="insertar" class="<?php echo $obj_car->btn_enviar; ?>">Registrar</button>
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