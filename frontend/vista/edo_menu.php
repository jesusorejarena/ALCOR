<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/proveedor.class.php");

	$obj_edo = new proveedor;
	$obj_edo->estandar();

	encabezado("Menu de proveedor - ALCOR C.A.");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="<?php echo $obj_edo->card; ?>" style="width: 30rem">
			<h2 class="<?php echo $obj_edo->titulocard; ?>">Menú de proveedor</h2>
			<hr>
			<div class="card-body">
				<div class="row p-1 m-1">
					<div class="col-6 text-center">
						<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='edo_registrar.php'">Registrar</button>
					</div>
					<div class="col-6 text-center">
						<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='edo_filtrar.php'">Filtrar</button>
					</div>
				</div>
				<div class="row p-1 m-1">
					<div class="col-6 text-center">
						<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='edo_listartodo.php'">Lista</button>
					</div>
					<div class="col-6 text-center">
						<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='edo_listarpapelera.php'">Papelera</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php 

	pie();

?>