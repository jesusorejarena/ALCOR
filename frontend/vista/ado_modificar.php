<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/cargo.class.php");
	require("../../backend/clase/empleado.class.php");

	$obj_ado = new empleado;

	$obj_ado->estandar();

	$cod_ado=$_REQUEST['cod_ado'];

	$obj_ado->asignar_valor();
	$obj_ado->puntero=$obj_ado->listar_modificar();
	$empleado=$obj_ado->extraer_dato();

	$obj_car = new cargo;
	$obj_car->puntero=$obj_car->listar_normal();

	encabezado("Modificar empleado - ALCOR C.A.");

?>

	<div class="<?php echo $obj_ado->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_ado->btn_atras; ?>" onClick="window.location.href='ado_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_ado->card; ?>" style="width: 40rem">
			<h2 class="<?php echo $obj_ado->titulocard; ?>">Modificar empleado</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/empleado.php" method="POST">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<input type="hidden" name="cod_ado" id="cod_ado" value="<?php echo $empleado['cod_ado']; ?>">
								<label for="nom_ado" class="<?php echo $obj_ado->for; ?>">Nombre:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Nombre:" minlength="3" maxlength="50" required="" value="<?php echo $empleado['nom_ado']; ?>" class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="ape_ado" class="<?php echo $obj_ado->for; ?>">Apellido:</label>
								<input type="text" name="ape_ado" id="ape_ado" placeholder="Apellido:" minlength="3" maxlength="50" required="" value="<?php echo $empleado['ape_ado']; ?>"  class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="gen_ado" class="<?php echo $obj_ado->for; ?>">Genero:</label>
								<select name="gen_ado" id="gen_ado" required="" class="<?php echo $obj_ado->input_normal; ?>">
									<?php $seleccionado=($empleado["tip_ado"]=="H")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="H">Hombre</option>
									<?php $seleccionado=($empleado["tip_ado"]=="M")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="M">Mujer</option>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="nac_ado" class="<?php echo $obj_ado->for; ?>">Fecha de nacimiento:</label>
								<input type="date" name="nac_ado" id="nac_ado" placeholder="Fecha de nacimiento:" required="" value="<?php echo $empleado['nac_ado']; ?>"  class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-4">
							<div class="form-group">
								<label for="tip_ado" required="" class="<?php echo $obj_ado->for; ?>">Tipo:</label>
								<select name="tip_ado" id="tip_ado" class="<?php echo $obj_ado->input_normal; ?>">
									<?php $seleccionado=($empleado["tip_ado"]=="V")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="V">Venezolano</option>
									<?php $seleccionado=($empleado["tip_ado"]=="E")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="E">Extranjero</option>
								</select>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="ced_ado" class="<?php echo $obj_ado->for; ?>">Cédula:</label>
								<input type="text" name="ced_ado" id="ced_ado" placeholder="Cédula:" minlength="1" maxlength="8" required="" value="<?php echo $empleado['ced_ado']; ?>"  class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="tel_ado" class="<?php echo $obj_ado->for; ?>">Teléfono:</label>
								<input type="text" name="tel_ado" id="tel_ado" placeholder="Teléfono:" minlength="11" maxlength="11" required="" value="<?php echo $empleado['tel_ado']; ?>"  class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="cor_ado" class="<?php echo $obj_ado->for; ?>">Correo:</label>
								<input type="email" name="cor_ado" id="cor_ado" placeholder="Correo:" minlength="1" maxlength="100" required="" value="<?php echo $empleado['cor_ado']; ?>"  class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="cod_car" class="<?php echo $obj_ado->for; ?>">Cargo:</label>
								<select name="cod_car" id="cod_car" required="" class="<?php echo $obj_ado->input_normal; ?>">
									<?php while (($cargo=$obj_car->extraer_dato())>0)
										{
											$select=($empleado['cod_car']==$cargo['cod_car']) ? "selected" : "" ;
											echo "<option $select value='$cargo[cod_car]'>$cargo[nom_car]</option>";
										}										
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="dir_ado" class="<?php echo $obj_ado->for; ?>">Dirección:</label>
								<input type="text" name="dir_ado" id="dir_ado" placeholder="Dirección:" minlength="3" maxlength="100" required="" value="<?php echo $empleado['dir_ado']; ?>"  class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-8">
							<div class="form-group">
								<label for="dir_ado" class="<?php echo $obj_ado->for; ?>">Dirección:</label>
								<input type="text" name="dir_ado" id="dir_ado" placeholder="Dirección:" minlength="3" maxlength="100" required="" value="<?php echo $empleado['dir_ado']; ?>"  class="<?php echo $obj_ado->input_normal; ?>">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="est_ado" required="" class="<?php echo $obj_ado->for; ?>">Activo/Inactivo:</label>
								<select name="est_ado" id="est_ado" class="<?php echo $obj_ado->input_normal; ?>">
									<?php $seleccionado=($empleado["est_ado"]=="A")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="A">Activo</option>
									<?php $seleccionado=($empleado["est_ado"]=="I")?"selected":""; ?>
									<option <?php echo $seleccionado; ?> value="I">Inactivo</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row p-3 text-center">
						<div class="col-6">
							<div class="form-group">
								<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_ado->btn_limpiar; ?>">Limpiar</button>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<button type="submit" name="ejecutar" id="ejecutar" value="modificar_normal" class="<?php echo $obj_ado->btn_enviar; ?>">Modificar</button>
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