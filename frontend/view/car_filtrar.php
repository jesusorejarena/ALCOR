<?php

require_once("tema_session.php");

headerr("Filtrar Cargos");

checkAdminOrClient(1);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="rol_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Filtrar Cargos</h2>
				<form action="car_filtrado.php" method="POST" class="was-validation" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="cod_car">Código:</label>
									<input type="text" name="cod_car" id="cod_car" class="form-control" placeholder="Código" />
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="nom_car">Nombre:</label>
									<input type="text" name="nom_car" id="nom_car" class="form-control" placeholder="Nombre" />
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="est_car">Estatus:</label>
									<select name="est_car" id="est_car" class="form-control">
										<option value="">Todos</option>
										<option value="A">Activo</option>
										<option value="I">Inactivo</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="bas_car">Estado:</label>
									<select name="bas_car" id="bas_car" class="form-control">
										<option value="">Todos</option>
										<option value="A">Activo</option>
										<option value="B">Eliminado</option>
									</select>
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