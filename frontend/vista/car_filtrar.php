<?php 

	require("tema.php");

	encabezado("Filtrar cargo - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="btn btn-outline-success" onClick="window.location.href='car_.php'">Atras</button>
			</div>
		</div>
		<div class="card mx-auto bg-dark border border-success shadow-lg" style="width: 60rem">
			<h2 class="card-title text-white text-center pt-3">Filtrar cargo</h2>
			<hr>
			<div class="card-body">
				<form action="car_filtrado.php" method="POST">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="cod_car" class="text-white text-left h5">Código:</label>
								<input type="text" name="cod_car" id="cod_car" placeholder="Código:" minlength="1" maxlength="11" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="nom_car" class="text-white text-left h5">Nombre:</label>
								<input type="text" name="nom_car" id="nom_car" placeholder="Nombre:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3 text-center">
						<div class="col-6">
							<div class="form-group">
								<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="btn btn-success btn-lg">Limpiar</button>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<button type="submit" name="ejecutar" id="ejecutar" value="filtrar" class="btn btn-outline-success btn-lg">Filtrar</button>
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