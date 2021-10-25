<?php

require_once("tema_session.php");

headerr("Menú de Roles");

checkAdminOrClient(1);

?>

<!-- Menu -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<h1 class="text-center text-primary font-weight-bold p-3">Menú de roles</h1>
	<div class="row justify-content-center p-3">
		<!-- Cargos -->
		<div class="col-12 col-xl-4 px-4">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h3 class="card-title text-center text-primary font-weight-bold">Cargos</h3>
				<div class="card-body">
					<a class="btn btn-outline-primary btn-block" href="car_registrar.php">Registrar</a>
					<a class="btn btn-outline-primary btn-block" href="car_listartodo.php">Listar</a>
					<a class="btn btn-outline-primary btn-block" href="car_filtrar.php">Filtrar</a>
					<a class="btn btn-outline-primary btn-block" href="car_listarpapelera.php">Papelera</a>
				</div>
			</div>
		</div>
		<!-- Modulos -->
		<div class="col-12 col-xl-4 px-4">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h3 class="card-title text-center text-primary font-weight-bold">Módulos</h3>
				<div class="card-body">
					<a class="btn btn-outline-primary btn-block" href="mod_listartodo.php">Listar</a>
				</div>
			</div>
		</div>
		<!-- Permisos -->
		<div class="col-12 col-xl-4 px-4">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h3 class="card-title text-center text-primary font-weight-bold">Permisos</h3>
				<div class="card-body">
					<a class="btn btn-outline-primary btn-block" href="per_registrar.php">Registrar</a>
					<a class="btn btn-outline-primary btn-block" href="per_listartodo.php">Listar</a>
					<a class="btn btn-outline-primary btn-block" href="per_filtrar.php">Filtrar</a>
					<a class="btn btn-outline-primary btn-block" href="per_listarpapelera.php">Papelera</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>