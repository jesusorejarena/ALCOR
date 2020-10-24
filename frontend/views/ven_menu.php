<?php

require_once("tema_session.php");
require_once("../../backend/class/producto.class.php");

$obj_pro = new producto;
$obj_pro->classBootstrap();
$obj_pro->puntero = $obj_pro->getAll();

headerr("Registrar Ventas");

check("Ventas");

?>

<div class="<?php echo $obj_pro->container; ?>">
	<h2 class="<?php echo $obj_pro->titulos; ?>">Registrar Venta</h2>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-12 col-md-8">
			<div class="<?php echo $obj_pro->card; ?>">
				<div class="card-body">
					<form action="../../backend/controller/producto.php" method="POST">
						<div class="row p-3">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="cod_pro" class="<?php echo $obj_pro->for; ?>">Producto:</label>
									<select name="cod_pro" id="cod_pro" required="" class="<?php echo $obj_pro->input_normal; ?>">
										<option value="">Seleccione...</option>
										<?php while (($producto = $obj_pro->extractData()) > 0) {
											echo "<option value='$producto[cod_pro]'>$producto[nom_pro] | Cantidad: $producto[can_pro]</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="com_pro" class="<?php echo $obj_pro->for; ?>">Cantidades:</label>
									<input type="text" name="com_pro" id="com_pro" placeholder="" required=""
										class="<?php echo $obj_pro->input_normal; ?>">
								</div>
							</div>
						</div>
						<div class="row p-3 text-center">
							<div class="col-6">
								<div class="form-group">
									<button type="reset" name="run" id="run" value="limpiar"
										class="<?php echo $obj_pro->btn_limpiar; ?>">Limpiar</button>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<button type="submit" name="run" id="run" value="venta"
										class="<?php echo $obj_pro->btn_enviar; ?>">Registrar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row py-5">
		<div class="col-12"></div>
	</div>
</div>

<?php

footer();

?>