<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/empresa.class.php");

	$obj_edo = new empresa;
	$obj_edo->estandar();

	encabezado("Menu de la empresa - ALCOR C.A.");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="<?php echo $obj_edo->card; ?>" style="width: 30rem">
			<h2 class="<?php echo $obj_edo->titulocard; ?>">Menú de la empresa</h2>
			<hr>
			<div class="card-body">
				<div class="row p-1 m-1">
					<div class="col-12 text-center">
						<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='edo_registrar.php'">Registrar</button>
					</div>
				</div>
				<div class="row p-1 m-1">
					<div class="col-12 text-center">
						<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='edo_modificar.php'">Modificar</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php 

	pie();

?>