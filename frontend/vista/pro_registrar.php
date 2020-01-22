<?php 

	require("tema.php");
	require("../../backend/clase/proveedor.class.php");

	$obj_edo = new proveedor;
	$obj_edo->asignar_valor();
	$obj_edo->puntero=$obj_edo->listar();

	encabezado("Registrar producto - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="card mx-auto bg-dark border border-success shadow-lg" style="width: 40rem">
			<h2 class="card-title text-white text-center pt-3">Registrar producto</h2>
			<hr>
			<div class="card-body">
				<form action="../../backend/controlador/producto.php" method="POST">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="nom_pro" class="text-white text-left h5">Nombre:</label>
								<input type="text" name="nom_pro" id="nom_pro" placeholder="Nombre:" minlength="2" maxlength="50" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="des_pro" class="text-white text-left h5">Descripción:</label>
								<textarea name="des_pro" id="des_pro" placeholder="Descripción:" minlength="3" maxlength="150" required="" class="text-white form-control bg-transparent border border-top-0 border-success"></textarea>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-6">
							<div class="form-group">
								<label for="pre_pro" class="text-white text-left h5">Precio:</label>
								<input type="text" name="pre_pro" id="pre_pro" placeholder="Precio:" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="can_pro" class="text-white text-left h5">Cantidad:</label>
								<input type="text" name="can_pro" id="can_pro" placeholder="Cantidad:" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="fky_proveedor" class="text-white text-left h5">Proveedor:</label>
								<select name="fky_proveedor" id="fky_proveedor" class="form-control bg-dark border border-top-0 border-left-0 border-right-0 border-success text-white">
									<option value="">Seleccione...</option>
									<?php while (($proveedor=$obj_edo->extraer_dato())>0)
										{
											echo "<option value='$proveedor[cod_edo]'>$proveedor[nom_edo]</option>";
										}
									?>
								</select>
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