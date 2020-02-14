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

	encabezado("Modificar Módulo - ALCOR C.A.");

?>

	<div class="<?php echo $obj_mod->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_mod->btn_atras; ?>" onClick="window.location.href='rol_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_mod->card; ?>" style="width: 40rem">
			<h2 class="<?php echo $obj_mod->titulocard; ?>">Modificar Módulo</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/modulo.php" method="POST">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="cod_car" class="<?php echo $obj_mod->for; ?>">Cargo:</label>
								<select name="cod_car" id="cod_car" required="" class="<?php echo $obj_mod->input_normal; ?>">
									<option value="">Seleccione...</option>
									<?php while (($cargo=$obj_car->extraer_dato())>0)
										{
											$select=($modulo['cod_car']==$cargo['cod_car']) ? "selected" : "" ;
											echo "<option $select value='$cargo[cod_car]'>$cargo[nom_car]</option>";
										}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<input type="hidden" name="cod_mod" id="cod_mod" value="<?php echo $modulo['cod_mod']; ?>">
								<label for="nom_mod" class="<?php echo $obj_mod->for; ?>">Nombre:</label>
								<input type="text" name="nom_mod" id="nom_mod" placeholder="Nombre:" minlength="3" maxlength="20" required="" value="<?php echo $modulo['nom_mod']; ?>" class="<?php echo $obj_mod->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="url_mod" class="<?php echo $obj_mod->for; ?>">URL:</label>
								<input type="text" name="url_mod" id="url_mod" placeholder="URL:" minlength="3" maxlength="100" required="" value="<?php echo $modulo['url_mod']; ?>" class="<?php echo $obj_mod->input_normal; ?>">
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

<?php 
	
	pie();

?>