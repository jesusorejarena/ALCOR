<?php

require_once("tema_session.php");
require_once("../../backend/class/producto.class.php");
require_once("../../backend/class/proveedor.class.php");

$obj_pro = new producto;

$cod_pro = $_REQUEST['cod_pro'];

$obj_pro->assignValue();
$obj_pro->puntero = $obj_pro->getByCode();
$producto = $obj_pro->extractData();

$obj_edo = new proveedor;
$obj_edo->puntero = $obj_edo->getAllActive();

headerr("Modificar Producto");

check("Productos");

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="pro_listar.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-md-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Modificar Producto</h2>
				<form action="../../backend/controller/producto.php" method="POST" class="was-validation" id="formulario" novalidate>
					<input type="hidden" name="cod_per" value="<?php echo $permiso['cod_per']; ?>">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<input type="hidden" name="cod_pro" value="<?php echo $producto['cod_pro']; ?>">
									<label for="alfanumerico">Nombre:</label>
									<input type="text" name="nom_pro" id="alfanumerico" placeholder="Nombre:" value="<?php echo $producto['nom_pro'] ?>" class="form-control">
									<small id="alfanumericoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="descripcion">Descripción:</label>
									<textarea name="des_pro" id="descripcion" placeholder="Descripción" value="<?php echo $producto['des_pro'] ?>" class="form-control"></textarea>
									<small id="descripcionDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="precio">Precio:</label>
									<input type="text" name="pre_pro" id="precio" placeholder="Precio:" value="<?php echo $producto['pre_pro'] ?>" class="form-control">
									<small id="precioDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="cantidad">Cantidad:</label>
									<input type="text" name="can_pro" id="cantidad" placeholder="Cantidad:" value="<?php echo $producto['cod_pro'] ?>" class="form-control">
									<small id="cantidadDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="estatus">Estatus:</label>
									<select name="est_pro" id="estatus" class="form-control">
										<option value="">Seleccione...</option>
										<?php $seleccionado = ($producto["est_pro"] == "A") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="A">Activo</option>
										<?php $seleccionado = ($producto["est_pro"] == "I") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="I">Inactivo</option>
									</select>
									<small id="estatusDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="proveedor">Proveedor:</label>
									<select name="cod_edo" id="proveedor" class="form-control">
										<?php while (($proveedor = $obj_edo->extractData()) > 0) {
											$select = ($proveedor['cod_edo'] == $producto['cod_edo']) ? "selected" : "";
											echo "<option $select value='$proveedor[cod_edo]'>$proveedor[nom_edo]</option>";
										}
										?>
									</select>
									<small id="proveedorDiv" class="invalid-feedback"></small>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between">
						<button type="reset" class="btn btn-success">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="update">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="../js/validaciones.js"></script>

<?php

footer();

?>