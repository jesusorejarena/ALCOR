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
						</ol>

						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="../img/banner2.jpg" alt="" class="img-fluid" width="100%">
							</div>
							<div class="carousel-item">
								<img src="../img/banner3.jpg" alt="" class="img-fluid" width="100%">
							</div>
							<div class="carousel-item">
								<img src="../img/banner4.jpg" alt="" class="img-fluid" width="100%">
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
				<div class="col-12">
					<div class="row m-2 p-2 text-center">
						<div class="col-4">
							<div class="text-dark text-center animated wow slideInLeft fast">
								<h3 class="h3">Softy</h3>
							</div>
						</div>
						<div class="col-4"></div>
						<div class="col-4">
							<div class="text-dark text-center animated wow slideInRight fast">
								<h3 class="h3">Grassoft</h3>
							</div>
						</div>
					</div>
					<div class="row m-2 p-2 text-center">
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
					<div class="row m-2 p-2 text-center">
						<div class="col-12">
							<div class="text-dark text-center animated wow zoomIn fast">
								<h3 class="h3">Easyclean</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php 

	pie();

?>