<?php

require_once("tema_session.php");
require_once("../../backend/class/preguntas.class.php");

$obj_pse = new preguntas;

headerr("Cambiar preguntas de seguridad");

?>

<!-- Formulario -->
<div class="container p-3 p-xl-2">
	<a class="btn btn-success btn-lg" href="usu_inicio.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded">
				<h2 class="card-title text-center pt-4">Cambiar preguntas de seguridad</h2>
				<form action="../../backend/controller/usuario.php" method="POST" class="was-validation" id="formulario" novalidate>
					<input type="hidden" name="cod_usu" value="<?php echo $_SESSION['codigo'] ?>">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="pregunta1">Primera pregunta:</label>
									<select name="fky_preseg1" id="pregunta1" class="form-control">
										<option value="">Seleccione...</option>
										<?php $obj_pse->puntero = $obj_pse->getPartOne();
										while (($pregunta1 = $obj_pse->extractData()) > 0) {
											echo "<option value='$pregunta1[cod_pse]'>$pregunta1[nom_pse]</option>";
										}
										?>
									</select>
									<small id="pregunta1Div" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="respuesta1">Primera respuesta:</label>
									<input type="text" name="re1_usu" id="respuesta1" class="form-control" placeholder="Primera respuesta" />
									<small id="respuesta1Div" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="pregunta2">Segunda pregunta:</label>
									<select name="fky_preseg2" id="pregunta2" class="form-control">
										<option value="">Seleccione...</option>
										<?php $obj_pse->puntero = $obj_pse->getPartTwo();
										while (($pregunta2 = $obj_pse->extractData()) > 0) {
											echo "<option value='$pregunta2[cod_pse]'>$pregunta2[nom_pse]</option>";
										}
										?>
									</select>
									<small id="pregunta2Div" class="invalid-feedback"></small>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="respuesta2">Segunda respuesta:</label>
									<input type="text" name="re2_usu" id="respuesta2" class="form-control" placeholder="Segunda respuesta" />
									<small id="respuesta2Div" class="invalid-feedback"></small>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between">
						<button type="reset" class="btn btn-success">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="updateQuestions">Actualizar</button>
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