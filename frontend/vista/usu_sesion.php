<?php 

	require("tema.php");

	encabezado("Iniciar Sesión - ALCOR C.A.");

?>

	<div class="container-fluid p-5 mt-5 bg-white">
		<div class="card mx-auto bg-dark border border-primary shadow-lg" style="width: 40rem">
			<h2 class="card-title text-white text-center pt-4">Iniciar Sesión</h2>
			<hr>
			<p class="card-subtitle text-muted px-5 text-right">Solo personal de la empresa</p>
			<div class="card-body">
				<form action="../../backend/controlador/empleado.php">
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="ced_usu" class="text-white text-left h5">Cédula:</label>
								<input type="text" name="ced_usu" id="ced_usu" placeholder="Correo:" minlength="3" maxlength="10" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group">
								<label for="cla_usu" class="text-white text-left h5">Contraseña: </label>
								<input type="password" name="cla_usu" id="cla_usu" placeholder="Contraseña:" minlength="8" maxlength="20" require="" class="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success">
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-12">
							<div class="form-group text-center">
								<button class="btn btn-outline-success btn-lg" onClick="window.location.href=''">Iniciar Sesión</button>
							</div>
						</div>
					</div>					
				</form>
			</div>
			<div class="card-footer text-right"><a href="">Olvidaste tu contraseña?</a></div>
		</div>
	</div>

<?php 

	pie();

?>