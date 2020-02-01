<?php	

	//session
	
	require("tema.php");
	require("../../backend/clase/producto.class.php");

	$obj_pro = new producto;
	$obj_pro->estandar();

	encabezado("Menu de producto - ALCOR C.A.");

?>

	<div class="<?php echo $obj_pro->container; ?>">
		<div class="<?php echo $obj_pro->card; ?>" style="width: 30rem">
			<h2 class="<?php echo $obj_pro->titulocard; ?>">Menú de producto</h2>
			<hr>
			<div class="card-body">
				<div class="row p-1 m-1">
					<div class="col-6 text-center">
						<button class="<?php echo $obj_pro->btn_enviarg; ?>" onClick="window.location.href='pro_registrar.php'">Registrar</button>
					</div>
					<div class="col-6 text-center">
						<button class="<?php echo $obj_pro->btn_enviarg; ?>" onClick="window.location.href='pro_filtrar.php'">Filtrar</button>
					</div>
				</div>
				<div class="row p-1 m-1">
					<div class="col-6 text-center">
						<button class="<?php echo $obj_pro->btn_enviarg; ?>" onClick="window.location.href='pro_listartodo.php'">Lista</button>
					</div>
					<div class="col-6 text-center">
						<button class="<?php echo $obj_pro->btn_enviarg; ?>" onClick="window.location.href='pro_listarpapelera.php'">Papelera</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php 

	pie();

?>