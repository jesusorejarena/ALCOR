<?php

require_once("tema_session.php");
require_once("../../backend/class/prenda.class.php");

$obj_pre = new prenda;

$cod_pre = $_REQUEST['cod_pre'];

$obj_pre->assignValue();
$obj_pre->puntero = $obj_pre->getByCode();
$prenda = $obj_pre->extractData();

headerr("Modificar Prenda");

check("Prendas", 3);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-success btn-lg" href="pre_listartodo.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Modificar Prenda</h2>
				<form action="../../backend/controller/prenda.php" method="POST" class="was-validation my-0" id="formulario" novalidate>
					<input type="hidden" name="cod_pre" value="<?php echo $prenda['cod_pre']; ?>">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="alfanumerico">Nombre:</label>
									<input type="text" name="nom_pre" id="alfanumerico" placeholder="Nombre:" value="<?php echo $prenda['nom_pre'] ?>" class="form-control">
									<small id="alfanumericoDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="descripcion">Descripción:</label>
									<textarea name="des_pre" id="descripcion" placeholder="Descripción" value="asd" class="form-control"><?php echo $prenda['des_pre'] ?></textarea>
									<small id="descripcionDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="precio">Precio:</label>
									<input type="number" name="pre_pre" id="precio" placeholder="Precio:" value="<?php echo $prenda['pre_pre'] ?>" class="form-control">
									<small id="precioDiv" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="estatus">Estatus:</label>
									<select name="est_pre" id="estatus" class="form-control">
										<option value="">Seleccione...</option>
										<?php $seleccionado = ($prenda["est_pre"] == "A") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="A">Activo</option>
										<?php $seleccionado = ($prenda["est_pre"] == "I") ? "selected" : ""; ?>
										<option <?php echo $seleccionado; ?> value="I">Inactivo</option>
									</select>
									<small id="estatusDiv" class="invalid-feedback"></small>
								</div>
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