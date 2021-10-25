<?php

require_once("tema_session.php");

headerr("Registrar Cargo");

checkAdminOrClient(1);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Registrar Cargo</h2>
				<form action="../../backend/controller/cargo.php" method="POST" class="was-validation p-0" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="alfanumerico">Nombre:</label>
									<input type="text" name="nom_car" id="alfanumerico" class="form-control" placeholder="Nombre" />
									<small id="alfanumericoDiv" class="invalid-feedback"></small>
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