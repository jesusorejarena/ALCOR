<?php

require_once("tema_session.php");

headerr("Filtrar Cargos - Historial");

checkAdmin();

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Filtrar Cargos - Historial</h2>
				<form action="car_filtrado_resp.php" method="POST" class="was-validation" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="numero">Código:</label>
									<input type="text" name="cod_car" id="numero" class="form-control" placeholder="Código" />
								</div>
							</div>
							<div class="col-12 col-xl-6">
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