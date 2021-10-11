<?php

require_once("tema_session.php");
require_once("../../backend/class/proveedor.class.php");

$obj_edo = new proveedor;

$cod_edo = $_REQUEST['cod_edo'];

$obj_edo->assignValue();
$obj_edo->puntero = $obj_edo->getByCode();
$proveedor = $obj_edo->extractData();

headerr("Modificar Proveedor");

check("Proveedores", 2);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="per_listar.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Modificar Proveedor</h2>
				<form action="../../backend/controller/proveedor.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row p-3">
							<div class="col-12">
								<div class="form-group">
									<input type="hidden" name="cod_edo" id="cod_edo" value="<?php echo $proveedor['cod_edo']; ?>">
									<label for="alfanumerico">Nombre:</label>
									<input type="text" name="nom_edo" id="alfanumerico" placeholder="Nombre:" value="<?php echo $proveedor['nom_edo']; ?>" class="form-control">
									<small id="alfanumericoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-12">
								<div class="form-group">
									<label for="descripcion">Descripción:</label>
									<textarea name="des_edo" id="descripcion" value="<?php echo $proveedor['des_edo']; ?>" placeholder="Descripción:" class="form-control"></textarea>
									<small id="descripcionDiv" class="invalid-feedba"></small>
								</div>
							</div>
							<div class=" col-12 col-xl-12">
								<div class="form-group">
									<label for="direccion">Dirección:</label>
									<input type="text" name="dir_edo" id="direccion" placeholder="Dirección:" value="<?php echo $proveedor['dir_edo']; ?>" class="form-control">
								</div>
								<small id="direccionDiv" class="invalid-feedback"></small>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="telefono">Telefono:</label>
									<input type="text" name="tel_edo" id="telefono" placeholder="Telefono:" value="<?php echo $proveedor['tel_edo']; ?>" class="form-control">
									<small id="telefonoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="correo">Correo:</label>
									<input type="email" name="cor_edo" id="correo" placeholder="Correo:" value="<?php echo $proveedor['cor_edo']; ?>" class="form-control">
									<small id="correoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-4">
								<div class="form-group">
									<label for="nacionalidad">Tipo:</label>
									<select name="tip_edo" id="nacionalidad" class="form-control">
										<?php $seleccionado = ($usuario["tip_edo"] == "V") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="V">Venezolano</option>
										<?php $seleccionado = ($usuario["tip_edo"] == "E") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="E">Extranjero</option>
										<?php $seleccionado = ($usuario["tip_edo"] == "J") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="J">Juridico</option>
									</select>
									<small id="nacionalidadDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-4">
								<div class="form-group">
									<label for="rif">RIF:</label>
									<input type="text" name="rif_edo" id="rif" placeholder="RIF:" value="<?php echo $proveedor['rif_edo']; ?>" class="form-control">
									<small id="rifDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-4">
								<div class="form-group">
									<label for="estatus">Activo/Inactivo:</label>
									<select name="est_edo" id="estatus" class="form-control">
										<?php $seleccionado = ($usuario["est_edo"] == "A") ? "selected" : ""; ?>
										<option value="A">Activo</option>
										<?php $seleccionado = ($usuario["est_edo"] == "I") ? "selected" : ""; ?>
										<option value="I">Inactivo</option>
									</select>
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