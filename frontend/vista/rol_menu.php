<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();

	encabezado("Menú de Roles - ALCOR C.A.");	

	comprobar("Roles");

?>

	<div class="<?php echo $obj_car->container; ?>">
		<div class="row py-4"><div class="col-12"></div></div>
		<h2 class="<?php echo $obj_car->titulos; ?>">Menú de Roles</h2>
		<div class="row">
			<div class="col-12 col-md-4">
				<div class="<?php echo $obj_car->card; ?>">
					<h2 class="<?php echo $obj_car->titulocard; ?>">Menú de Cargos</h2>
					<hr>
					<div class="card-body">
						<div class="row p-1 m-1">
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='car_registrar.php'">Registrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='car_listartodo.php'">Lista</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='car_filtrar.php'">Filtrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='car_listarpapelera.php'">Papelera</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="<?php echo $obj_car->card; ?>">
					<h2 class="<?php echo $obj_car->titulocard; ?>">Menú de Módulos</h2>
					<hr>
					<div class="card-body">
						<div class="row p-1 m-1">
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='mod_registrar.php'">Registrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='mod_listartodo.php'">Lista</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='mod_filtrar.php'">Filtrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='mod_listarpapelera.php'">Papelera</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="<?php echo $obj_car->card; ?>">
					<h2 class="<?php echo $obj_car->titulocard; ?>">Menú de Permisos</h2>
					<hr>
					<div class="card-body">
						<div class="row p-1 m-1">
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='per_registrar.php'">Registrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='per_listartodo.php'">Lista</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='per_filtrar.php'">Filtrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='per_listarpapelera.php'">Papelera</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row py-4"><div class="col-12"></div></div>
	</div>


<?php 

	pie();

?>