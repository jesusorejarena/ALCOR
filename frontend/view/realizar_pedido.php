<?php

require_once("tema_session.php");
require_once("../../backend/class/prenda.class.php");
require_once("../../backend/class/pedido.class.php");

headerr("Realizar Pedido");

checkAdminOrClient(2);

$obj_pre = new prenda;
$obj_pre->puntero = $obj_pre->getAll();

$obj_ped = new pedido;

?>

<!-- Lista -->
<div class="container-fluid px-3 pt-3 pb-5 mb-5">
	<h2 class="text-center text-primary font-weight-bold p-3">Lista de Prendas</h2>
	<div class="row justify-content-center">
		<div class="col-12 py-2">
			<div class="table-responsive">
				<table class="table table-bordered table-hover text-center">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Precio</th>
							<th>Cantidad</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while (($prenda = $obj_pre->extractData())) {
							echo "
								<tr class='forms'>
									<input class='cod_pre' type='hidden' name='cod_pre' value='$prenda[cod_pre]'>
									<td>$prenda[nom_pre]</td>
									<td>$prenda[des_pre]</td>
									<td>$prenda[pre_pre]</td>
									<td><input class='can_ped_rel' type='number' name='can_ped_rel' min='0' max='200' value='0'></td>
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

<div class='container-fluid d-flex justify-content-center saveButton'>
	<button type='button' id='guardarPedido' class='btn btn-primary'>Guardar</button>
</div>

<script>
	document.getElementById('guardarPedido').addEventListener('click', (e) => {

		e.preventDefault();

		let form = new FormData()

		let data = form;

		data.append('cod_usu', <?php echo $_SESSION['codigo']; ?>);
		data.append('run', 'create');

		fetch('../../backend/controller/pedido.php', {
			method: 'POST',
			body: data
		}).then(function(response) {
			if (response.ok) {
				return response.text();
			} else {
				console.log('Error en la llamada');
			}
		}).then(function(texto) {
			let forms = document.getElementsByClassName('forms');
			for (let i = 0; i < forms.length; i++) {

				console.log(parseInt(forms[i].getElementsByClassName('can_ped_rel')[0].value) > 0);

				if (parseInt(forms[i].getElementsByClassName('can_ped_rel')[0].value) > 0) {
					let dataRelation = new FormData();

					dataRelation.append('cod_ped', texto);
					dataRelation.append('cod_pre', forms[i].getElementsByClassName('cod_pre')[0].value);
					dataRelation.append('can_ped_rel', forms[i].getElementsByClassName('can_ped_rel')[0].value);
					dataRelation.append('run', 'create');

					fetch('../../backend/controller/pedido_relacion.php', {
						method: 'POST',
						body: dataRelation
					}).then(function(response2) {
						if (response2.ok) {
							return response2.text();
						} else {
							console.log('Error en la llamada');
						}
					}).then(function(texto2) {
						window.location = `ver_pedido.php?cod_ped=${texto}&info=true`;
					})
				}
			}
		})
	})
</script>

<?php

footer();

?>