<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();

	encabezado("Menú de Configuración");

	comprobar("Configuración");

?>

	<div class="<?php echo $obj_car->container; ?>">
		<h1 class="<?php echo $obj_car->titulos; ?>">Menú de Configuración</h1>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-12 col-md-10">
				<div class="row">
					<div class="col-12 col-md-8">
						<div class="<?php echo $obj_car->card; ?>">
							<h1 class="<?php echo $obj_car->titulocard; ?>">Historial</h1>
							<hr>
							<div class="card-body">
								<div class="row p-1 m-1">
									<div class="col-6">
										<h3>Cargos:</h3>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='car_listartodo_resp.php'">Lista</button>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='car_filtrar_resp.php'">Filtrar</button>
									</div>
								</div>
								<div class="row p-1 m-1">
									<div class="col-6">
										<h3>Módulos:</h3>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='mod_listartodo_resp.php'">Lista</button>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='mod_filtrar_resp.php'">Filtrar</button>
									</div>
								</div>
								<div class="row p-1 m-1">
									<div class="col-6">
										<h3>Permisos:</h3>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='per_listartodo_resp.php'">Lista</button>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='per_filtrar_resp.php'">Filtrar</button>
									</div>
								</div>
								<div class="row p-1 m-1">
									<div class="col-6">
										<h3>Empleados:</h3>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='ado_listartodo_resp.php'">Lista</button>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='ado_filtrar_resp.php'">Filtrar</button>
									</div>
								</div>
								<div class="row p-1 m-1">
									<div class="col-6">
										<h3>Proveedores:</h3>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='edo_listartodo_resp.php'">Lista</button>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='edo_filtrar_resp.php'">Filtrar</button>
									</div>
								</div>
								<div class="row p-1 m-1">
									<div class="col-6">
										<h3>Productos:</h3>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='pro_listartodo_resp.php'">Lista</button>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='pro_filtrar_resp.php'">Filtrar</button>
									</div>
								</div>
								<div class="row p-1 m-1">
									<div class="col-6">
										<h3>Formularios:</h3>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='for_listartodo_resp.php'">Lista</button>
									</div>
									<div class="col-3">
										<button class="<?php echo $obj_car->btn_enviarg; ?>" onClick="window.location.href='for_filtrar_resp.php'">Filtrar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="<?php echo $obj_car->card; ?>">
							<h1 class="<?php echo $obj_car->titulocard; ?>">Ajustes</h1>
							<hr>
							<div class="card-body">
								<div class="row p-1 m-1">
									<div class="col-12 p-1 m-1 text-center">
										<a href="../../database/respaldo/respaldo_db.php" class="<?php echo $obj_car->btn_enviarg; ?>">Respaldar BBDD</a>
									</div>
								</div>
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