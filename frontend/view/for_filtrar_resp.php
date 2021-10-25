<?php

require_once("tema_session.php");

headerr("Formularios Filtrados - Auditoria");

checkAdminOrClient(1);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-outline-primary btn-lg" href="for_menu_resp.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Filtrar Formularios - Auditoria</h2>
				<form action="for_filtrado_resp.php" method="POST" class="was-validation" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="cod_for">Código:</label>
									<input type="text" name="cod_for" placeholder="Código:" class="form-control">
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="nom_for">Nombre:</label>
									<input type="text" name="nom_for" placeholder="Nombre:" class="form-control">
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="ape_for">Apellido:</label>
									<input type="text" name="ape_for" placeholder="Apellido:" class="form-control">
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="tel_for">Teléfono:</label>
									<input type="text" name="tel_for" placeholder="Teléfono:" class="form-control">
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="cor_for">Correo:</label>
									<input type="text" name="cor_for" placeholder="Correo:" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="reset" class="btn btn-outline-primary">Limpiar</button>
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