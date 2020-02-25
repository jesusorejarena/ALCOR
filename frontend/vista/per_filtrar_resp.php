<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/permiso.class.php");
	require_once("../../backend/clase/cargo.class.php");
	require_once("../../backend/clase/modulo.class.php");

	$obj_per = new permiso;
	$obj_per->estandar();

	$obj_car = new cargo;
	$obj_car->puntero=$obj_car->listar_resp();

	$obj_mod = new modulo;
	$obj_mod->puntero=$obj_mod->listar_resp();

	encabezado("Filtrar Permiso 'Historial'");

	comprobar("Historial");

?>

	<div class="<?php echo $obj_per->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_per->btn_atras; ?>" onClick="window.location.href='menu_config.php'"><i class="icon ion-md-arrow-round-back"></i></button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_per->card; ?>">
					<h2 class="<?php echo $obj_per->titulocard; ?>">Filtrar Permiso 'Historial'</h2>
					<hr>
					<div class="card-body">
						<form action="per_filtrado_resp.php" method="POST">
							<div class="row p-3">
								<div class="col-12">
									<div class="form-group">
										<label for="cod_per" class="<?php echo $obj_per->for; ?>">Código:</label>
										<input type="text" name="cod_per" id="cod_per" placeholder="Código:" class="<?php echo $obj_per->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cod_car" class="<?php echo $obj_per->for; ?>">Cargo:</label>
										<select name="cod_car" id="cod_car" class="<?php echo $obj_per->input_normal; ?>">
											<option value="">Seleccione...</option>
											<?php while (($cargo=$obj_car->extraer_dato())>0)
												{
													if ($cargo['cod_car']==1 || $cargo['nom_car']=='Administrador')
													{
														
													}
													else
													{
														echo "<option value='$cargo[cod_car]'>$cargo[nom_car]</option>";
													}
												}
											?>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cod_mod" class="<?php echo $obj_per->for; ?>">Módulo:</label>
										<select name="cod_mod" id="cod_mod" class="<?php echo $obj_per->input_normal; ?>">
											<option value="">Seleccione...</option>
											<?php while (($modulo=$obj_mod->extraer_dato())>0)
												{
													echo "<option value='$modulo[cod_mod]'>Menú de $modulo[nom_mod]</option>";
												}
											?>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="est_per" class="<?php echo $obj_per->for; ?>">Activo/Inactivo:</label>
										<select name="est_per" id="est_per" class="<?php echo $obj_per->input_normal; ?>">
											<option value="">General</option>
											<option value="A">Activo</option>
											<option value="I">Inactivo</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="bas_per" class="<?php echo $obj_per->for; ?>">Activo/Papelera:</label>
										<select name="bas_per" id="bas_per" class="<?php echo $obj_per->input_normal; ?>">
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
										<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_per->btn_limpiar; ?>">Limpiar</button>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<button type="submit" name="ejecutar" id="ejecutar" value="filtrar" class="<?php echo $obj_per->btn_enviar; ?>">Filtrar</button>
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