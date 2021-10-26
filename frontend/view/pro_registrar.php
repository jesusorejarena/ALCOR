<?php

require_once("tema_session.php");
require_once("../../backend/class/proveedor.class.php");

$obj_edo = new proveedor;
$obj_edo->puntero = $obj_edo->getAllActive();

headerr("Registrar Producto");

check("Productos", 4);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-outline-primary btn-lg" href="pro_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Registrar Producto</h2>
				<form action="../../backend/controller/producto.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="alfanumerico">Nombre:</label>
									<input type="text" name="nom_pro" id="alfanumerico" placeholder="Nombre:" class="form-control">
									<small id="alfanumericoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="descripcion">Descripción:</label>
									<textarea name="des_pro" id="descripcion" placeholder="" class="form-control"></textarea>
									<small id="descripcionDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="precio">Precio:</label>
									<input type="text" name="pre_pro" id="precio" placeholder="Precio:" class="form-control">
									<small id="precioDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="cantidad">Cantidad:</label>
									<input type="text" name="can_pro" id="cantidad" placeholder="Cantidad:" class="form-control">
									<small id="cantidadDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="proveedor">Proveedor:</label>
									<select name="cod_edo" id="proveedor" class="form-control">
										<option value="">Seleccione...</option>
										<?php while (($proveedor = $obj_edo->extractData()) > 0) {
											echo "<option value='$proveedor[cod_edo]'>$proveedor[nom_edo]</option>";
										}
										?>
									</select>
									<small id="proveedorDiv" class="invalid-feedback"></small>
								</div>
							</div>
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="reset" class="btn btn-outline-primary">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="create">Guardar</button>
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