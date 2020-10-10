<?php

require_once("temainicio.php");
require_once("../../backend/class/cargo.class.php");

$obj_car = new cargo;
$obj_car->classBootstrap();

encabezado("Productos");

?>
<div class="<?php echo $obj_car->container2; ?>">
	<div class="row">
		<div class="col-12 m-0 p-0">
			<div class="carousel slide" id="id-principal" data-ride="carousel">

				<ol class="carousel-indicators">
					<li data-target="#id-principal" data-slide-to="0"></li>
					<li data-target="#id-principal" data-slide-to="1"></li>
					<li data-target="#id-principal" data-slide-to="2"></li>
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

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-12 col-md-10">
			<div class="row mt-3 pt-3">
				<div class="col-4">
					<div class="text-dark text-center animated wow slideInLeft fast">
						<h3 class="h3">Softy</h3>
						<p>Detergente líquido para ropa delicada. Especial para ropa íntima, ropa para infantes y texturas suaves
							como la seda.</p>
					</div>
				</div>
				<div class="col-4"></div>
				<div class="col-4">
					<div class="text-dark text-center animated wow slideInRight fast">
						<h3 class="h3">Grassoft</h3>
						<p>Limpiadores, desengrasantes y desinfectantes para usos diversos. Desde cocinas, baños, todo tipo de
							suelos y superficies.</p>
					</div>
				</div>
			</div>
			<div class="row mt-2 pt-2">
				<div class="col-4">
					<div class="text-dark text-center animated wow slideInLeft fast">
						<img src="../img/triangulo-1.png" width="100%" alt="" class="">
					</div>
				</div>
				<div class="col-4">
					<div class="text-dark text-center animated wow zoomIn fast">
						<img src="../img/triangulo-3.png" width="100%" alt="" class="">
					</div>
				</div>
				<div class="col-4">
					<div class="text-dark text-center animated wow slideInRight fast">
						<img src="../img/triangulo-2.png" width="100%" alt="" class="">
					</div>
				</div>
			</div>
			<div class="row mt-2 pt-2">
				<div class="col-12">
					<div class="text-dark text-center animated wow zoomIn fast">
						<h3 class="h3">Easyclean</h3>
						<p>Artículos de limpieza metálicos de gran calidad y de larga duración.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

<?php

pie();

?>