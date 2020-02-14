<?php

	require_once("temainicio.php");
	require_once("../../backend/clase/cargo.class.php");

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
								<img src="../img/banner5.jpg" alt="" class="img-fluid" width="100%">
							</div>
							<div class="carousel-item">
								<img src="../img/banner6.jpg" alt="" class="img-fluid" width="100%">
							</div>
							<div class="carousel-item">
								<img src="../img/banner7.jpg" alt="" class="img-fluid" width="100%">
							</div>
							<div class="carousel-item">
								<img src="../img/banner8.jpg" alt="" class="img-fluid" width="100%">
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
				<div class="col-12">
					<div class="text-dark text-center animated wow slideInLeft fast">
						<h3 class="h3">Comercializadora Alcor, c.a. nace y se constituye en el año 2017, con el firme propósito de comercializar a nivel nacional productos de limpieza biodegradables, compitiendo con los mercados modernos en calidad y variedad, para así cumplir con las exigencias actuales en los diferentes sectores del comercio, la industria e instituciones.</h3>
					</div>
				</div>
			</div>

			<div class="row mt-3 pt-3">
				<div class="col-6 p-5">
					<div class="text-dark text-center animated wow slideInLeft fast">
						<h3 class="h3">Misión</h3>
						<p>Nuestro compromiso principal está enfocado en el medio ambiente y la gente, por ello nos especializamos en comercializar y proveer productos de limpieza biodegradables en todo el territorio nacional, contando con una red de distribución sólida que se ve fortificada por servicios eficientes y proactivos.</p>
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="text-dark text-center animated wow slideInLeft fast">
						<h3 class="h3">Visión</h3>
						<p>En Comercializadora Alcor, c.a. nos proyectamos en ser la red de distribución y comercialización de productos de limpieza biodegradables líder en el mercado venezolano, con amplia participación y cobertura nacional e internacional, conocidos por nuestra habilidad para apropiar, posicionar y comercializar productos y servicios de primera calidad que generen bienestar.</p>
					</div>
				</div>
			</div>

			<div class="row mt-3 pt-3">
				<div class="col-6 p-5">
					<div class="text-dark animated wow slideInLeft fast">
						<h3 class="h3 text-center">Valores</h3>
						<ul class="text-left">
							<li>Calidad: Nuestro compromiso es ajustarnos a las necesidades y expectativas de nuestros clientes y lograr su máxima satisfacción.</li>
							<li>Crecimiento sostenido: Promovemos el progreso tanto a nivel humano como empresarial.</li>
							<li>Responsabilidad: Nuestros procesos, estrategias y operaciones se caracterizan por cumplir con normas y reglamentos que generan confianza.</li>
							<li>Proactividad: Nuestro recurso humano se encuentra siempre orientado a la iniciativa en el desarrollo de acciones creativas y audaces para generar mejoras, en la calidad del servicio y de los productos ofrecidos.</li>
							<li>Seguridad: Para nosotros la integridad psicofísica de nuestros trabajadores es primordial en el desempeño de sus funciones, evitando daños a la propiedad, al proceso y al medio ambiente.</li>
							<li> Trabajo en equipo: Generamos un ambiente laboral fundamentado en la unidad, equidad, confianza, responsabilidad y respeto por nuestro entorno y la realidad empresarial para brindar excelencia.</li>
						</ul>
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="text-dark text-center animated wow slideInLeft fast">
						<img src="../img/foto1.jpg" width="100%" alt="" class="imagen shadow-lg rounded">
					</div>
				</div>
			</div>

			<div class="row mt-3 pt-3">
				<div class="col-6 p-5">
					<div class="text-dark text-center animated wow slideInRight fast">
						<img src="../img/foto2.jpeg" width="100%" alt="" class="imagen shadow-lg rounded">
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="text-dark animated wow slideInRight fast">
						<h3 class="h3 text-center">Política de calidad</h3>
						<p>Nuestra política de calidad va en concordancia con las legislaciones y convenios nacionales e internacionales en cuanto a la protección del entorno ambiental y la satisfacción de las necesidades de nuestros clientes internos y externos. Para ello nos comprometemos a establecer:</p>
						<ul class="text-left">
							<li>El cumplimiento de requisitos legales y técnicos en materia que concierne con nuestra actividad comercial.</li>
							<li>La orientación total de actividades y decisiones empresariales a la satisfacción de las necesidades y expectativas de nuestros clientes.</li>
							<li>El fortalecimiento de la calidad en los procesos y actividades, garantizando el servicio prestado.</li>
							<li>El fortalecimiento de la calidad en los procesos y actividades, garantizando el servicio prestado.</li>
							<li>Mantener el espíritu de mejora continua, mediante capacitación y entrenamiento del personal involucrado en las actividades relacionas con los clientes.</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row mt-3 pt-3">
				<div class="col-6 p-5">
					<div class="text-dark animated wow slideInLeft fast">
						<h3 class="h3 text-center">Normas técnicas</h3>
						<p>Comercializadora Alcor, c.a. garantiza que los productos comercializados, por nuestra red de distribución estén diseñados y fabricados con los más altos estándares de calidad para asegurar el menor impacto al medio ambiente, ya que poseen menores cargas de sustancias de interés ambiental en las aguas residuales, los cuales cumplen con las normas ambientales de la República Bolivariana de Venezuela, en cuanto a carga de SAAM y BIODEGRADABILIDAD basados en estándares internacionales (ASTMD 2887). Registrados en el M.P.P.S bajo el Nº PD-05183 con fecha 11/09/2012, Nº PD-05217-06 del 06/11/2011 y Nº PD-05850, con indicadores en forma gráfica por intermedio de sus etiquetas, cada producto viene indicando sus precauciones de manipulación, la composición química, qué hacer en caso de ingestión accidental, ingredientes inertes y activos, advertencias y las respectivas instrucciones de uso.</p>
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="text-dark text-center animated wow slideInLeft fast">
						<img src="../img/foto3.jpg" width="100%" alt="" class="imagen shadow-lg rounded">
					</div>
				</div>
			</div>
		</div>

<?php 

	pie();

?>