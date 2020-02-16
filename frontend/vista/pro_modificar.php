<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/producto.class.php");
	require_once("../../backend/clase/proveedor.class.php");

	$obj_pro = new producto;

	$cod_pro=$_REQUEST['cod_pro'];

	$obj_pro->asignar_valor();
	$obj_pro->puntero=$obj_pro->listar_modificar();
	$producto=$obj_pro->extraer_dato();

	$obj_edo = new proveedor;
	$obj_edo->estandar();
	$obj_edo->puntero=$obj_edo->listar_lista();

	encabezado("Modificar Producto - ALCOR C.A.");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_edo->btn_atras; ?>" onClick="window.location.href='pro_menu.php'">Atras</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_edo->card; ?>">
					<h2 class="<?php echo $obj_edo->titulocard; ?>">Modificar Producto</h2>
					<hr>
					<div class="card-body">
						<form action="../../backend/controlador/producto.php" method="POST">
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<input type="hidden" name="cod_pro" id="cod_pro" value="<?php echo $producto['cod_pro']; ?>">
										<label for="nom_pro" class="<?php echo $obj_edo->for; ?>">Nombre:</label>
										<input type="text" name="nom_pro" id="nom_pro" placeholder="Nombre:" minlength="2" maxlength="50" require="" value="<?php echo $producto['nom_pro'] ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="des_pro" class="<?php echo $obj_edo->for; ?>">Descripción:</label>
										<input type="" name="des_pro" id="des_pro" placeholder="Descripción:" minlength="3" maxlength="100" require="" value="<?php echo $producto['des_pro'] ?>>" class="<?php echo $obj_edo->input_text; ?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="pre_pro" class="<?php echo $obj_edo->for; ?>">Precio:</label>
										<input type="text" name="pre_pro" id="pre_pro" placeholder="Precio:" require="" value="<?php echo $producto['pre_pro'] ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="can_pro" class="<?php echo $obj_edo->for; ?>">Cantidad:</label>
										<input type="text" name="can_pro" id="can_pro" placeholder="Cantidad:" require="" value="<?php echo $producto['cod_pro'] ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="est_pro" class="<?php echo $obj_edo->for; ?>">Estatus:</label>
										<select name="est_pro" id="est_pro" required="" class="<?php echo $obj_edo->input_normal; ?>">
											<option value="">Seleccione...</option>
											<?php $seleccionado=($producto["est_pro"]=="A")?"selected":""; ?>
											<option <?php echo $seleccionado; ?> value="A">Activo</option>
											<?php $seleccionado=($producto["est_pro"]=="I")?"selected":""; ?>
											<option <?php echo $seleccionado; ?> value="I">Inactivo</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="cod_edo" class="<?php echo $obj_edo->for; ?>">Proveedor:</label>
										<select name="cod_edo" id="cod_edo" class="<?php echo $obj_edo->input_normal; ?>">
											<option value="">Seleccione...</option>
											<?php while (($proveedor=$obj_edo->extraer_dato())>0)
												{
													$select=($proveedor['cod_edo']==$producto['cod_edo']) ? "selected" : "" ;
													echo "<option $select value='$proveedor[cod_edo]'>$proveedor[nom_edo]</option>";
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
										<button type="submit" name="ejecutar" id="ejecutar" value="modificar_normal" class="<?php echo $obj_edo->btn_enviar; ?>">Modificar</button>
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