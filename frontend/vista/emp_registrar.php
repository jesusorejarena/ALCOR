<?php 

	require("tema.php");

	encabezado("Registrar datos de la empresa - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="btn btn-outline-success" onClick="window.location.href=''">Atras</button>
			</div>
		</div>
		<div class="card mx-auto bg-dark border border-success shadow-lg" style="width: 40rem">
			<h2 class="card-title text-white text-center pt-3">Registrar datos de la empresa</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/empresa.php" method="POST">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="nom_ado" class="text-white text-left h5">Nombre:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Nombre:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="gen_ado" class="text-white text-left h5">Telefono:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Telefono:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="tel_ado" class="text-white text-left h5">RIF:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="RIF:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="nac_ado" class="text-white text-left h5">Dirección:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Dirección:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="tip_ado" class="text-white text-left h5">Correo:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Correo:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="cor_ado" class="text-white text-left h5">Horario Uno:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Horario Uno:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="car_ado" class="text-white text-left h5">Horario Dos:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Horario Dos:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
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