<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();

	encabezado("Menu de cargos - ALCOR C.A.");

?>

	<div class="<?php echo $obj_car->container; ?>">
		<div class="<?php echo $obj_car->card; ?>" style="width: 30rem">
			<h2 class="<?php echo $obj_car->titulocard; ?>">Menú de cargos</h2>
			<hr>
			<div class="card-body">
				<div class="row p-1 m-1">
					<div class="col-6 text-center">
						<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='car_registrar.php'">Registrar</button>
					</div>
					<div class="col-6 text-center">
						<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='car_filtrar.php'">Filtrar</button>
					</div>
				</div>
				<div class="row p-1 m-1">
					<div class="col-6 text-center">
						<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='car_listartodo.php'">Lista</button>
					</div>
					<div class="col-6 text-center">
						<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='car_listarpapelera.php'">Papelera</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php 

	pie();

?>