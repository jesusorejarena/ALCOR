<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/modulo.class.php");
	require_once("../../backend/clase/cargo.class.php");

	$obj_mod = new modulo;
	$obj_mod->estandar();

	$obj_car = new cargo;
	$obj_car->puntero=$obj_car->listar_normal();

	encabezado("Registrar Módulo - ALCOR C.A.");

?>

	<div class="<?php echo $obj_mod->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_mod->btn_atras; ?>" onClick="window.location.href='rol_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_mod->card; ?>" style="width: 40rem">
			<h2 class="<?php echo $obj_mod->titulocard; ?>">Registrar Módulo</h2>
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
											echo "<option value='$cargo[cod_car]'>$cargo[nom_car]</option>";
										}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="nom_mod" class="<?php echo $obj_mod->for; ?>">Nombre:</label>
								<select name="nom_mod" id="nom_mod" required="" class="<?php echo $obj_mod->input_normal; ?>">
									<option value="">Seleccione...</option>
									<option value="Empresa">Empresa</option>
									<option value="Roles">Roles</option>
									<option value="Empleados">Empleados</option>
									<option value="Proveedores">Proveedores</option>
									<option value="Productos">Productos</option>
									<option value="Venta">Venta</option>
									<option value="Formularios">Formularios</option>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="url_mod" class="<?php echo $obj_mod->for; ?>">URL:</label>
								<select name="url_mod" id="url_mod" required="" class="<?php echo $obj_mod->input_normal; ?>">
									<option value="">Seleccione...</option>
									<option value="emp_menu.php">Menú de Empresa</option>
									<option value="rol_menu.php">Menú de Roles</option>
									<option value="ado_menu.php">Menú de Empleados</option>
									<option value="edo_menu.php">Menú de Proveedores</option>
									<option value="pro_menu.php">Menú de Productos</option>
									<option value="ven_menu.php">Menú de Venta</option>
									<option value="for_menu.php">Menú de Formularios</option>
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