<?php 

	require("tema.php");
	require("../../backend/clase/proveedor.class.php");

	$obj_edo = new proveedor;
	$obj_edo->asignar_valor();

	encabezado("Registrar proveedor - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="card mx-auto bg-dark border border-success shadow-lg" style="width: 40rem">
			<h2 class="card-title text-white text-center pt-3">Registrar proveedor</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/proveedor.php" method="POST">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="nom_edo" class="text-white text-left h5">Nombre:</label>
								<input type="text" name="nom_edo" id="nom_edo" placeholder="Nombre:" minlength="2" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="des_edo" class="text-white text-left h5">Descripción:</label>
								<textarea name="des_edo" id="des_edo" placeholder="Descripción:" minlength="3" maxlength="150" required="" class="text-white form-control bg-transparent border border-top-0 border-success"></textarea>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="dir_edo" class="text-white text-left h5">Dirección:</label>
								<textarea name="dir_edo" id="dir_edo" placeholder="Dirección:" minlength="3" maxlength="150" required="" class="text-white form-control bg-transparent border border-top-0 border-success"></textarea>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-4">
							<div class="form-group">
								<label for="tel_edo" class="text-white text-left h5">Telefono:</label>
								<input type="text" name="tel_edo" id="tel_edo" placeholder="Telefono:" minlength="11" maxlength="12" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="cor_edo" class="text-white text-left h5">Correo:</label>
								<input type="text" name="cor_edo" id="cor_edo" placeholder="Correo:" minlength="3" maxlength="100" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="rif_edo" class="text-white text-left h5">RIF:</label>
								<input type="text" name="rif_edo" id="rif_edo" placeholder="RIF:" minlength="10" maxlength="12" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="form-group text-center">
						<button type="submit" name="ejecutar" id="ejecutar" value="insertar" class="btn btn-outline-success btn-lg">Registrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php 
	
	pie();

?>