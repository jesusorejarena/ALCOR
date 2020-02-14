<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();

	encabezado("Menu de roles - ALCOR C.A.");

?>

	<div class="<?php echo $obj_car->container; ?>">
		<h2 class="<?php echo $obj_car->titulos; ?>">Menú de roles</h2>
		<div class="row">
			<div class="col-3">
				<div class="<?php echo $obj_car->card; ?>">
					<h2 class="<?php echo $obj_car->titulocard; ?>">Menú de cargos</h2>
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
			<div class="col-3">
				<div class="<?php echo $obj_car->card; ?>">
					<h2 class="<?php echo $obj_car->titulocard; ?>">Menú de modulos</h2>
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
			<div class="col-3">
				<div class="<?php echo $obj_car->card; ?>">
					<h2 class="<?php echo $obj_car->titulocard; ?>">Menú de opciones</h2>
					<hr>
					<div class="card-body">
						<div class="row p-1 m-1">
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='opc_registrar.php'">Registrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='opc_listartodo.php'">Lista</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='opc_filtrar.php'">Filtrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="<?php echo $obj_car->card; ?>">
					<h2 class="<?php echo $obj_car->titulocard; ?>">Menú de permisos</h2>
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
	</div>


<?php 

	pie();

?>