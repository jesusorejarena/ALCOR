<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/opcion.class.php");
	require_once("../../backend/clase/modulo.class.php");

	$obj_opc = new opcion;
	$obj_opc->estandar();

	$cod_opc=$_REQUEST['cod_opc'];

	$obj_opc->asignar_valor();
	$obj_opc->puntero=$obj_opc->listar_modificar();
	$opcion=$obj_opc->extraer_dato();

	$obj_mod = new modulo;
	$obj_mod->puntero=$obj_mod->listar_normal();

	encabezado("Modificar opcion - ALCOR C.A.");

?>

	<div class="<?php echo $obj_opc->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_opc->btn_atras; ?>" onClick="window.location.href='rol_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_opc->card; ?>" style="width: 40rem">
			<h2 class="<?php echo $obj_opc->titulocard; ?>">Modificar opcion</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/opcion.php" method="POST">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<input type="hidden" name="cod_opc" id="cod_opc" value="<?php echo $opcion['cod_opc']; ?>">
								<div class="form-group">
								<label for="cod_mod" class="<?php echo $obj_opc->for; ?>">Modulo:</label>
								<select name="cod_mod" id="cod_mod" required="" class="<?php echo $obj_opc->input_normal; ?>">
									<option value="">Seleccione...</option>
									<?php while (($modulo=$obj_mod->extraer_dato())>0)
										{
											$select=($opcion['cod_mod']==$modulo['cod_mod']) ? "selected" : "" ;
											echo "<option $select value='$modulo[cod_mod]'>$modulo[nom_mod]</option>";
										}
									?>
								</select>
							</div>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="acc_opc" class="<?php echo $obj_opc->for; ?>">Descripción:</label>
								<select name="acc_opc" id="acc_opc" required="" class="<?php echo $obj_opc->input_normal; ?>">
									<option value="">Seleccione...</option>
									<?php $seleccionado=($opcion["acc_opc"]=="Registrar")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="Registrar">Registrar</option>
									<?php $seleccionado=($opcion["acc_opc"]=="Modificar")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="Modificar">Modificar</option>
									<?php $seleccionado=($opcion["acc_opc"]=="Listar")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="Listar">Listar</option>
									<?php $seleccionado=($opcion["acc_opc"]=="Filtrar")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="Filtrar">Filtrar</option>
									<?php $seleccionado=($opcion["acc_opc"]=="Papelera")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="Papelera">Papelera</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="url_opc" class="<?php echo $obj_opc->for; ?>">URL:</label>
								<input type="text" name="url_opc" id="url_opc" placeholder="URL:" minlength="3" maxlength="100" required="" value="<?php echo $opcion['url_opc']; ?>" class="<?php echo $obj_opc->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3 text-center">
						<div class="col-6">
							<div class="form-group">
								<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_opc->btn_limpiar; ?>">Limpiar</button>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<button type="submit" name="ejecutar" id="ejecutar" value="modificar_normal" class="<?php echo $obj_opc->btn_enviar; ?>">Modificar</button>
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