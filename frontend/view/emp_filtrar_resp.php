<?php

require_once("tema_session.php");

headerr("Filtrar Empresa - Auditoria");

checkAdminOrClient(1);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-outline-primary btn-lg" href="menu_config.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Filtrar Empresa - Auditoria</h2>
				<form action="emp_filtrado_resp.php" method="POST" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="nom_emp">Nombre:</label>
									<input type="text" name="nom_emp" id="nom_emp" class="form-control" placeholder="Nombre" />
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="tel_emp">Teléfono:</label>
									<input type="text" name="tel_emp" id="tel_emp" class="form-control" placeholder="Teléfono" />
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="rif_emp">RIF:</label>
									<input type="text" name="rif_emp" id="rif_emp" class="form-control" placeholder="RIF" />
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="dir_emp">Dirección:</label>
									<input type="text" name="dir_emp" id="dir_emp" class="form-control" placeholder="Dirección" />
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="cor_emp">Correo:</label>
									<input type="email" name="cor_emp" id="cor_emp" class="form-control" placeholder="Correo" />
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="hou_emp">Horario Uno:</label>
									<input type="text" name="hou_emp" id="hou_emp" class="form-control" placeholder="Horario Uno" />
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="hod_emp">Horario Dos:</label>
									<input type="text" name="hod_emp" id="hod_emp" class="form-control" placeholder="Horario Dos" />
								</div>
							</div>
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="reset" class="btn btn-outline-primary">Limpiar</button>
						<button type="submit" class="btn btn-primary">Filtrar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>