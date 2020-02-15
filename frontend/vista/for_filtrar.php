<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/formulario.class.php");

	$obj_for = new formulario;
	$obj_for->estandar();

	encabezado("Filtrar Formulario - ALCOR C.A.");

?>

	<div class="<?php echo $obj_for->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_for->btn_atras; ?>" onClick="window.location.href='for_menu.php'">Atras</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_for->card; ?>">
					<h2 class="<?php echo $obj_for->titulocard; ?>">Filtrar Formulario</h2>
					<hr>
					<div class="card-body">
						<form action="for_filtrado.php" method="POST">
							<div class="row p-3">
								<div class="col-12">
									<div class="form-group">
										<label for="cod_for" class="<?php echo $obj_for->for; ?>">Código:</label>
										<input type="text" name="cod_for" id="cod_for" placeholder="Código:" class="<?php echo $obj_for->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="nom_for" class="<?php echo $obj_for->for; ?>">Nombre:</label>
										<input type="text" name="nom_for" id="nom_for" placeholder="Nombre:" class="<?php echo $obj_for->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="ape_for" class="<?php echo $obj_for->for; ?>">Apellido:</label>
										<input type="text" name="ape_for" id="ape_for" placeholder="Apellido:" class="<?php echo $obj_for->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="tel_for" class="<?php echo $obj_for->for; ?>">Teléfono:</label>
										<input type="text" name="tel_for" id="tel_for" placeholder="Teléfono:" class="<?php echo $obj_for->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cor_for" class="<?php echo $obj_for->for; ?>">Correo:</label>
										<input type="text" name="cor_for" id="cor_for" placeholder="Correo:"  class="<?php echo $obj_for->input_normal; ?>">
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
			<div class="col-md-2"></div>
		</div>
	</div>

<?php 
	
	pie();

?>