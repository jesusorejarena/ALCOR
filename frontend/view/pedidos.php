<?php

require_once("tema_session.php");
require_once("../../backend/class/pedido.class.php");

$obj_ped = new pedido;

headerr("Pedidos");

check('Pedidos', 5);

?>

<!-- Lista -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<h2 class="text-center text-primary font-weight-bold p-3">Pedidos</h2>
	<div class="row mt-2 mb-4 mb-xl-0 text-right">
		<div class="col-12">
			<a href="ped_listartodo.php" class="btn btn-primary">Lista de pedidos terminados</a>
		</div>
	</div>
	<div class="row mb-2">
		<div class="col-12">
			<?php
			$obj_ped->cod_usu = $_SESSION['codigo'];
			$obj_ped->contador = $obj_ped->getFirstOrderV();
			?>
			<h4 class="text-left">
				<i class="fas fa-clock text-warning"></i> En espera
				<span class="badge badge-pill badge-warning"><?php echo $obj_ped->count(); ?></span>
			</h4>
		</div>
		<?php
		$obj_ped->cod_usu = $_SESSION['codigo'];
		$obj_ped->puntero = $obj_ped->getFirstOrderV();

		if ($obj_ped->count() == 0) {
			echo "
				<div class='col-12 col-xl-4 my-3'>
					<div class='card'>
						<div class='card-body'>
							<h4 class='card-title text-center mb-0'>Sin pedidos</h4>
						</div>
					</div>
				</div>
				";
		}

		while (($pedido = $obj_ped->extractData()) > 0) {
			echo "
				<div class='col-12 col-xl-4 my-3'>
					<div class='card'>
						<div class='card-body'>
							<h4 class='card-title text-center mb-4'>Pedido #$pedido[cod_ped]</h4>
							<p class='card-text'>Precio total: $$pedido[pre_ped] Dólares</p>
							<p class='card-text text-right'>Fecha de entrega: $pedido[cre_ped]</p>
							<a href='terminar_pedido.php?cod_ped=$pedido[cod_ped]' class='btn btn-primary btn-block mt-4'>Más información</a>
						</div>
					</div>
				</div>
				";
		}
		?>
	</div>
</div>

<?php

footer();

?>