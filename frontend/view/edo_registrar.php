<?php

require_once("tema_session.php");

headerr("Registrar Proveedor");

check("Proveedores", 2);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="edo_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-md-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Registrar Proveedor</h2>
				<form action="../../backend/controller/proveedor.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="alfanumerico">Nombre:</label>
									<input type="text" name="nom_edo" id="alfanumerico" placeholder="Ejemplo: ALCOR C.A" class="form-control">
									<small id="alfanumericoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="descripcion">Descripción:</label>
									<textarea name="des_edo" id="descripcion" placeholder="Ejemplo: Distribuidor de genericos" class="form-control"></textarea>
									<small id="descripcionDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="direccion">Dirección:</label>
									<textarea name="dir_edo" id="direccion" placeholder="Ejemplo: La Concordia, Barrio el Carmen" class="form-control"></textarea>
									<small id="direccionDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="telefono">Teléfono:</label>
									<input type="text" name="tel_edo" id="telefono" placeholder="Ejemplo: 04241234567" class="form-control">
									<small id="telefonoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="correo">Correo:</label>
									<input type="email" name="cor_edo" id="correo" placeholder="Ejemplo: alcor@gmail.com" class="form-control">
									<small id="correoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="nacionalidad">Tipo:</label>
									<select name="tip_edo" id="nacionalidad" class="form-control">
										<option value="">Seleccione...</option>
										<option value="V">Venezolano</option>
										<option value="P">Personal</option>
										<option value="J">Juridico</option>
									</select>
									<small id="nacionalidadDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="rif">RIF:</label>
									<input type="text" name="rif_edo" id="rif" placeholder="35161987-3" class="form-control">
									<small id="rifDiv" class="invalid-feedback"></small>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between">
						<button type="reset" class="btn btn-success">Limpiar</button>
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