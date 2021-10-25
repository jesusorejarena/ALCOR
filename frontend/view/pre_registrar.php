<?php

require_once("tema_session.php");

headerr("Registrar Prendas");

check("Prendas", 3);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="pre_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Registrar Prendas</h2>
				<form action="../../backend/controller/prenda.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="alfanumerico">Nombre:</label>
									<input type="text" name="nom_pre" id="alfanumerico" placeholder="Nombre:" class="form-control">
									<small id="alfanumericoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="descripcion">Descripción:</label>
									<textarea name="des_pre" id="descripcion" placeholder="" class="form-control"></textarea>
									<small id="descripcionDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="precio">Precio:</label>
									<input type="text" name="pre_pre" id="precio" placeholder="Precio:" class="form-control">
									<small id="precioDiv" class="invalid-feedback"></small>
								</div>
							</div>
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
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