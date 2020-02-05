<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/opcion.class.php");

	$obj_opc = new opcion;
	$obj_opc->estandar();

	encabezado("Registrar opcion - ALCOR C.A.");

?>

	<div class="<?php echo $obj_opc->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_opc->btn_atras; ?>" onClick="window.location.href='rol_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_opc->card; ?>" style="width: 40rem">
			<h2 class="<?php echo $obj_opc->titulocard; ?>">Registrar opcion</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/opcion.php" method="POST">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="nom_opc" class="<?php echo $obj_opc->for; ?>">Nombre:</label>
								<input type="text" name="nom_opc" id="nom_opc" placeholder="Nombre:" minlength="3" maxlength="20" required="" class="<?php echo $obj_opc->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="des_opc" class="<?php echo $obj_opc->for; ?>">Descripción:</label>
								<input type="text" name="des_opc" id="des_opc" placeholder="Descripción:" minlength="3" maxlength="50" required="" class="<?php echo $obj_opc->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="url_opc" class="<?php echo $obj_opc->for; ?>">URL:</label>
								<input type="text" name="url_opc" id="url_opc" placeholder="URL:" minlength="3" maxlength="100" required="" class="<?php echo $obj_opc->input_normal; ?>">
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
								<button type="submit" name="ejecutar" id="ejecutar" value="insertar" class="<?php echo $obj_opc->btn_enviar; ?>">Registrar</button>
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