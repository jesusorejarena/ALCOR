<?php

//session

require_once("tema.php");
require_once("../../backend/class/cargo.class.php");

$obj_car = new cargo;
$obj_car->classBootstrap();

encabezado("Filtrar Cargo 'Historial'");

check("Historial");

?>

<div class="<?php echo $obj_car->container; ?>">
	<div class="row pb-3 mb-3 bg-white">
		<div class="col-12 text-left">
			<button class="<?php echo $obj_car->btn_atras; ?>" onClick="window.location.href='menu_config.php'"><i
					class="icon ion-md-arrow-round-back"></i></button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-12 col-md-8">
			<div class="<?php echo $obj_car->card; ?>">
				<h2 class="<?php echo $obj_car->titulocard; ?>">Filtrar Cargo 'Historial'</h2>
				<hr>
				<div class="card-body">
					<form action="car_filtrado_resp.php" method="POST">
						<div class="row p-3">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="cod_car" class="<?php echo $obj_car->for; ?>">Código:</label>
									<input type="text" name="cod_car" id="cod_car" placeholder="Código:" pattern="[0-9]+" pattern="[0-9]+"
										class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="nom_car" class="<?php echo $obj_car->for; ?>">Nombre:</label>
									<input type="text" name="nom_car" id="nom_car" placeholder="Nombre:"
										class="<?php echo $obj_car->input_normal; ?>">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="est_car" class="<?php echo $obj_car->for; ?>">Activo/Inactivo:</label>
									<select name="est_car" id="est_car" class="<?php echo $obj_car->input_normal; ?>">
										<option value="">General</option>
										<option value="A">Activo</option>
										<option value="I">Inactivo</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="bas_car" class="<?php echo $obj_car->for; ?>">Activo/Papelera:</label>
									<select name="bas_car" id="bas_car" class="<?php echo $obj_car->input_normal; ?>">
										<option value="">General</option>
										<option value="A">Activo</option>
										<option value="B">En papelera</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row p-3 text-center">
							<div class="col-6">
								<div class="form-group">
									<button type="reset" name="run" id="run" value="limpiar"
										class="<?php echo $obj_car->btn_limpiar; ?>">Limpiar</button>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<button type="submit" name="run" id="run" value="filter"
										class="<?php echo $obj_car->btn_enviar; ?>">Filtrar</button>
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