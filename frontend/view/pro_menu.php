<?php

require_once("tema_session.php");
require_once("../../backend/class/producto.class.php");

$obj_pro = new producto;

headerr("Menu de Productos");

check("Productos", 3);

?>

<!-- Menu -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<div class="row justify-content-center p-3">
		<!-- Cargos -->
		<div class="col-12 col-xl-4 p-1">
			<div class="card rounded px-3 py-4">
				<h3 class="card-title text-center">Menú de Productos</h3>
				<div class="card-body">
					<a class="btn btn-outline-primary btn-block" href="pro_registrar.php">Registrar</a>
					<a class="btn btn-outline-primary btn-block" href="pro_listartodo.php">Listar</a>
					<a class="btn btn-outline-primary btn-block" href="pro_filtrar.php">Filtrar</a>
					<a class="btn btn-outline-primary btn-block" href="pro_listarpapelera.php">Papelera</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>