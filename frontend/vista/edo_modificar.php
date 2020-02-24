<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/proveedor.class.php");

	$obj_edo = new proveedor;
	$obj_edo->estandar();

	$cod_edo=$_REQUEST['cod_edo'];

	$obj_edo->asignar_valor();
	$obj_edo->puntero=$obj_edo->listar_modificar();
	$proveedor=$obj_edo->extraer_dato();
	
	encabezado("Modificar Proveedor");

	comprobar("Proveedores");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_edo->btn_atras; ?>" onClick="window.location.href='edo_menu.php'"><i class="icon ion-md-arrow-round-back"></i></button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_edo->card; ?>">
					<h2 class="<?php echo $obj_edo->titulocard; ?>">Modificar Proveedor</h2>
					<hr>
					<div class="card-body">
						<form action="../../backend/controlador/proveedor.php" method="POST">
							<div class="row p-3">
								<div class="col-12 col-md-2">
									<div class="form-group">
										<label for="cod_edo" class="<?php echo $obj_edo->for; ?>">Código:</label>
										<input type="text" name="cod_edo" id="cod_edo" placeholder="Código:" minlength="1" maxlength="11" require="" value="<?php echo $proveedor['cod_edo']; ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-10">
									<div class="form-group">
										<label for="nom_edo" class="<?php echo $obj_edo->for; ?>">Nombre:</label>
										<input type="text" name="nom_edo" id="nom_edo" placeholder="Nombre:" minlength="2" maxlength="50" require="" value="<?php echo $proveedor['nom_edo']; ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="des_edo" class="<?php echo $obj_edo->for; ?>">Descripción:</label>
										<input type="text" name="des_edo" id="des_edo" placeholder="Descripción:" minlength="3" maxlength="100" require="" value="<?php echo $proveedor['des_edo']; ?>" class="<?php echo $obj_edo->input_text; ?>">
									</div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="dir_edo" class="<?php echo $obj_edo->for; ?>">Dirección:</label>
										<input type="text" name="dir_edo" id="dir_edo" placeholder="Dirección:" minlength="3" maxlength="100" require="" value="<?php echo $proveedor['dir_edo']; ?>" class="<?php echo $obj_edo->input_text; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="tel_edo" class="<?php echo $obj_edo->for; ?>">Telefono:</label>
										<input type="text" name="tel_edo" id="tel_edo" placeholder="Telefono:" minlength="11" maxlength="11" require="" value="<?php echo $proveedor['tel_edo']; ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cor_edo" class="<?php echo $obj_edo->for; ?>">Correo:</label>
										<input type="email" name="cor_edo" id="cor_edo" placeholder="Correo:" minlength="1" maxlength="100" require="" value="<?php echo $proveedor['cor_edo']; ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="tip_edo" class="<?php echo $obj_edo->for; ?>">Tipo:</label>
										<select name="tip_edo" id="tip_edo" require="" class="<?php echo $obj_edo->input_normal; ?>">
											<?php $seleccionado=($empleado["tip_edo"]=="V")?"selected":""; ?>
											<option <?php echo $seleccionado; ?> value="V">Venezolano</option>
											<?php $seleccionado=($empleado["tip_edo"]=="E")?"selected":""; ?>
											<option <?php echo $seleccionado; ?> value="E">Extranjero</option>
											<?php $seleccionado=($empleado["tip_edo"]=="J")?"selected":""; ?>
											<option <?php echo $seleccionado; ?> value="J">Juridico</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="rif_edo" class="<?php echo $obj_edo->for; ?>">RIF:</label>
										<input type="text" name="rif_edo" id="rif_edo" placeholder="RIF:" minlength="9" maxlength="9" require="" value="<?php echo $proveedor['rif_edo']; ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="bas_ado" class="<?php echo $obj_edo->for; ?>">Activo/Papelera:</label>
										<select name="bas_ado" id="bas_ado" require="" class="<?php echo $obj_edo->input_normal; ?>">
											<?php $seleccionado=($empleado["bas_edo"]=="A")?"selected":""; ?>
											<option value="A">Activo</option>
											<?php $seleccionado=($empleado["bas_edo"]=="B")?"selected":""; ?>
											<option value="B">En papelera</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row p-3 text-center">
								<div class="col-6">
									<div class="form-group">
										<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" require="" class="<?php echo $obj_edo->btn_limpiar; ?>">Limpiar</button>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<button type="submit" name="ejecutar" id="ejecutar" value="modificar_normal" require="" class="<?php echo $obj_edo->btn_enviar; ?>">Modificar</button>
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