<?php 

	require("tema.php");
	require("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->puntero=$obj_car->listar();

	encabezado("Registrar empleado - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="card mx-auto bg-dark border border-success shadow-lg" style="width: 40rem">
			<h2 class="card-title text-white text-center pt-3">Registrar empleado</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/empleado.php" method="POST">
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="nom_ado" class="text-white text-left h5">Nombre:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Nombre:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="ape_ado" class="text-white text-left h5">Apellido:</label>
								<input type="text" name="ape_ado" id="ape_ado" placeholder="Apellido:" minlength="3" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="ced_ado" class="text-white text-left h5">Cédula:</label>
								<input type="text" name="ced_ado" id="ced_ado" placeholder="Cédula:" minlength="2" maxlength="10" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="tel_ado" class="text-white text-left h5">Telefono:</label>
								<input type="text" name="tel_ado" id="tel_ado" placeholder="Telefono:" minlength="12" maxlength="12" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="cor_ado" class="text-white text-left h5">Correo:</label>
								<input type="text" name="cor_ado" id="cor_ado" placeholder="Correo:" minlength="3" maxlength="100" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="car_ado" class="text-white text-left h5">Cargo:</label>
								<select name="car_ado" id="car_ado" class="form-control bg-dark border border-top-0 border-left-0 border-right-0 border-success text-white">
									<option value="">Seleccione...</option>
									<?php while (($cargo=$obj_car->extraer_dato())>0)
										{
											echo "<option value='$cargo[cod_car]'>$cargo[nom_car]</option>";
										}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="dir_ado" class="text-white text-left h5">Dirección:</label>
								<input type="text" name="dir_ado" id="dir_ado" placeholder="Dirección:" minlength="3" maxlength="100" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="cla_ado" class="text-white text-left h5">Clave para el usuario:</label>
								<input type="password" name="cla_ado" id="cla_ado" placeholder="Clave para el usuario:" minlength="8" maxlength="20"      require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="con_ado" class="text-white text-left h5">Fecha de contrato:</label>
								<input type="date" name="con_ado" id="con_ado" placeholder="Fecha de contrato:" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
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