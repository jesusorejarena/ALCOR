<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/modulo.class.php");
	require_once("../../backend/clase/cargo.class.php");
	require_once("../../backend/clase/opcion.class.php");

	$obj_mod = new modulo;
	$obj_mod->estandar();
	$obj_mod->puntero=$obj_mod->listar_normal();

	$obj_car = new cargo;
	$obj_car->puntero=$obj_car->listar_normal();

	$obj_opc = new opcion;
	$obj_opc->puntero=$obj_opc->listar_normal();

	encabezado("Registrar modulo - ALCOR C.A.");

?>

	<div class="<?php echo $obj_mod->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_mod->btn_atras; ?>" onClick="window.location.href='rol_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_mod->card; ?>" style="width: 40rem">
			<h2 class="<?php echo $obj_mod->titulocard; ?>">Registrar modulo</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/modulo.php" method="POST">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="cod_car" class="<?php echo $obj_mod->for; ?>">Cargo:</label>
								<select name="cod_car" id="cod_car" required="" class="<?php echo $obj_mod->input_normal; ?>">
									<option value="">Seleccione...</option>
									<?php while (($cargo=$obj_car->extraer_dato())>0)
										{
											echo "<option value='$cargo[cod_car]'>$cargo[nom_car]</option>";
										}
									?>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="cod_opc" class="<?php echo $obj_mod->for; ?>">Opción:</label>
								<select name="cod_opc" id="cod_opc" required="" class="<?php echo $obj_mod->input_normal; ?>">
									<option value="">Seleccione...</option>
									<?php while (($opcion=$obj_opc->extraer_dato())>0)
										{
											echo "<option value='$opcion[cod_opc]'>$opcion[nom_opc] - $opcion[acc_opc]</option>";
										}
									?>
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
								<button type="submit" name="ejecutar" id="ejecutar" value="insertar" class="<?php echo $obj_mod->btn_enviar; ?>">Registrar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php 
	
	pie();

?>