<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/producto.class.php");

	$obj_pro = new producto;
	$obj_pro->estandar();
	$obj_pro->puntero=$obj_pro->listar_normal();

	encabezado("Registrar Ventas - ALCOR C.A.");

?>

	<div class="<?php echo $obj_pro->container; ?>">
		<div class="row py-5"><div class="col-12"></div></div>
		<h2 class="<?php echo $obj_pro->titulos; ?>">Registrar Venta</h2>
		<div class="<?php echo $obj_pro->card; ?>" style="width: 40rem">
			<div class="card-body">
				<form action="../../backend/controlador/producto.php" method="POST">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<input type="hidden" name="cod_pro" id="cod_pro" value="<?php echo $producto['cod_pro']; ?>">
								<label for="nom_pro" class="<?php echo $obj_pro->for; ?>">Producto:</label>
								<select name="nom_pro" id="nom_pro" required="" class="<?php echo $obj_pro->input_normal; ?>">
									<option value="">Seleccione...</option>
									<?php while (($producto=$obj_pro->extraer_dato())>0)
										{
											echo "<option value='$producto[cod_pro]'>$producto[nom_pro]</option>";
										}
									?>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="can_pro" class="<?php echo $obj_pro->for; ?>">Opción:</label>
								<input type="text" name="can_pro" id="can_pro" placeholder="Cantidad de la venta:" required="" class="<?php echo $obj_pro->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3 text-center">
						<div class="col-6">
							<div class="form-group">
								<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_pro->btn_limpiar; ?>">Limpiar</button>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<button type="submit" name="ejecutar" id="ejecutar" value="compra" class="<?php echo $obj_pro->btn_enviar; ?>">Registrar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row py-5"><div class="col-12"></div></div>
	</div>

<?php 
	
	pie();

?>