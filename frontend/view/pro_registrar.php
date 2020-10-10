<?php

//session

require_once("tema.php");
require_once("../../backend/class/proveedor.class.php");

$obj_edo = new proveedor;
$obj_edo->classBootstrap();
$obj_edo->assignValue();
$obj_edo->puntero = $obj_edo->getAllActive();

encabezado("Registrar Producto");

check("Productos");

?>

<div class="<?php echo $obj_edo->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_edo->btn_atras; ?>" onClick="window.location.href='pro_menu.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-12 col-md-8">
			<div class="<?php echo $obj_edo->card; ?>">
				<h2 class="<?php echo $obj_edo->titulocard; ?>">Registrar Producto</h2>
				<hr>
				<div class="card-body">
					<form action="../../backend/controller/producto.php" method="POST">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label fo="nom_pro" class="<?php echo $obj_edo->for; ?>">Nombre:</label>
									<input tye="text" name="nom_pro" id="nom_pro" placeholder="Nombre:" minlength="2" maxlength="50"
										required="" class="<?php echo $obj_edo->input_normal; ?>">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="des_pro" class="<?php echo $obj_edo->for; ?>">Descripción:</label>
									<textarea name="des_pro" id="des_pro" placeholder="Descripción:" minlength="3" maxlength="100"
										class="<?php echo $obj_edo->input_text; ?>"></textarea>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="pre_pro" class="<?php echo $obj_edo->for; ?>">Precio:</label>
									<input type="text" name="pre_pro" id="pre_pro" placeholder="Precio:" pattern="[0-9]+" required=""
										class="<?php echo $obj_edo->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="can_pro" class="<?php echo $obj_edo->for; ?>">Cantidad:</label>
									<input type="text" name="can_pro" id="can_pro" placeholder="Cantidad:" pattern="[0-9]+" required=""
										class="<?php echo $obj_edo->input_normal; ?>">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="cod_edo" class="<?php echo $obj_edo->for; ?>">Proveedor:</label>
									<select name="cod_edo" id="cod_edo" class="<?php echo $obj_edo->input_normal; ?>">
										<option value="">Seleccione...</option>
										<?php while (($proveedor = $obj_edo->extractData()) > 0) {
											echo "<option value='$proveedor[cod_edo]'>$proveedor[nom_edo]</option>";
										}
										?>
									</select>
								</div>
							</div>
						</div>
				</div>
				<div class="row p-3 text-center">
					<div class="col-6">
						<div class="form-group">
							<button type="reset" name="run" id="run" value="limpiar"
								class="<?php echo $obj_edo->btn_limpiar; ?>">Limpiar</button>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<button type="submit" name="run" id="run" value="create"
								class="<?php echo $obj_edo->btn_enviar; ?>">Registrar</button>
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