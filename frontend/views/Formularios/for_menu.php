<?php

require_once("tema_session.php");
require_once("../../backend/class/formulario.class.php");

$obj_edo = new formulario;
$obj_edo->classBootstrap();

headerr("Menú de Formularios");

check("Formularios");

?>

<div class="<?php echo $obj_edo->container; ?>">
	<h2 class="<?php echo $obj_edo->titulos; ?>">Menú de Formularios</h2>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-12 col-md-4">
			<div class="<?php echo $obj_edo->card; ?>">
				<div class="card-body">
					<div class="row p-1 m-1">
						<div class="col-12 text-center">
							<button class="<?php echo $obj_edo->btn_enviarg; ?>"
								onClick="window.location.href='for_listartodo.php'">Lista</button>
						</div>
					</div>
					<div class="row p-1 m-1">
						<div class="col-12 text-center">
							<button class="<?php echo $obj_edo->btn_enviarg; ?>"
								onClick="window.location.href='for_filtrar.php'">Filtrar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row py-5">
		<div class="col-12"></div>
	</div>
</div>


<?php

footer();

?>