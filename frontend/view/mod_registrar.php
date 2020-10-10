<?php

//session

require_once("tema.php");
require_once("../../backend/class/modulo.class.php");
require_once("../../backend/class/cargo.class.php");

$obj_mod = new modulo;
$obj_mod->classBootstrap();

$obj_car = new cargo;
$obj_car->puntero = $obj_car->getAll();

encabezado("Registrar Módulo");

check("Roles");

?>

<div class="<?php echo $obj_mod->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_mod->btn_atras; ?>" onClick="window.location.href='rol_menu.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-12 col-md-8">
			<div class="<?php echo $obj_mod->card; ?>">
				<h2 class="<?php echo $obj_mod->titulocard; ?>">Registrar Módulo</h2>
				<hr>
				<div class="card-body">
					<form action="../../backend/controller/modulo.php" method="POST">
						<div class="row p-3">
							<div class="col-12">
								<div class="form-group">
									<label for="url_mod" class="<?php echo $obj_mod->for; ?>">URL:</label>
									<select name="url_mod" id="url_mod" required="" class="<?php echo $obj_mod->input_normal; ?>">
										<option value="">Seleccione...</option>
										<option value="ado_menu.php">Menú de Empleados</option>
										<option value="edo_menu.php">Menú de Proveedores</option>
										<option value="pro_menu.php">Menú de Productos</option>
										<option value="ven_menu.php">Menú de Venta</option>
										<option value="for_menu.php">Menú de Formularios</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-6">
								<div class="form-group">
									<button type="reset" name="run" id="run" value="limpiar"
										class="<?php echo $obj_mod->btn_limpiar; ?>">Limpiar</button>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<button type="submit" name="run" id="run" value="create"
										class="<?php echo $obj_mod->btn_enviar; ?>">Registrar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<?php

pie();

?>