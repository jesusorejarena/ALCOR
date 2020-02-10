<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/formulario.class.php");

	$obj_for = new formulario;
	$obj_for->estandar();

	encabezado("Filtrar formularios - ALCOR C.A.");

?>

	<div class="<?php echo $obj_for->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_for->btn_atras; ?>" onClick="window.location.href='for_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_for->card; ?>" style="width: 60rem">
			<h2 class="<?php echo $obj_for->titulocard; ?>">Filtrar formularios</h2>
			<hr>
			<div class="card-body">
				<form action="for_filtrado.php" method="POST">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="cod_ado" class="<?php echo $obj_for->for; ?>">Código:</label>
								<input type="text" name="cod_ado" id="cod_ado" placeholder="Código:" class="<?php echo $obj_for->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="nom_ado" class="<?php echo $obj_for->for; ?>">Nombre:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Nombre:" class="<?php echo $obj_for->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="ape_ado" class="<?php echo $obj_for->for; ?>">Apellido:</label>
								<input type="text" name="ape_ado" id="ape_ado" placeholder="Apellido:" class="<?php echo $obj_for->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="tel_ado" class="<?php echo $obj_for->for; ?>">Teléfono:</label>
								<input type="text" name="tel_ado" id="tel_ado" placeholder="Teléfono:" class="<?php echo $obj_for->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="cor_ado" class="<?php echo $obj_for->for; ?>">Correo:</label>
								<input type="email" name="cor_ado" id="cor_ado" placeholder="Correo:"  class="<?php echo $obj_for->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3 text-center">
						<div class="col-6">
							<div class="form-group">
								<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_for->btn_limpiar; ?>">Limpiar</button>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<button type="submit" name="ejecutar" id="ejecutar" value="filtrar" class="<?php echo $obj_for->btn_enviar; ?>">Filtrar</button>
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