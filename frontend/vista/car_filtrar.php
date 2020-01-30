<?php 

	require("tema.php");
	require("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();

	encabezado("Filtrar cargo - ALCOR C.A.");

?>

	<div class="<?php echo $obj_car->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_car->btn_atras; ?>" onClick="window.location.href='car_.php'">Atras</button>
			</div>
		</div>
		<div class="<?php echo $obj_car->card; ?>" style="width: 60rem">
			<h2 class="<?php echo $obj_car->titulocard; ?>">Filtrar cargo</h2>
			<hr>
			<div class="card-body">
				<form action="car_filtrado.php" method="POST">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="cod_car" class="text-white text-left h5">Código:</label>
								<input type="text" name="cod_car" id="cod_car" placeholder="Código:" minlength="1" maxlength="11" require="" class="<?php echo $obj_car->input_normal; ?>">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="nom_car" class="text-white text-left h5">Nombre:</label>
								<input type="text" name="nom_car" id="nom_car" placeholder="Nombre:" minlength="3" maxlength="50" require="" class="<?php echo $obj_car->input_normal; ?>">
							</div>
						</div>
					</div>
					<div class="row p-3 text-center">
						<div class="col-6">
							<div class="form-group">
								<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_car->btn_limpiar; ?>">Limpiar</button>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<button type="submit" name="ejecutar" id="ejecutar" value="filtrar" class="<?php echo $obj_car->btn_atras; ?> btn-lg">Filtrar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php 
	
	pie();

?>