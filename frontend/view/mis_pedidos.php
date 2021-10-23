<?php

require_once("tema_session.php");
require_once("../../backend/class/pedido.class.php");

$obj_ped = new pedido;

headerr("Mis Pedidos");

checkClient();

?>

<!-- Lista -->
<div class="container px-3 pt-3 pb-5 mb-5">
	<h2 class="text-center p-3">Mis Pedidos</h2>
	<div class="row mb-2">
		<div class="col-12">
			<?php
			$obj_ped->contador = $obj_ped->getLastOrderP($_SESSION['codigo']);
			?>
			<h4 class="text-left">
				<i class="fas fa-clipboard-list text-info"></i> Borrador
				<span class="badge badge-pill badge-info"><?php echo $obj_ped->count(); ?></span>
			</h4>
		</div>
		<?php
		$obj_ped->puntero = $obj_ped->getLastOrderP($_SESSION['codigo']);

		if ($obj_ped->count() == 0) {
			echo "
				<div class='col-4 my-3'>
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
				<div class='col-4 my-3'>
					<div class='card'>
						<div class='card-body'>
							<h4 class='card-title text-center mb-4'>Pedido #$pedido[cod_ped]</h4>
							<p class='card-text'>4 Prendas</p>
							<p class='card-text'>Precio total: $$pedido[pre_ped] Dolares</p>
							<p class='card-text text-right'>Fecha de entrega: $pedido[cre_ped]</p>
							<a href='#' class='btn btn-primary btn-block mt-4'>Más información</a>
						</div>
					</div>
				</div>
				";
		}
		?>
	</div>
	<?php
	$obj_ped->contador = $obj_ped->getLastOrderV($_SESSION['codigo']);
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
			$obj_ped->puntero = $obj_ped->getLastOrderV($_SESSION['codigo']);
			while (($pedido = $obj_ped->extractData()) > 0) {
				echo "
				<div class='col-4 my-3'>
					<div class='card'>
						<div class='card-body'>
							<h4 class='card-title text-center mb-4'>Pedido #$pedido[cod_ped]</h4>
							<p class='card-text'>4 Prendas</p>
							<p class='card-text'>Precio total: $$pedido[pre_ped] Dolares</p>
							<p class='card-text text-right'>Fecha de entrega: $pedido[cre_ped]</p>
							<a href='#' class='btn btn-primary btn-block mt-4'>Más información</a>
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
	$obj_ped->contador = $obj_ped->getLastOrderT($_SESSION['codigo']);
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
			$obj_ped->puntero = $obj_ped->getLastOrderT($_SESSION['codigo']);
			while (($pedido = $obj_ped->extractData()) > 0) {
				echo "
				<div class='col-4 my-3'>
					<div class='card'>
						<div class='card-body'>
							<h4 class='card-title text-center mb-4'>Pedido #$pedido[cod_ped]</h4>
							<p class='card-text'>4 Prendas</p>
							<p class='card-text'>Precio total: $$pedido[pre_ped] Dolares</p>
							<p class='card-text text-right'>Fecha de entrega: $pedido[cre_ped]</p>
							<a href='#' class='btn btn-primary btn-block mt-4'>Más información</a>
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
	while (($pedido = $obj_ped->extractData()) > 0) {
		echo "<form action='../../backend/controller/pedido.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_pre' value='$pedido[cod_pre]'>
													<td>$pedido[cod_pre]</td>
													<td>$pedido[nom_pre]</td>
													<td>$pedido[des_pre]</td>
													<td>$pedido[pre_pre]</td>
													<td>$pedido[cre_pre]</td>
													<td>$pedido[act_pre]</td>
													<td>
														<div class='btn-group' role='group'>";
		if ($pedido['est_pre'] == "A") {
			echo "				<button class='btn btn-success py-2' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></i></button>";
		} else {
			echo "				<button class='btn btn-danger py-2' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></i></button>";
		}
		echo "					<a class='btn btn-danger py-2' href='pre_reportepdf.php?cod_pre=$pedido[cod_pre]'><i class='fas fa-file-pdf'></i></a>
															<a class='btn btn-warning py-2' href='pre_modificar.php?cod_pre=$pedido[cod_pre]'><i class='fas fa-edit'></i></a>
															<button type='button' data-toggle='modal' class='btn btn-danger py-2' data-target='#modalDelete$pedido[cod_pre]'><i class='fas fa-trash'></i></button>
														</div>
													</td>
													<div class='modal fade' id='modalDelete$pedido[cod_pre]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
														<div class='modal-dialog modal-sm'>
															<div class='modal-content'>
																<div class='modal-header'>
																	<h5 class='modal-title' id='exampleModalLabel'>¿Estas seguro de enviar a la papelera?</h5>
																	<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
																		<span aria-hidden='true'>&times;</span>
																	</button>
																</div>
																<div class='modal-body d-flex justify-content-around'>
																	<button type='submit' name='run' value='firstDelete' class='btn btn-light'>Eliminar</button>
																	<button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
																</div>
															</div>
														</div>
													</div>
												</tr>
											</form>
										";
	}
	?>
</div>

<?php

footer();

?>