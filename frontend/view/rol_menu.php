<?php

require_once("tema_session.php");

headerr("Menú de Roles");

/* check("Roles"); */

?>

<!-- Menu -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<h2 class="text-center p-3">Menú de roles</h2>
	<div class="row justify-content-center p-3">
		<!-- Cargos -->
		<div class="col-12 col-md-4 p-1">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Cargos</h3>
				<div class="card-body">
					<a class="btn btn-outline-primary btn-block" href="car_registrar.php">Registrar</a>
					<a class="btn btn-outline-primary btn-block" href="car_listartodo.php">Listar</a>
					<a class="btn btn-outline-primary btn-block" href="car_filtrar.php">Filtrar</a>
					<a class="btn btn-outline-primary btn-block" href="car_listarpapelera.php">Papelera</a>
				</div>
			</div>
		</div>
		<!-- Modulos -->
		<div class="col-12 col-md-4 p-1">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Módulos</h3>
				<div class="card-body">
					<a class="btn btn-outline-primary btn-block" href="mod_listartodo.php">Listar</a>
				</div>
			</div>
		</div>
		<!-- Permisos -->
		<div class="col-12 col-md-4 p-1">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Permisos</h3>
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