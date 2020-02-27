<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/modulo.class.php");

	$obj_mod = new modulo;
	$obj_mod->estandar();

	encabezado("Filtrar Módulo");

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
					<h2 class="<?php echo $obj_mod->titulocard; ?>">Filtrar Módulo</h2>
					<hr>
					<div class="card-body">
						<form action="mod_filtrado.php" method="POST">
							<div class="row p-3">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cod_mod" class="<?php echo $obj_mod->for; ?>">Código:</label>
										<input type="text" name="cod_mod" id="cod_mod" placeholder="Código:" pattern="[0-9]+" class="<?php echo $obj_mod->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="nom_mod" class="<?php echo $obj_mod->for; ?>">Nombre:</label>
										<input type="text" name="nom_mod" id="nom_mod" placeholder="Nombre:" class="<?php echo $obj_mod->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="est_mod" class="<?php echo $obj_mod->for; ?>">Activo/Inactivo:</label>
										<select name="est_mod" id="est_mod" class="<?php echo $obj_mod->input_normal; ?>">
											<option value="">General</option>
											<option value="A">Activo</option>
											<option value="I">Inactivo</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="bas_mod" class="<?php echo $obj_mod->for; ?>">Activo/Papelera:</label>
										<select name="bas_mod" id="bas_mod" class="<?php echo $obj_mod->input_normal; ?>">
											<option value="">General</option>
											<option value="A">Activo</option>
											<option value="B">En papelera</option>
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
										<button type="submit" name="ejecutar" id="ejecutar" value="filtrar" class="<?php echo $obj_mod->btn_enviar; ?>">Filtrar</button>
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