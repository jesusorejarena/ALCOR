<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/opcion.class.php");

	$obj_opc = new opcion;
	$obj_opc->estandar();

	$cod_opc=$_REQUEST['cod_opc'];

	$obj_opc->asignar_valor();
	$obj_opc->puntero=$obj_opc->listar_modificar();
	$opcion=$obj_opc->extraer_dato();

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
								<label for="nom_opc" class="<?php echo $obj_opc->for; ?>">Nombre:</label>
								<input type="text" name="nom_opc" id="nom_opc" placeholder="Nombre:" minlength="3" maxlength="20" required="" value="<?php echo $opcion['nom_opc']; ?>" class="<?php echo $obj_opc->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="acc_opc" class="<?php echo $obj_opc->for; ?>">Descripción:</label>
								<input type="text" name="acc_opc" id="acc_opc" placeholder="Descripción:" minlength="3" maxlength="50" required="" value="<?php echo $opcion['acc_opc']; ?>" class="<?php echo $obj_opc->input_normal; ?>">
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