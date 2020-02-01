<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/formulario.class.php");

	$obj_edo = new formulario;
	$obj_edo->estandar();

	encabezado("Menu de formularios - ALCOR C.A.");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="<?php echo $obj_edo->card; ?>" style="width: 30rem">
			<h2 class="<?php echo $obj_edo->titulocard; ?>">Menú de formularios</h2>
			<hr>
			<div class="card-body">
				<div class="row p-1 m-1">
					<div class="col-12 text-center">
						<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='for_listartodo.php'">Lista</button>
					</div>
				</div>
				<div class="row p-1 m-1">
					<div class="col-12 text-center">
						<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='for_filtrar.php'">Filtrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php 

	pie();

?>