<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/empresa.class.php");

	$obj_emp = new empresa;
	$obj_emp->estandar();

	encabezado("Menu de la empresa - ALCOR C.A.");

?>

	<div class="<?php echo $obj_emp->container; ?>">
		<div class="<?php echo $obj_emp->card; ?>" style="width: 30rem">
			<h2 class="<?php echo $obj_emp->titulocard; ?>">Menú de la empresa</h2>
			<hr>
			<div class="card-body">
				<div class="row p-1 m-1">
					<div class="col-12 text-center">
						<button class="<?php echo $obj_emp->btn_enviarg; ?>" onClick="window.location.href='emp_registrar.php'">Registrar</button>
					</div>
				</div>
				<div class="row p-1 m-1">
					<div class="col-12 text-center">
						<button class="<?php echo $obj_emp->btn_enviarg; ?>" onClick="window.location.href='emp_modificar.php'">Modificar</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php 

	pie();

?>