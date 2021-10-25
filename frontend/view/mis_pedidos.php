<?php

require_once("tema_session.php");
require_once("../../backend/class/pedido.class.php");

headerr("Mis Pedidos");

checkAdminOrClient(2);

$obj_ped = new pedido;

?>

<!-- Lista -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<h2 class="text-center text-primary font-weight-bold p-3">Mis Pedidos</h2>
	<div class="row mb-2">
		<div class="col-12">
			<?php
			$obj_ped->cod_usu = $_SESSION['codigo'];
			$obj_ped->contador = $obj_ped->getLastOrderPUnlimited();
			?>
			<h4 class="text-left">
				<i class="fas fa-clipboard-list text-info"></i> Borrador
				<span class="badge badge-pill badge-info"><?php echo $obj_ped->count(); ?></span>
			</h4>
		</div>
		<?php
		$obj_ped->cod_usu = $_SESSION['codigo'];
		$obj_ped->puntero = $obj_ped->getLastOrderPUnlimited();

		if ($obj_ped->count() == 0) {
			echo "
				<div class='col-12 col-xl-4 my-3'>
					<div class='card'>
						<div class='card-body'>
							<h4 class='card-title text-center mb-4'>Sin pedidos por confirmar</h4>
							<a href='realizar_pedido.php' class='btn btn-primary btn-block mt-4'>Crear un pedido</a>
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
							<p class='card-text text-left'>Entrega: $pedido[cre_ped]</p>
							<a href='ver_pedido.php?cod_ped=$pedido[cod_ped]&info=true' class='btn btn-primary btn-block mt-4'>Más información</a>
						</div>
					</div>
				</div>
				";
		}
		?>
	</div>
	<?php
	$obj_ped->cod_usu = $_SESSION['codigo'];
	$obj_ped->contador = $obj_ped->getLastOrderVUnlimited();
	if ($obj_ped->count() > 0) {
	?>
		<div class="row my-2">
			<div class="col-12">
				<h4 class="text-left p-1">
					<i class="fas fa-clock text-warning"></i> En progreso
					<span class="badge badge-pill badge-warning"><?php echo $obj_ped->count(); ?></span>
				</h4>
			</div>
			<?php
			$obj_ped->cod_usu = $_SESSION['codigo'];
			$obj_ped->puntero = $obj_ped->getLastOrderVUnlimited();
			while (($pedido = $obj_ped->extractData()) > 0) {
				echo "
				<div class='col-12 col-xl-4 my-3'>
					<div class='card'>
						<div class='card-body'>
							<h4 class='card-title text-center mb-4'>Pedido #$pedido[cod_ped]</h4>
							<p class='card-text'>Precio total: $$pedido[pre_ped] Dólares</p>
							<p class='card-text text-right'>Entrega: $pedido[cre_ped]</p>
							<a href='ver_pedido.php?cod_ped=$pedido[cod_ped]&info=false' class='btn btn-primary btn-block mt-4'>Más información</a>
						</div>
					</div>
				</div>
				";
			}
			?>
		</div>
	<?php
	}
	?>
	<?php
	$obj_ped->cod_usu = $_SESSION['codigo'];
	$obj_ped->contador = $obj_ped->getLastOrderTLimited();
	if ($obj_ped->count() > 0) {
	?>
		<div class="row my-2">
			<div class="col-12">
				<h4 class="text-left p-1">
					<i class="fas fa-check text-success"></i> Terminados
					<span class="badge badge-pill badge-success"><?php echo $obj_ped->count(); ?></span>
				</h4>
			</div>
			<?php
			$obj_ped->cod_usu = $_SESSION['codigo'];
			$obj_ped->puntero = $obj_ped->getLastOrderTLimited();
			while (($pedido = $obj_ped->extractData()) > 0) {
				echo "
				<div class='col-12 col-xl-4 my-3'>
					<div class='card'>
						<div class='card-body'>
							<h4 class='card-title text-center mb-4'>Pedido #$pedido[cod_ped]</h4>
							<p class='card-text'>Precio total: $$pedido[pre_ped] Dólares</p>
							<p class='card-text text-right'>Entrega: $pedido[cre_ped]</p>
							<p class='card-text text-right'>Terminado: $pedido[act_ped]</p>
							<a href='ver_pedido.php?cod_ped=$pedido[cod_ped]&info=false' class='btn btn-primary btn-block mt-4'>Más información</a>
						</div>
					</div>
				</div>
				";
			}
			?>
		</div>
	<?php
	}
	?>
</div>

<?php

footer();

?>