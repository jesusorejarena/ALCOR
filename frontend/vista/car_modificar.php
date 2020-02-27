<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();

	$cod_car=$_REQUEST['cod_car'];

	$obj_car->asignar_valor();
	$obj_car->puntero=$obj_car->listar_modificar();
	$cargo=$obj_car->extraer_dato();

	encabezado("Modificar Cargo");

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
			<div class="col 12 col-md-8">
				<div class="<?php echo $obj_car->card; ?>">
					<h2 class="<?php echo $obj_car->titulocard; ?>">Modificar Cargo</h2>
					<hr>
					<div class="card-body">
						<form action="../../backend/controlador/cargo.php" method="POST">
							<div class="row p-3">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input type="hidden" name="cod_car" id="cod_car" value="<?php echo $cargo['cod_car']; ?>">
										<label for="nom_car" class="<?php echo $obj_car->for; ?>">Nombre:</label>
										<input type="text" name="nom_car" id="nom_car" placeholder="Nombre:" pattern="[A-Za-z]" minlength="3" maxlength="50" require="" value="<?php echo $cargo['nom_car']; ?>" class="<?php echo $obj_car->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
									<label for="est_car" class="<?php echo $obj_car->for; ?>">Estatus:</label>
										<select name="est_car" id="est_car" required="" class="<?php echo $obj_car->input_normal; ?>">
											<option value="">Seleccione...</option>
											<?php $seleccionado=($cargo["est_car"]=="A")?"selected":""; ?>
											<option <?php echo $seleccionado; ?> value="A">Activo</option>
											<?php $seleccionado=($cargo["est_car"]=="I")?"selected":""; ?>
											<option <?php echo $seleccionado; ?> value="I">Inactivo</option>
										</select>
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
										<button type="submit" name="ejecutar" id="ejecutar" value="modificar_normal" class="<?php echo $obj_car->btn_enviar; ?>">Modificar</button>
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