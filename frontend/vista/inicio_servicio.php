<?php

	require("temainicio.php");
	require("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();

	encabezado("ALCOR C.A.");

?>
		<div class="<?php echo $obj_car->container2;?>">
			<div class="row">
				<div class="col-12 m-0 p-0">
					<div class="carousel slide" id="id-principal" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#id-principal" data-slide-to="0"></li>
							<li data-target="#id-principal" data-slide-to="1"></li>
							<li data-target="#id-principal" data-slide-to="2"></li>
							<li data-target="#id-principal" data-slide-to="3"></li>
						</ol>

						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="../img/banner9.jpg" alt="" class="img-fluid" width="100%">
							</div>
							<div class="carousel-item">
								<img src="../img/banner10.jpg" alt="" class="img-fluid" width="100%">
							</div>
							<div class="carousel-item">
								<img src="../img/banner11.jpg" alt="" class="img-fluid" width="100%">
							</div>
							<div class="carousel-item">
								<img src="../img/banner12.jpg" alt="" class="img-fluid" width="100%">
							</div>
						</div>


						<a href="#id-principal" data-slide="prev" class="carousel-control-prev">
							<spam class="carousel-control-prev-icon"></spam>
						</a>

						<a href="#id-principal" data-slide="next" class="carousel-control-next">
							<spam class="carousel-control-next-icon"></spam>
						</a>
					</div>
				</div>
			</div>

			<div class="row mt-3 pt-3">
				<div class="col-6 p-5">
					<div class="text-dark animated wow slideInLeft fast">
						<h3 class="h3 text-center">Red de distribución</h3>
						<p>Contamos con una extensa red de distribución a nivel nacional, proporcionándoles el apoyo necesario para que su comercio sea competitivo en variedad y calidad de productos de limpieza biodegradables.</p>
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="text-dark text-center animated wow slideInLeft fast">
						<img src="../img/foto4.jpg" width="100%" alt="" class="imagen shadow-lg rounded">
					</div>
				</div>
			</div>

			<div class="row mt-3 pt-3">
				<div class="col-6 p-5">
					<div class="text-dark text-center animated wow slideInRight fast">
						<img src="../img/foto5.jpg" width="100%" alt="" class="imagen shadow-lg rounded">
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="text-dark animated wow slideInRight fast">
						<h3 class="h3 text-center">Mercadeo</h3>
						<p>Actualmente poseemos talento humano; expertos en marketing, quienes se encargan de posicionar la imagen institucional y reforzar los procesos de venta de manera óptima mediante el asesoramiento, la proactividad y la eficacia.</p>
					</div>
				</div>
			</div>

			<div class="row mt-3 pt-3">
				<div class="col-6 p-5">
					<div class="text-dark animated wow slideInLeft fast">
						<h3 class="h3 text-center">Capacitación</h3>
						<p>Para nosotros es fundamental que nuestra fuerza de venta se encuentre en continua mejora, es por ello que nos volcamos a la enseñanza ofreciendo a nuestros exclusivos clientes cursos de formación, charlas, demostraciones, videos, instructivos, entre otros, adaptados a las necesidades concretas de cada zona y cliente.</p>
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="text-dark text-center animated wow slideInLeft fast">
						<img src="../img/foto6.jpg" width="100%" alt="" class="imagen shadow-lg rounded">
					</div>
				</div>
			</div>

			<div class="row mt-3 pt-3">
				<div class="col-6 p-5">
					<div class="text-dark text-center animated wow slideInRight fast">
						<img src="../img/foto7.jpg" width="100%" alt="" class="imagen shadow-lg rounded">
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="text-dark animated wow slideInRight fast">
						<h3 class="h3 text-center">Línea de atención al cliente</h3>
						<p>Nuestra organización pone a disposición el servicio “Phone Help”, un equipo humano dedicado exclusivamente al asesoramiento técnico, despeje de dudas o urgencias de rápida resolución a través de las líneas telefónicas:<br>
							+58(414)-7459299 / +58(414)-7097727<br>
							Horario de atención:<br>
							Lunes a viernes<br>
							8:00 AM - 12:00 PM<br>
							2:00 PM - 6:00 PM</p>
					</div>
				</div>
			</div>
		</div>

<?php 

	pie();

?>