<?php

//session

require_once("tema.php");
require_once("../../backend/class/empleado.class.php");

$obj_ado = new empleado;
$obj_ado->classBootstrap();

encabezado("Cambiar Contraseña");

$obj_ado->assignValue();
$obj_ado->cod_ado = $_SESSION['codigo'];
$obj_ado->puntero = $obj_ado->getByCode();
$empleado = $obj_ado->extractData();

?>

<div class="<?php echo $obj_ado->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_ado->btn_atras; ?>" onClick="window.location.href='menu_principal.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-12 col-md-4">
			<div class="<?php echo $obj_ado->card; ?>">
				<h2 class="<?php echo $obj_ado->titulocard; ?>">Cambiar Contraseña</h2>
				<hr>
				<div class="card-body">
					<form action="../../backend/controller/empleado.php" method="POST">
						<div class="row p-3">
							<div class="col-12">
								<div class="form-group">
									<input type="hidden" name="cod_ado" id="cod_ado" value="<?php echo $empleado['cod_ado']; ?>">
									<label for="cla_ado" class="<?php echo $obj_ado->for; ?>">Ingrese la Nueva Contraseña:</label>
									<input type="password" name="cla_ado" id="cla_ado" placeholder="Ingrese la Nueva Contraseña:"
										minlength="8" maxlength="20" required="" class="<?php echo $obj_ado->input_normal; ?>">
								</div>
							</div>
						</div>
						<div class="row p-3 text-center">
							<div class="col-6">
								<div class="form-group">
									<button type="reset" name="run" id="run" value="limpiar"
										class="<?php echo $obj_ado->btn_limpiar; ?>">Limpiar</button>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<button type="submit" name="run" id="run" value="updatePassword"
										class="<?php echo $obj_ado->btn_enviar; ?>">Modificar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

<?php

pie();

?>