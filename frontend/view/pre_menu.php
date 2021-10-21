<?php

require_once("tema_session.php");
require_once("../../backend/class/prenda.class.php");

$obj_pre = new prenda;

headerr("Menu de Prendas");

check("Prendas", 3);

?>

<!-- Menu -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<div class="row justify-content-center p-3">
		<!-- Cargos -->
		<div class="col-12 col-xl-4 p-1">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Menú de Prendas</h3>
				<div class="card-body">
					<a class="btn btn-outline-primary btn-block" href="pre_registrar.php">Registrar</a>
					<a class="btn btn-outline-primary btn-block" href="pre_listartodo.php">Listar</a>
					<a class="btn btn-outline-primary btn-block" href="pre_filtrar.php">Filtrar</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>