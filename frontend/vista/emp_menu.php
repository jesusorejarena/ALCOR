<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/empresa.class.php");

	$obj_emp = new empresa;
	$obj_emp->estandar();

	encabezado("Menu de la empresa - ALCOR C.A.");

?>

	<div class="<?php echo $obj_emp->container; ?>">
		<div class="row py-5"><div class="col-12"></div></div>
		<h2 class="<?php echo $obj_emp->titulos; ?>">Datos de la Empresa</h2>
		<div class="<?php echo $obj_emp->card; ?>" style="width: 30rem">
			<div class="card-body">
				
					<div class="row p-1 m-1">
						<div class="col-12 text-center">
							<button class="<?php echo $obj_emp->btn_enviarg; ?>" onClick="window.location.href='emp_registrar.php'">Registrar</button>
						</div>
					</div>		
				
				<div class="row p-1 m-1">
					<div class="col-12 text-center">
						<button class="<?php echo $obj_emp->btn_enviarg; ?>" onClick="window.location.href='emp_modificar.php'">Modificar</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row py-5"><div class="col-12"></div></div>
	</div>


<?php 

	pie();

?>