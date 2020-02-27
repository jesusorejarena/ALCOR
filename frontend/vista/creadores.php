<?php

	require_once("temainicio.php");
	require_once("../../backend/clase/empleado.class.php");

	$obj_ado = new empleado;
	$obj_ado->estandar();

	encabezado("Creadores del Software AutoSIV");

?>
	<div class="<?php echo $obj_ado->container;?>">
		<div class="row my-5 p-5">
			<div class="col-12">
				<div class="text-dark text-center">
					<h2><b>Desarroladores y diseñadores de AutoSIV</b></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 py-4">
				<div class="text-dark text-center mx-5 px-5 animated wow jackInTheBox">
					<h3 class="text-center">Jesús A. Orejarena S.</h3>
					<h4 class="text-center">V-29.545.545</h4>
					<h5 class="text-center">@jesusorejarena</h5>
				</div>
			</div>
			<div class="col-12 col-md-6 py-4">
				<div class="text-dark text-center mx-5 px-5 animated wow jackInTheBox">
					<h3 class="text-center">David A. Lozada P.</h3>
					<h4 class="text-center">V-27.422.826</h4>
					<h5 class="text-center">@davlozada</h5>
				</div>
			</div>
		</div>
	</div>

<?php 

	pie();

?>