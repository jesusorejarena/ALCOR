<?php

//session

require_once("tema.php");
require_once("../../backend/class/producto.class.php");

$obj_pro = new producto;
$obj_pro->classBootstrap();

encabezado("Menu de Productos");

check("Productos");


?>

<div class="<?php echo $obj_pro->container; ?>">
	<h2 class="<?php echo $obj_pro->titulos; ?>">Menú de Productos</h2>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-12 col-md-4">
			<div class="<?php echo $obj_pro->card; ?>">
				<div class="card-body">
					<div class="row p-1 m-1">
						<div class="col-12 p-1 m-1">
							<button class="<?php echo $obj_pro->btn_enviarg; ?>"
								onClick="window.location.href='pro_registrar.php'">Registrar</button>
						</div>
						<div class="col-12 p-1 m-1">
							<button class="<?php echo $obj_pro->btn_enviarg; ?>"
								onClick="window.location.href='pro_listartodo.php'">Lista</button>
						</div>
						<div class="col-12 p-1 m-1">
							<button class="<?php echo $obj_pro->btn_enviarg; ?>"
								onClick="window.location.href='pro_filtrar.php'">Filtrar</button>
						</div>
						<div class="col-12 p-1 m-1">
							<button class="<?php echo $obj_pro->btn_enviarg; ?>"
								onClick="window.location.href='pro_listarpapelera.php'">Papelera</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row py-5">
		<div class="col-12"></div>
	</div>
</div>


<?php

pie();

?>