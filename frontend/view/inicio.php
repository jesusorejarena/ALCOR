<?php

require_once("tema_inicio.php");

headerr("Inicio");

require_once("../../backend/class/empresa.class.php");

$obj_emp = new empresa;
$obj_emp->puntero = $obj_emp->getByCode();
$empresa = $obj_emp->extractData();

?>

<!-- Comienza banner -->

<div id="section1" class="bg-light container-fluid pt-xl-5 px-2 px-xl-5">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-12 col-xl-7 text-center">
				<img class="img-fluid" src="../img/undraw_Location_tracking_re_n3ok.svg" alt="" width="60%">
			</div>
			<div class="col-12 col-xl-5 text-center">
				<h2 class="display-4 mb-3">
					<?php echo $empresa['ban_tit_emp']; ?>
				</h2>
				<h5>
					<?php echo $empresa['ban_par_emp']; ?>
				</h5>
			</div>
		</div>
	</div>
</div>

<!-- Termina banner -->

<!-- Comienza onda -->

<div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
		style="height: 100%; width: 100%;">
		<path d="M0.00,49.98 C149.99,150.00 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z"
			style="stroke: none; fill: #f8f9fa;"></path>
	</svg>
</div>

<!-- Termina onda -->

<!-- Comienza body -->

<div class="container mt-3 p-2 mt-xl-3 p-xl-5">
	<div class="row">
		<div class="col-12">

			<!-- Comienza las cajas -->

			<!-- Caja 1 -->

			<div class="container my-5 px-4 my-xl-5 px-xl-5">
				<div class="row align-items-center">
					<div class="col-12 col-xl-6 text-center">
						<img class="img-fluid" src="../img/undraw_wishes_icyp.svg" alt="Pregunta" width="80%">
					</div>
					<div class="col-12 col-xl-6 my-3 my-xl-5">
						<h2 class="text-center text-primary font-weight-bold mb-5">
							<?php echo $empresa['tit_1_emp']; ?>
						</h2>
						<p class="text-left" style="font-size: 20px;">
							<?php echo $empresa['par_1_emp']; ?>
						</p>
					</div>
				</div>
			</div>

			<!-- Caja 2 -->

			<div class="container my-5 p-4 my-xl-5 p-xl-5">
				<div class="row align-items-center">
					<div class="d-xl-none col-12 col-xl-6 text-center">
						<img class="img-fluid" src="../img/undraw_science_fqhl.svg" alt="Telefono" width="80%">
					</div>
					<div class="col-12 col-xl-6 my-3 my-xl-5">
						<h2 class="text-center text-primary font-weight-bold mb-5">
							<?php echo $empresa['tit_2_emp']; ?>
						</h2>
						<p class="text-left" style="font-size: 20px;">
							<?php echo $empresa['par_2_emp']; ?>
						</p>
					</div>
					<div class="d-none d-xl-block col-12 col-xl-6 text-center">
						<img class="img-fluid" src="../img/undraw_science_fqhl.svg" alt="Telefono" width="80%">
					</div>
				</div>
			</div>

			<!-- Caja 3 -->

			<div class="container mt-5 px-4 my-xl-5 px-xl-5">
				<div class="row align-items-center">
					<div class="col-12 col-xl-6 text-center">
						<img class="img-fluid" src="../img/undraw_career_progress_ivdb.svg" alt="Pregunta" width="80%">
					</div>
					<div class="col-12 col-xl-6 my-3 my-xl-5">
						<h2 class="text-center text-primary font-weight-bold mb-5">
							<?php echo $empresa['tit_3_emp']; ?>
						</h2>
						<p class="text-left" style="font-size: 20px;">
							<?php echo $empresa['par_3_emp']; ?>
						</p>
					</div>
				</div>
			</div>

			<!-- Caja 4 -->

			<div id="section2" class="container mt-3 p-2 mt-xl-3 p-xl-5">
				<!-- Mobile -->
				<div class="row d-block d-xl-none">
					<div class="col-12 col-xl-6 text-center my-5">
						<div class="row">
							<div class="col-12">
								<h2 class=" my-3 text-primary font-weight-bold">Misión</h2>
								<p class="mx-2" style="font-size: 20px;">
									<?php echo $empresa['mis_emp']; ?>
								</p>
							</div>
							<div class="col-12 mt-3">
								<img class="img-fluid" src="../img/undraw_shared_goals_3d12.svg" alt="Servicio" width="60%">
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6 text-center my-5">
						<div class="row">
							<div class="col-12">
								<h2 class=" my-3 text-primary font-weight-bold">Visión</h2>
								<p class="mx-2" style="font-size: 20px;">
									<?php echo $empresa['vis_emp']; ?>
								</p>
							</div>
							<div class="col-12 mt-3">
								<img class="img-fluid" src="../img/undraw_art_thinking_3g82.svg" alt="Seguridad" width="60%">
							</div>
						</div>
					</div>
				</div>
				<!-- Desktop -->
				<div class="row d-none d-xl-flex">
					<div class="col-12 col-xl-6 text-center my-3">
						<div class="row">
							<div class="col-12">
								<h2 class=" my-3 text-primary font-weight-bold">Misión</h2>
								<p class="mx-2" style="font-size: 20px;">
									<?php echo $empresa['mis_emp']; ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6 text-center my-3">
						<div class="row">
							<div class="col-12">
								<h2 class=" my-3 text-primary font-weight-bold">Visión</h2>
								<p class="mx-2" style="font-size: 20px;">
									<?php echo $empresa['vis_emp']; ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6 mt-3 text-center align-self-end">
						<img class="img-fluid" src="../img/undraw_shared_goals_3d12.svg" alt="Servicio" width="60%">
					</div>
					<div class="col-12 col-xl-6 mt-3 text-center align-self-end">
						<img class="img-fluid" src="../img/undraw_art_thinking_3g82.svg" alt="Seguridad" width="60%">
					</div>
				</div>
			</div>
		</div>

		<!-- Caja 5 -->

		<div id="section3" class="container mt-3 p-2 mt-xl-3 p-xl-5">
			<h2 class="text-primary font-weight-bold mb-5">Testimonios</h2>
			<div class="row">
				<!-- Card 1 -->
				<div class="col-xl-4 pt-4">
					<div class="card shadow">
						<div class="card-body">
							<h4 class="card-title">
								<?php echo $empresa['tes_tit_1_emp']; ?>
							</h4>
							<p class="card-text">
								<?php echo $empresa['tes_1_emp']; ?>
							</p>
						</div>
					</div>
				</div>

				<!-- Card 2 -->
				<div class="col-xl-4 pt-4 pt-md-0">
					<div class="card shadow">
						<div class="card-body">
							<h4 class="card-title">
								<?php echo $empresa['tes_tit_2_emp']; ?>
							</h4>
							<p class="card-text">
								<?php echo $empresa['tes_2_emp']; ?>
							</p>
						</div>
					</div>
				</div>

				<!-- Card 3 -->
				<div class="col-xl-4 pt-4">
					<div class="card shadow">
						<div class="card-body">
							<h4 class="card-title">
								<?php echo $empresa['tes_tit_3_emp']; ?>
							</h4>
							<p class="card-text">
								<?php echo $empresa['tes_3_emp']; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Caja 6 -->

		<div id="section4" class="container mt-3 p-2 mt-xl-3 p-xl-5">
			<h2 class="text-primary font-weight-bold mb-5">Historia</h2>
			<div class="row ">
				<div class="col-12 d-flex justify-content-center align-items-center">
					<div class="card mb-3 p-4 shadow" style="max-width: 900px;">
						<div class="row no-gutters">
							<div class="col-xl-4 d-flex align-items-center">
								<img class="img-fluid" src="../img/undraw_business_deal_cpi9.svg" alt="Seguridad">
							</div>
							<div class="col-xl-8">
								<div class="card-body">
									<p class="card-text">
										<?php echo $empresa['his_emp']; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Termina las cajas -->

		<!-- Comienza Ubicación -->

		<div id="section5" class="container mt-3 p-2 mt-xl-3 p-xl-5">
			<h2 class="text-primary font-weight-bold mb-4">Ubicación</h2>
			<div class="row">
				<div class="col-12 d-flex justify-content-center align-items-center">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d587.6589199699653!2d-72.22778767883113!3d7.759863072106896!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e666caf7219d23d%3A0x7a22305b61538af5!2sLavanderia%20y%20Tintorer%C3%ADa%20Rosedal%20Dry%20Cleaning!5e0!3m2!1ses!2sve!4v1633148012099!5m2!1ses!2sve"
						width="1000" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>

		<!-- Termina Ubicación -->

		<!-- Comienza formulario -->

		<div id="section6" class="container mt-5 p-2 mt-xl-3 p-xl-5">
			<h2 class="text-primary font-weight-bold mb-4">Contactanos</h2>
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-xl-6">
					<div class="row text-center">
						<div class="col-12 mt-5">
							<img class="img-fluid" src="../img/undraw_Forms_re_pkrt.svg" alt="Servicio" width="70%">
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<form action="../../backend/controller/formulario.php" method="POST" class="was-validation" id="formulario"
						novalidate>
						<div class="form-row">
							<div class="col-xl-6 mb-3">
								<label for="nombre">Nombre:</label>
								<input type="text" name="nom_for" id="nombre" class="form-control" placeholder="Nombre" />
								<small id="nombreDiv" class="invalid-feedback"></small>
							</div>
							<div class="col-xl-6 mb-3">
								<label for="apellido">Apellido:</label>
								<input type="text" name="ape_for" id="apellido" class="form-control" placeholder="Apellido" />
								<small id="apellidoDiv" class="invalid-feedback"></small>
							</div>
							<div class="col-xl-6 mb-3">
								<label for="telefono">Teléfono:</label>
								<input type="text" name="tel_for" id="telefono" class="form-control" placeholder="Teléfono" />
								<small id="telefonoDiv" class="invalid-feedback"></small>
							</div>
							<div class="col-xl-6 mb-3">
								<label for="correo">Correo:</label>
								<input type="correo" name="cor_for" id="correo" class="form-control" placeholder="Correo" />
								<small id="correoDiv" class="invalid-feedback"></small>
							</div>
							<div class="col-xl-12 mb-3">
								<label for="asunto">Asunto:</label>
								<textarea type="text" name="asu_for" id="asunto" class="form-control" placeholder="Asunto"
									rows="3"></textarea>
								<small id="asuntoDiv" class="invalid-feedback"></small>
							</div>
						</div>
						<div class="d-flex justify-content-between">
							<button type="reset" class="btn btn-outline-primary">Limpiar</button>
							<button type="submit" class="btn btn-primary" name="run" value="create">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Termina formulario -->

	</div>
</div>

<!-- Termina el body -->

<!-- Comienza onda -->

<div class='mt-2' style='height: 150px; overflow: hidden;'><svg viewBox='0 0 500 150' preserveAspectRatio='none'
		style='height: 100%; width: 100%;'>
		<path d='M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z'
			style='stroke: none; fill: #f8f9fa;'></path>
	</svg>
</div>

<!-- Termina onda -->

<?php

footer();

?>