<?php
	
	require("tema.php");
	require("../../backend/clase/empleado.class.php");

	$obj_ado = new empleado;
	$obj_ado->estandar();

	encabezado("Menu principal - ALCOR C.A.");

?>

	<div class="<?php echo $obj_ado->container; ?>">
		<h1>Hola </h1>
	</div>

<?php 

	pie();

?>