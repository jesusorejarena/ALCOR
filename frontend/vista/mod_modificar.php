<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/modulo.class.php");
	require_once("../../backend/clase/cargo.class.php");

	$obj_mod = new modulo;
	$obj_mod->estandar();

	$cod_mod=$_REQUEST['cod_mod'];

	$obj_mod->asignar_valor();
	$obj_mod->puntero=$obj_mod->listar_modificar();
	$modulo=$obj_mod->extraer_dato();

	$obj_car = new cargo;

	$obj_car->puntero=$obj_car->listar_normal();
	$cargo=$obj_car->extraer_dato();

	encabezado("Modificar Módulo");

	comprobar("Roles");

?>

	<div class="<?php echo $obj_mod->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_mod->btn_atras; ?>" onClick="window.location.href='rol_menu.php'"><i class="icon ion-md-arrow-round-back"></i></button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_mod->card; ?>">
					<h2 class="<?php echo $obj_mod->titulocard; ?>">Modificar Módulo</h2>
					<hr>
					<div class="card-body">
						<form action="../../backend/controlador/modulo.php" method="POST">
							<div class="row p-3">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<input type="hidden" name="cod_mod" id="cod_mod" value="<?php echo $modulo['cod_mod']; ?>">
										<label for="url_mod" class="<?php echo $obj_mod->for; ?>">URL:</label>
										<select name="url_mod" id="url_mod" disabled="" required="" class="<?php echo $obj_mod->input_normal; ?>">
											<?php echo "<option value='$modulo[url_mod]'>Menú de $modulo[nom_mod]</option>"; ?>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
									<label for="est_mod" class="<?php echo $obj_mod->for; ?>">Estatus:</label>
										<select name="est_mod" id="est_mod" required="" class="<?php echo $obj_mod->input_normal; ?>">
											<option value="">Seleccione...</option>
											<?php $seleccionado=($modulo["est_mod"]=="A")?"selected":""; ?>
											<option <?php echo $seleccionado; ?> value="A">Activo</option>
											<?php $seleccionado=($modulo["est_mod"]=="I")?"selected":""; ?>
											<option <?php echo $seleccionado; ?> value="I">Inactivo</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row p-3 text-center">
								<div class="col-6">
									<div class="form-group">
										<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_mod->btn_limpiar; ?>">Limpiar</button>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<button type="submit" name="ejecutar" id="ejecutar" value="modificar_normal" class="<?php echo $obj_mod->btn_enviar; ?>">Modificar</button>
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