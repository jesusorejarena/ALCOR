<?php

//session

require_once("tema.php");
require_once("../../backend/class/empresa.class.php");

$obj_emp = new empresa;
$obj_emp->classBootstrap();

encabezado("Menu de la empresa");

checkadmin();

?>

<div class="<?php echo $obj_emp->container; ?>">
	<h2 class="<?php echo $obj_emp->titulos; ?>">Datos de la Empresa</h2>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-12 col-md-4">
			<div class="<?php echo $obj_emp->card; ?>">
				<div class="card-body">
					<div class="row p-1 m-1">
						<div class="col-12 text-center">
							<button class="<?php echo $obj_emp->btn_enviarg; ?>"
								onClick="window.location.href='emp_modificar.php'">Modificar</button>
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