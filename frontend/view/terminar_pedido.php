<?php

require_once("tema_session.php");
require_once("../../backend/class/pedido.class.php");
require_once("../../backend/class/pedido_relacion.class.php");
require_once("../../backend/class/usuario.class.php");
require_once("../../backend/class/prenda.class.php");

headerr("Terminar Pedido");

check('Pedidos', 5);

$obj_ped = new pedido;
$obj_ped->cod_ped = $_REQUEST['cod_ped'];
$obj_ped->puntero = $obj_ped->getOrderByCode();
$pedido = $obj_ped->extractData();

if ($pedido > 0) {
} else {
	header("Location: usu_inicio.php");
}

$total = 0;

$obj_ped_rel = new pedido_relacion;
$obj_ped_rel->cod_ped = $pedido['cod_ped'];
$obj_ped_rel->puntero = $obj_ped_rel->getByCodeOrder();

$obj_pre = new prenda;

while (($pedido_relacion = $obj_ped_rel->extractData()) > 0) {
	$obj_pre->cod_pre = $pedido_relacion['cod_pre'];
	$obj_pre->puntero = $obj_pre->getByCode();
	$prenda = $obj_pre->extractData();

	$total = $total + $prenda['pre_pre'] * $pedido_relacion['can_ped_rel'];
}

$obj_usu = new usuario;
$obj_usu->cod_usu = $pedido['cod_usu'];
$obj_usu->puntero = $obj_usu->getByCode();
$usuario = $obj_usu->extractData();

?>

<!-- Formulario -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<div class="row justify-content-center">
		<div class="col-12 col-xl-4 p-xl-2 mr-xl-5">
			<h2 class='text-center text-primary font-weight-bold p-2'>Detalles</h2>
			<div class="card rounded-lg shadow my-3 px-3 py-4">
				<form action="../../backend/controller/pedido.php" method="POST" class="was-validation" id="formulario" novalidate>
					<input type="hidden" name="cod_ped" value="<?php echo $pedido['cod_ped'] ?>" />
					<input type="hidden" name="pre_ped" value="<?php echo $total; ?>" />
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="codigoFactura">Codigo de factura:</label>
									<input type="text" id="codigoFactura" class="form-control" placeholder="Codigo de factura" value="<?php echo $pedido['cod_ped']; ?>" disabled />
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="nombre">Nombre:</label>
									<input type="text" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo $usuario['nom_usu']; ?>" disabled />
								</div>
							</div>
							<div class="col-12 col-xl-6">
								<div class="form-group">
									<label for="apellido">Apellido:</label>
									<input type="text" id="apellido" class="form-control" placeholder="Apellido" value="<?php echo $usuario['ape_usu']; ?>" disabled />
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label for="monto">Monto total:</label>
									<input type="text" id="monto" class="form-control" placeholder="Monto" value="<?php echo $total; ?>" disabled />
								</div>
							</div>
						</div>
					</div>
					<div class="px-4 pb-3 d-flex justify-content-between">
						<button type="submit" class="btn btn-danger" name="run" value="delete">Cancelar pedido</button>
						<button type="submit" class="btn btn-primary" name="run" value="updateStatusT">Terminado</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-xl-7 pt-5 p-xl-3">
			<h2 class='text-center text-primary font-weight-bold p-2'>Prendas agregadas</h2>
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Descripción</th>
									<th>Precio</th>
									<th>Cantidad</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$obj_ped_rel->puntero = $obj_ped_rel->getByCodeOrder();

								while (($pedido_relacionado = $obj_ped_rel->extractData())) {

									$obj_pre->cod_pre = $pedido_relacionado['cod_pre'];
									$obj_pre->puntero = $obj_pre->getByCode();
									$prenda = $obj_pre->extractData();

									$total_prenda = $prenda['pre_pre'] * $pedido_relacionado['can_ped_rel'];

									echo "
											<tr class='forms'>
												<input class='cod_pre' type='hidden' name='cod_pre' value='$pedido_relacionado[cod_pre]'>
												<td>$prenda[nom_pre]</td>
												<td>$prenda[des_pre]</td>
												<td>$prenda[pre_pre]</td>
												<td>$pedido_relacionado[can_ped_rel]</td>
												<td>$total_prenda</td>
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
	</div>
</div>

<?php

footer();

?>