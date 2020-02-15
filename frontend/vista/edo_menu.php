<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/proveedor.class.php");

	$obj_edo = new proveedor;
	$obj_edo->estandar();

	encabezado("Menú de Proveedores - ALCOR C.A.");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="row py-5"><div class="col-12"></div></div>
		<h2 class="<?php echo $obj_edo->titulos; ?>">Menú de Proveedores</h2>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-12 col-md-4">
				<div class="<?php echo $obj_edo->card; ?>">
					<div class="card-body">
						<div class="row p-1 m-1">
							<div class="col-12 p-1 m-1 text-center">
								<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='edo_registrar.php'">Registrar</button>
							</div>
							<div class="col-12 p-1 m-1 text-center">
								<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='edo_listartodo.php'">Lista</button>
							</div>
							<div class="col-12 p-1 m-1 text-center">
								<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='edo_filtrar.php'">Filtrar</button>
							</div>
							<div class="col-12 p-1 m-1 text-center">
								<button class="<?php echo $obj_edo->btn_enviarg; ?>" onClick="window.location.href='edo_listarpapelera.php'">Papelera</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="row py-5"><div class="col-12"></div></div>
	</div>


<?php 

	pie();

?>