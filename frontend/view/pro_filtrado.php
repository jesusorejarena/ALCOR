<?php

require_once("tema_session.php");
require_once("../../backend/class/producto.class.php");

$obj_pro = new producto;
$obj_pro->assignValue();
$obj_pro->puntero = $obj_pro->filter();

headerr("Productos Filtrados");

check("Productos", 4);

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<a class="btn btn-outline-primary btn-lg" href="pro_menu.php"><i class="fas fa-arrow-circle-left"></i></a>
	<h2 class="text-center text-primary font-weight-bold p-3">Productos Filtrados</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Fecha de Ingreso</th>
							<th>Modificado</th>
							<th>Eliminado</th>
							<th>Restaurado</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($producto = $obj_pro->extractData()) > 0) {
							echo "<form action='../../backend/controller/producto.php' method='POST'>
											<tr>
												<input type='hidden' name='cod_pro' value='$producto[cod_pro]'>
												<td>$producto[cod_pro]</td>
												<td>$producto[nom_pro]</td>
												<td>$producto[des_pro]</td>
												<td>$producto[pre_pro]</td>
												<td>$producto[can_pro]</td>
												<td>$producto[cre_pro]</td>
												<td>$producto[act_pro]</td>
												<td>$producto[eli_pro]</td>
												<td>$producto[res_pro]</td>
								";

							if ($producto['bas_pro'] == "A") {
								echo "	<td><b class='text-success'>Activo</b></td>";
							} else {
								echo "	<td><b class='text-danger'>Papelera</b></td>";
							}

							echo "
												<td>
													<div class='btn-group' role='group'>";
							if ($producto['est_pro'] == "A") {
								echo "			<button class='btn btn-success py-2' type='submit' name='run' value='updateStatusI'><i class='fas fa-check'></i></button>";
							} else {
								echo "			<button class='btn btn-danger py-2' type='submit' name='run' value='updateStatusA'><i class='fas fa-times-circle'></i></button>";
							}
							echo "				<a class='btn btn-danger py-2' href='pro_reportepdf.php?cod_pro=$producto[cod_pro]'><i class='fas fa-file-pdf'></i></a>
														<a class='btn btn-warning py-2' href='pro_modificar.php?cod_pro=$producto[cod_pro]'><i class='fas fa-edit'></i></a>
														<button type='submit' class='btn btn-success' name='run' value='restore'><i class='fas fa-redo-alt'></i></button>
														<button type='button' data-toggle='modal' class='btn btn-danger py-2' data-target='#modalDelete$producto[cod_pro]'><i class='fas fa-trash'></i></button>
													</div>
												</td>
												<div class='modal fade' id='modalDelete$producto[cod_pro]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php

footer();

?>