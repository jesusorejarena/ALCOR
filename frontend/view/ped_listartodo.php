<?php

require_once("tema_session.php");
require_once("../../backend/class/pedido.class.php");
require_once("../../backend/class/usuario.class.php");

$obj_ped = new pedido;
$obj_ped->puntero = $obj_ped->getAllOrderT();

$obj_usu = new usuario;

headerr("Pedidos");

check('Pedidos', 5);

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-outline-primary btn-lg" href="pedidos.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center text-primary font-weight-bold p-3">Lista de pedidos terminados</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="card-header">
				<div class="row">
					<div class="col-12">
						<a class="btn btn-danger" href="ped_reportes/ped_reportepdf_enlace.php"><i class="fas fa-file-pdf mr-1"></i> Descargar listado
							por PDF</i></a>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Precio total</th>
							<th>Cliente</th>
							<th>Ingreso</th>
							<th>Salida</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($pedidos = $obj_ped->extractData()) > 0) {

							$obj_usu->cod_usu = $pedidos['cod_usu'];
							$obj_usu->puntero = $obj_usu->getByCode();
							$usuario = $obj_usu->extractData();

							echo "
										<tr>
											<td>$pedidos[cod_ped]</td>
											<td>$pedidos[pre_ped]</td>
											<td>$usuario[nom_usu] $usuario[ape_usu]</td>
											<td>$pedidos[cre_ped]</td>
											<td>$pedidos[act_ped]</td>
										</tr>
									";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>