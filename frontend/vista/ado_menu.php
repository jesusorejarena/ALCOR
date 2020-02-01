<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/empleado.class.php");

	$obj_ado = new empleado;
	$obj_ado->estandar();

	encabezado("Menu de empleados - ALCOR C.A.");

?>

	<div class="<?php echo $obj_ado->container; ?>">
		<div class="<?php echo $obj_ado->card; ?>" style="width: 30rem">
			<h2 class="<?php echo $obj_ado->titulocard; ?>">Menú de empleados</h2>
			<hr>
			<div class="card-body">
				<div class="row p-1 m-1">
					<div class="col-6 text-center">
						<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='ado_registrar.php'">Registrar</button>
					</div>
					<div class="col-6 text-center">
						<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='ado_filtrar.php'">Filtrar</button>
					</div>
				</div>
				<div class="row p-1 m-1">
					<div class="col-6 text-center">
						<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='ado_listartodo.php'">Lista</button>
					</div>
					<div class="col-6 text-center">
						<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='ado_listarpapelera.php'">Papelera</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php 

	pie();

?>