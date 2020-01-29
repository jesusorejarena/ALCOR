<?php 

	require("tema.php");

	encabezado("Registrar cargo - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="btn btn-outline-success" onClick="window.location.href=''">Atras</button>
			</div>
		</div>
		<div class="card mx-auto bg-dark border border-success shadow-lg" style="width: 40rem">
			<h2 class="card-title text-white text-center pt-3">Registrar cargo</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/cargo.php" method="POST">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="nom_car" class="text-white text-left h5">Nuevo cargo:</label>
								<input type="text" name="nom_car" id="nom_car" placeholder="Nuevo:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
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
								<button type="submit" name="ejecutar" id="ejecutar" value="insertar" class="btn btn-outline-success btn-lg">Registrar</button>
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