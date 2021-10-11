<?php

require_once("tema_session.php");

headerr("Filtrar Prenda - Historial");

checkAdmin();

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Filtrar Prenda - Historial</h2>
				<form action="pre_filtrado_resp.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="nom_pre">Nombre:</label>
									<input type="text" name="nom_pre" id="nom_pre" placeholder="Nombre:" class="form-control">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="des_pre">Descripción:</label>
									<textarea name="des_pre" id="des_pre" placeholder="Descripción" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="pre_pre">Precio:</label>
									<input type="text" name="pre_pre" id="pre_pre" placeholder="Precio:" class="form-control">
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

<?php

footer();

?>