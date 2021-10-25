<?php

require_once("tema_session.php");
require_once("../../backend/class/proveedor.class.php");

$obj_edo = new proveedor;

headerr("Filtrar Proveedores - Auditoria");

checkAdminOrClient(1);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Filtrar Proveedores - Auditoria</h2>
				<form action="edo_filtrado_resp.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="nombre">Nombre:</label>
									<input type="text" name="nom_edo" id="nombre" placeholder="Ejemplo: ALCOR C.A" class="form-control">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="descripcion">Descripción:</label>
									<textarea name="des_edo" id="descripcion" placeholder="Ejemplo: Distribuidor de genericos" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="direccion">Dirección:</label>
									<textarea name="dir_edo" id="direccion" placeholder="Ejemplo: La Concordia, Barrio el Carmen" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="telefono">Teléfono:</label>
									<input type="text" name="tel_edo" id="telefono" placeholder="Ejemplo: 04241234567" class="form-control">
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="correo">Correo:</label>
									<input type="email" name="cor_edo" id="correo" placeholder="Ejemplo: alcor@gmail.com" class="form-control">
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="tipo">Tipo:</label>
									<select name="tip_edo" id="tipo" class="form-control">
										<option value="">Todos
										<option>
										<option value="V">Venezolano</option>
										<option value="P">Personal</option>
										<option value="J">Juridico</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="rif">RIF:</label>
									<input type="text" name="rif_edo" id="rif" placeholder="35161987-3" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="reset" class="btn btn-success">Limpiar</button>
						<button type="submit" class="btn btn-primary">Filtrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>