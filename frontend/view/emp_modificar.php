<?php

require_once("tema_session.php");
require_once("../../backend/class/empresa.class.php");

$obj_emp = new empresa;

$obj_emp->assignValue();
$obj_emp->puntero = $obj_emp->getByCode();
$empresa = $obj_emp->extractData();

headerr("Modificar - Empresa");

checkAdmin();

?>

<!-- Formulario -->
<div class="container p-3 p-xl-2">
	<a class="btn btn-success btn-lg" href="usu_inicio.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Datos de la empresa</h2>
				<form action="../../backend/controller/empresa.php" method="POST" class="was-validation" id="formulario" novalidate>
					<input type="hidden" name="cod_emp" id="cod_emp" value="<?php echo $empresa['cod_emp']; ?>">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="alfanumerico">Nombre:</label>
									<input type="text" name="nom_emp" id="alfanumerico" class="form-control" value="<?php echo $empresa['nom_emp']; ?>" placeholder="Nombre" />
									<small id="alfanumericoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="telefono">Teléfono:</label>
									<input type="text" name="tel_emp" id="telefono" class="form-control" value="<?php echo $empresa['tel_emp']; ?>" placeholder="Teléfono" />
									<small id="telefonoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="rifCompleto">RIF:</label>
									<input type="text" name="rif_emp" id="rifCompleto" class="form-control" value="<?php echo $empresa['rif_emp']; ?>" placeholder="RIF" />
									<small id="rifCompletoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="direccion">Dirección:</label>
									<input type="text" name="dir_emp" id="direccion" class="form-control" value="<?php echo $empresa['dir_emp']; ?>" placeholder="Dirección" />
									<small id="direccionDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="correo">Correo:</label>
									<input type="email" name="cor_emp" id="correo" class="form-control" value="<?php echo $empresa['cor_emp']; ?>" placeholder="Correo" />
									<small id="correoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="horario1">Horario Uno:</label>
									<input type="text" name="hou_emp" id="horario1" class="form-control" value="<?php echo $empresa['hou_emp']; ?>" placeholder="Horario Uno" />
									<small id="horario1Div" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="horario2">Horario Dos:</label>
									<input type="text" name="hod_emp" id="horario2" class="form-control" value="<?php echo $empresa['hod_emp']; ?>" placeholder="Horario Dos" />
									<small id="horario2Div" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<small>Ultima modificación: <?php echo $empresa['act_emp']; ?></small>
							</div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between">
						<button type="reset" class="btn btn-success">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="update">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="../js/validaciones.js"></script>

<?php

footer();

?>