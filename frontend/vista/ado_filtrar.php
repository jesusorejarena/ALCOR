<?php 

	require("tema.php");
	require("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->puntero=$obj_car->listar_normal();

	encabezado("Filtrar empleados - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="btn btn-outline-success" onClick="window.location.href='ado_.php'">Atras</button>
			</div>
		</div>
		<div class="card mx-auto bg-dark border border-success shadow-lg" style="width: 60rem">
			<h2 class="card-title text-white text-center pt-3">Filtrar empleados</h2>
			<hr>
			<div class="card-body">
				<form action="ado_filtrado.php" method="POST">
					<div class="row p-3">
						<div class="col-2">
							<div class="form-group">
								<label for="cod_ado" class="text-white text-left h5">Código:</label>
								<input type="text" name="cod_ado" id="cod_ado" placeholder="Código:" minlength="1" maxlength="11" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-5">
							<div class="form-group">
								<label for="nom_ado" class="text-white text-left h5">Nombre:</label>
								<input type="text" name="nom_ado" id="nom_ado" placeholder="Nombre:" minlength="3" maxlength="50" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-5">
							<div class="form-group">
								<label for="ape_ado" class="text-white text-left h5">Apellido:</label>
								<input type="text" name="ape_ado" id="ape_ado" placeholder="Apellido:" minlength="3" maxlength="50" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="gen_ado" class="text-white text-left h5">Genero:</label>
								<select name="gen_ado" id="gen_ado" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
									<option value="">Seleccione...</option>
									<option value="H">Hombre</option>
									<option value="M">Mujer</option>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="nac_ado" class="text-white text-left h5">Fecha de nacimiento:</label>
								<input type="date" name="nac_ado" id="nac_ado" placeholder="Fecha de nacimiento:" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-4">
							<div class="form-group">
								<label for="tip_ado" class="text-white text-left h5">Tipo:</label>
								<select name="tip_ado" id="tip_ado" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
									<option value="">Seleccione...</option>
									<option value="V">Venezolano</option>
									<option value="E">Extranjero</option>
								</select>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="ced_ado" class="text-white text-left h5">Cédula:</label>
								<input type="text" name="ced_ado" id="ced_ado" placeholder="Cédula:" minlength="1" maxlength="8" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="tel_ado" class="text-white text-left h5">Telefono:</label>
								<input type="text" name="tel_ado" id="tel_ado" placeholder="Telefono:" minlength="11" maxlength="11" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="cor_ado" class="text-white text-left h5">Correo:</label>
								<input type="email" name="cor_ado" id="cor_ado" placeholder="Correo:" minlength="1" maxlength="100" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="car_ado" class="text-white text-left h5">Cargo:</label>
								<select name="car_ado" id="car_ado" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
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
								<input type="text" name="dir_ado" id="dir_ado" placeholder="Dirección:" minlength="3" maxlength="100" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-4">
							<div class="form-group">
								<label for="cre_ado" class="text-white text-left h5">Fecha de Contrato:</label>
								<input type="date" name="cre_ado" id="cre_ado" placeholder="Fecha de nacimiento:" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="est_ado" class="text-white text-left h5">Activo/Inactivo:</label>
								<select name="est_ado" id="est_ado" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
									<option value="">General</option>
									<option value="A">Activo</option>
									<option value="I">Inactivo</option>
								</select>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="bas_ado" class="text-white text-left h5">Activo/Papelera:</label>
								<select name="bas_ado" id="bas_ado" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
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