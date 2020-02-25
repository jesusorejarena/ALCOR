<?php
	
	require_once("tema.php");
	require_once("../../backend/clase/empleado.class.php");
	require_once("../../backend/clase/cargo.class.php");

	$obj_ado = new empleado;
	$obj_car = new cargo;
	$obj_ado->estandar();

	encabezado("Menu principal");

	$obj_ado->cod_ado=$_SESSION['codigo'];
	$obj_ado->puntero=$obj_ado->listar_modificar();
	$empleado=$obj_ado->extraer_dato();

	$obj_car->cod_car=$empleado['cod_car'];
	$obj_car->puntero=$obj_car->listar_modificar();
	$cargo=$obj_car->extraer_dato();

?>

	<div class="<?php echo $obj_ado->container; ?>">
		<h2 class="<?php echo $obj_ado->titulos; ?>">Información General</h2>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-12 col-md-10">
				<div class="row">
					<div class="col-12 col-md-5">
						<div class="<?php echo $obj_ado->card; ?>">
							<h2 class="<?php echo $obj_ado->titulocard; ?>">Información Personal</h2>
							<hr>
							<div class="card-body">
								<div class="row p-1 m-1">
									<div class="col-12 p-1 m-1">
										<?php echo "
											<p><b>Nombre:</b> $empleado[nom_ado]</p>
											<p><b>Apellido:</b> $empleado[ape_ado]</p>
											<p><b>Teléfono:</b> $empleado[tel_ado]</p>
											<p><b>Correo:</b> $empleado[cor_ado]</p>
											<p><b>Cargo:</b> $cargo[nom_car]</p>
											<p><b>Dirección:</b> $empleado[dir_ado]</p>
										"; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-12 col-md-5">
						<div class="<?php echo $obj_ado->card; ?>">
							<h2 class="<?php echo $obj_ado->titulocard; ?>">Configuración de la Cuenta</h2>
							<hr>
							<div class="card-body">
								<div class="row p-1 m-1">
									<div class="col-12 p-1 m-1 text-center">
										<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='ado_datospersonales.php'">Datos Personales</button>
										<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='ado_cambiarcontrasena.php'">Cambiar Contraseña</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

<?php 

	pie();

?>