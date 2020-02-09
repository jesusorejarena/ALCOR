<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/producto.class.php");
	require("../../backend/clase/proveedor.class.php");

	$obj_pro = new producto;

	$cod_pro=$_REQUEST['cod_pro'];

	$obj_pro->asignar_valor();
	$obj_pro->puntero=$obj_pro->listar_modificar();
	$producto=$obj_pro->extraer_dato();

	$obj_edo = new proveedor;
	$obj_edo->estandar();
	$obj_edo->puntero=$obj_edo->listar_normal();

	encabezado("Filtrar producto - ALCOR C.A.");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_edo->btn_atras; ?>" onClick="window.location.href='pro_menu.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_edo->card; ?>" style="width: 40rem">
			<h2 class="<?php echo $obj_edo->titulocard; ?>">Filtrar producto</h2>
			<hr>
			<div class="card-body">
				<form action="pro_filtrado.php" method="POST">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="nom_pro" class="text-white text-left h5">Nombre:</label>
								<input type="text" name="nom_pro" id="nom_pro" placeholder="Nombre:" minlength="2" maxlength="50" require="" value="<?php echo $producto['nom_pro'] ?>" class="<?php echo $obj_edo->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="ser_pro" class="text-white text-left h5">Código del producto:</label>
								<input type="text" name="ser_pro" id="ser_pro" placeholder="Número de código del producto:" minlength="10" maxlength="10" require="" value="<?php echo $producto['ser_pro'] ?>" class="<?php echo $obj_edo->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="des_pro" class="text-white text-left h5">Descripción:</label>
								<input type="" name="des_pro" id="des_pro" placeholder="Descripción:" minlength="3" maxlength="100" require="" value="<?php echo $producto['des_pro'] ?>>" class="<?php echo $obj_edo->input_text; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="pre_pro" class="text-white text-left h5">Precio:</label>
								<input type="text" name="pre_pro" id="pre_pro" placeholder="Precio:" require="" value="<?php echo $producto['pre_pro'] ?>" class="<?php echo $obj_edo->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="can_pro" class="text-white text-left h5">Cantidad:</label>
								<input type="text" name="can_pro" id="can_pro" placeholder="Cantidad:" require="" value="<?php echo $producto['cod_pro'] ?>" class="<?php echo $obj_edo->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="fky_proveedor" class="text-white text-left h5">Proveedor:</label>
								<select name="fky_proveedor" id="fky_proveedor" class="<?php echo $obj_edo->input_normal; ?>">
									<option value="">Seleccione...</option>
									<?php while (($proveedor=$obj_edo->extraer_dato())>0)
										{
											echo "<option value='$proveedor[cod_edo]'>$proveedor[nom_edo]</option>";
										}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row p-3 text-center">
						<div class="col-6">
							<div class="form-group">
								<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_edo->btn_limpiar; ?>">Limpiar</button>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<button type="submit" name="ejecutar" id="ejecutar" value="filtrar" class="<?php echo $obj_edo->btn_atras; ?> btn-lg">Filtrar</button>
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