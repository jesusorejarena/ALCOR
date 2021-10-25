<?php

require_once("tema_session.php");

headerr("Filtrar Prendas");

check("Prendas", 3);

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-outline-primary btn-lg" href="pre_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<div class="row justify-content-center">
		<div class="col-12 col-xl-6 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<h2 class="card-title text-center text-primary font-weight-bold pt-4">Filtrar Prendas</h2>
				<form action="pre_filtrado.php" method="POST" class="was-validation" id="formulario" novalidate>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="nom_pre">Nombre:</label>
									<input type="text" name="nom_pre" id="nom_pre" placeholder="Nombre:" class="form-control">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="des_pre:">Descripción:</label>
									<textarea name="des_pre" id="des_pre" placeholder="Descripción" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="pre_pre">Precio:</label>
									<input type="text" name="pre_pre" id="pre_pre" placeholder="Precio:" class="form-control">
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="est_pre">Estatus:</label>
									<select name="est_pre" id="est_pre" class="form-control">
										<option value="">Todos</option>
										<option value="A">Activo</option>
										<option value="I">Inactivo</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="reset" class="btn btn-outline-primary">Limpiar</button>
						<button type="submit" class="btn btn-primary">Filtrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>