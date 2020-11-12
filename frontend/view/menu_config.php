<?php

require_once("tema_session.php");

headerr("Menú de Configuración");

/* check("Configuración"); */

?>

<div class="container-fluid p-3">
	<h2 class="text-center p-3">Cuenta</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-4">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Configuración del Sistema</h3>
				<div class="card-body">
					<h5 class="pt-1">Cargos:</h5>
					<div class="row">
						<div class="col-6"><a class="btn btn-primary btn-block" href="car_listartodo_resp.php">Lista</a></div>
						<div class="col-6"><a class="btn btn-primary btn-block" href="car_filtrar_resp.php">Filtrar</a></div>
					</div>
					<h5 class="pt-3">Permisos:</h5>
					<div class="row">
						<div class="col-6"><a class="btn btn-primary btn-block" href="per_listartodo_resp.php">Lista</a></div>
						<div class="col-6"><a class="btn btn-primary btn-block" href="per_filtrar_resp.php">Filtrar</a></div>
					</div>
					<h5 class="pt-3">Empleados:</h5>
					<div class="row">
						<div class="col-6"><a class="btn btn-primary btn-block" href="ado_listartodo_resp.php">Lista</a></div>
						<div class="col-6"><a class="btn btn-primary btn-block" href="ado_filtrar_resp.php">Filtrar</a></div>
					</div>
					<h5 class="pt-3">Proveedores:</h5>
					<div class="row">
						<div class="col-6"><a class="btn btn-primary btn-block" href="edo_listartodo_resp.php">Lista</a></div>
						<div class="col-6"><a class="btn btn-primary btn-block" href="edo_filtrar_resp.php">Filtrar</a></div>
					</div>
					<h5 class="pt-3">Productos:</h5>
					<div class="row">
						<div class="col-6"><a class="btn btn-primary btn-block" href="pro_listartodo_resp.php">Lista</a></div>
						<div class="col-6"><a class="btn btn-primary btn-block" href="pro_filtrar_resp.php">Filtrar</a></div>
					</div>
					<h5 class="pt-3">Formularios:</h5>
					<div class="row">
						<div class="col-6"><a class="btn btn-primary btn-block" href="for_listartodo_resp.php">Lista</a></div>
						<div class="col-6"><a class="btn btn-primary btn-block" href="for_filtrar_resp.php">Filtrar</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Base de Datos</h3>
				<div class="card-body">
					<a class="btn btn-primary btn-block" href="../../database/respaldo/respaldo_db.php">Respaldar</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>