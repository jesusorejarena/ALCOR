<?php

require_once("tema_session.php");

headerr("Filtrar Cargos - Historial");

/* check("Historial"); */

?>

<!-- Formulario -->
<div class="container p-3 p-md-2">
	<a class="btn btn-success btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-md-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Filtrar Cargos - Historial</h2>
				<form action="car_filtrado_resp.php" method="POST" class="was-validation" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="numero">Código:</label>
									<input type="text" name="cod_car" id="numero" class="form-control" placeholder="Código" />
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="alfanumerico">Nombre:</label>
									<input type="text" name="nom_car" id="alfanumerico" class="form-control" placeholder="Nombre" />
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between">
						<button type="reset" class="btn btn-success">Limpiar</button>
						<button class="btn btn-primary">Filtrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>