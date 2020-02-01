<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/formulario.class.php");

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
				<form action="ado_filtrado.php" method="POST">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="cod_ado" class="text-white text-left h5">Código:</label>
								<input type="text" name="cod_ado" id="cod_ado" placeholder="Código:" minlength="1" maxlength="11" class="<?php echo $obj_for->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="cre_ado" class="text-white text-left h5">Fecha de creado:</label>
								<input type="date" name="cre_ado" id="cre_ado" placeholder="Fecha de nacimiento:" class="<?php echo $obj_for->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="nom_ado" class="text-white text-left h5">Nombre:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Nombre:" minlength="3" maxlength="50" class="<?php echo $obj_for->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="ape_ado" class="text-white text-left h5">Apellido:</label>
								<input type="text" name="ape_ado" id="ape_ado" placeholder="Apellido:" minlength="3" maxlength="50" class="<?php echo $obj_for->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="tel_ado" class="text-white text-left h5">Telefono:</label>
								<input type="text" name="tel_ado" id="tel_ado" placeholder="Telefono:" minlength="11" maxlength="11" class="<?php echo $obj_for->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="cor_ado" class="text-white text-left h5">Correo:</label>
								<input type="email" name="cor_ado" id="cor_ado" placeholder="Correo:" minlength="1" maxlength="100" class="<?php echo $obj_for->input_normal; ?>">
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