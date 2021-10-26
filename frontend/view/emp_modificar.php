<?php

require_once("tema_session.php");
require_once("../../backend/class/empresa.class.php");

$obj_emp = new empresa;

$obj_emp->assignValue();
$obj_emp->puntero = $obj_emp->getByCode();
$empresa = $obj_emp->extractData();

headerr("Modificar - Empresa");

checkAdminOrClient(1);

?>

<!-- Formulario -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<div class="row justify-content-center">
		<div class="col-12 p-2">
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<form action="../../backend/controller/empresa.php" method="POST" class="was-validation" id="formulario" novalidate>
					<input type="hidden" name="cod_emp" id="cod_emp" value="<?php echo $empresa['cod_emp']; ?>">
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-xl-4">
								<h2 class="card-title text-center text-primary font-weight-bold py-4">Datos de la empresa</h2>
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="nombre">Nombre:</label>
											<input type="text" name="nom_emp" id="nombre" class="form-control" value="<?php echo $empresa['nom_emp']; ?>" placeholder="Nombre" />
											<small id="nombreDiv" class="invalid-feedback"></small>
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
											<input type="text" name="rif_emp" id="rifCompleto" class="form-control" value="<?php echo $empresa['rif_emp']; ?>" placeholder="Ejemplo: J-30161557-3" />
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
								</div>
							</div>
							<div class="col-12 col-xl-8">
								<h2 class="card-title text-center text-primary font-weight-bold py-4">Información del portal web</h2>
								<div class="row">
									<div class="col-12 col-xl-6">
										<div class="row">
											<div class="col-12">
												<h6 class="text-left text-primary font-weight-bold">Banner</h6>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="tituloBanner">Titulo del banner:</label>
													<input type="text" name="ban_tit_emp" id="tituloBanner" class="form-control" value="<?php echo $empresa['ban_tit_emp']; ?>" placeholder="Titulo del banner" />
													<small id="tituloBannerDiv" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="descripcionBanner">Descripción del banner:</label>
													<textarea name="ban_par_emp" id="descripcionBanner" placeholder="Descripción del banner:" class="form-control"><?php echo $empresa['ban_par_emp']; ?></textarea>
													<small id="descripcionBannerDiv" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<h6 class="text-left text-primary font-weight-bold">Contenido 1</h6>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="tituloContenido1">Titulo del contenido 1:</label>
													<input type="text" name="tit_1_emp" id="tituloContenido1" class="form-control" value="<?php echo $empresa['tit_1_emp']; ?>" placeholder="Titulo del contenido 1" />
													<small id="tituloContenido1Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="descripcionContenido1">Descripción del contenido 1:</label>
													<textarea name="par_1_emp" id="descripcionContenido1" placeholder="Descripción del contenido 1:" class="form-control"><?php echo $empresa['par_1_emp']; ?></textarea>
													<small id="descripcionContenido1Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<h6 class="text-left text-primary font-weight-bold">Contenido 2</h6>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="tituloContenido2">Titulo del contenido 2:</label>
													<input type="text" name="tit_2_emp" id="tituloContenido2" class="form-control" value="<?php echo $empresa['tit_2_emp']; ?>" placeholder="Titulo del contenido 2" />
													<small id="tituloContenido2Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="descripcionContenido2">Descripción del contenido 2:</label>
													<textarea name="par_2_emp" id="descripcionContenido2" placeholder="Descripción del contenido 2:" class="form-control"><?php echo $empresa['par_2_emp']; ?></textarea>
													<small id="descripcionContenido2Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<h6 class="text-left text-primary font-weight-bold">Contenido 3</h6>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="tituloContenido3">Titulo del contenido 3:</label>
													<input type="text" name="tit_3_emp" id="tituloContenido3" class="form-control" value="<?php echo $empresa['tit_3_emp']; ?>" placeholder="Titulo del contenido 3" />
													<small id="tituloContenido3Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="descripcionContenido3">Descripción del contenido 3:</label>
													<textarea name="par_3_emp" id="descripcionContenido3" placeholder="Descripción del contenido 3:" class="form-control"><?php echo $empresa['par_3_emp']; ?></textarea>
													<small id="descripcionContenido3Div" class="invalid-feedback"></small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-xl-6">
										<div class="row">
											<div class="col-12">
												<h6 class="text-left text-primary font-weight-bold">Misión</h6>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="mision">Descripción de la misión:</label>
													<textarea name="mis_emp" id="mision" placeholder="Descripción de la misión:" class="form-control"><?php echo $empresa['mis_emp']; ?></textarea>
													<small id="misionDiv" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<h6 class="text-left text-primary font-weight-bold">Visión</h6>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="vision">Descripción de la visión:</label>
													<textarea name="vis_emp" id="vision" placeholder="Descripción de la visión:" class="form-control"><?php echo $empresa['vis_emp']; ?></textarea>
													<small id="visionDiv" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<h6 class="text-left text-primary font-weight-bold">Testimonio 1</h6>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="tituloTestimonio1">Nombre del testigo 1:</label>
													<input type="text" name="tes_tit_1_emp" id="tituloTestimonio1" class="form-control" value="<?php echo $empresa['tes_tit_1_emp']; ?>" placeholder="Nombre del testigo 1" />
													<small id="tituloTestimonio1Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="descripcionTestimonio1">Descripción del testimonio 1:</label>
													<textarea name="tes_1_emp" id="descripcionTestimonio1" placeholder="Descripción del testimonio 1:" class="form-control"><?php echo $empresa['tes_1_emp']; ?></textarea>
													<small id="descripcionTestimonio1Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<h6 class="text-left text-primary font-weight-bold">Testimonio 2</h6>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="tituloTestimonio2">Nombre del testigo 2:</label>
													<input type="text" name="tes_tit_2_emp" id="tituloTestimonio2" class="form-control" value="<?php echo $empresa['tes_tit_2_emp']; ?>" placeholder="Nombre del testigo 2" />
													<small id="tituloTestimonio2Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="descripcionTestimonio2">Descripción del testimonio 2:</label>
													<textarea name="tes_2_emp" id="descripcionTestimonio2" placeholder="Descripción del testimonio 2:" class="form-control"><?php echo $empresa['tes_2_emp']; ?></textarea>
													<small id="descripcionTestimonio2Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<h6 class="text-left text-primary font-weight-bold">Testimonio 3</h6>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="tituloTestimonio3">Nombre del testigo 3:</label>
													<input type="text" name="tes_tit_3_emp" id="tituloTestimonio3" class="form-control" value="<?php echo $empresa['tes_tit_3_emp']; ?>" placeholder="Nombre del testigo 3" />
													<small id="tituloTestimonio3Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="descripcionTestimonio3">Descripción del testimonio 3:</label>
													<textarea name="tes_3_emp" id="descripcionTestimonio3" placeholder="Descripción del testimonio 3:" class="form-control"><?php echo $empresa['tes_3_emp']; ?></textarea>
													<small id="descripcionTestimonio3Div" class="invalid-feedback"></small>
												</div>
											</div>
											<div class="col-12">
												<h6 class="text-left text-primary font-weight-bold">Historia</h6>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="historia">Descripción de la historia:</label>
													<textarea name="his_emp" id="historia" placeholder="Descripción de la historia:" class="form-control"><?php echo $empresa['his_emp']; ?></textarea>
													<small id="historiaDiv" class="invalid-feedback"></small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<small>Ultima modificación: <?php echo $empresa['act_emp']; ?></small>
							</div>
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="reset" class="btn btn-outline-primary">Limpiar</button>
						<button type="submit" class="btn btn-primary" name="run" value="update">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>