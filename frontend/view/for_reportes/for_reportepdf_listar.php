<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Formularios</title>
	<style>
			.head{background-color:#fff;color:#000;border:none}.footer{font-size:15px;background-color:#fff;color:#000;border:none}table{width:100%;text-align:center;border-collapse:collapse}th{font-size:20px}td{font-size:15px}td,th{border:1px solid #000;padding:7px}.nada{border:none;padding:15px}.espacio{border:none;padding:7px}
		</style>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan='1' style='text-align: left;'><img src='../img/logo3.png' width='250px'></th>
			<th class='head' colspan='5' style='text-align: right;'>
				<h3>Lista de Formularios</h3>
			</th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class="th">Código</th>
			<th class="th">Nombre</th>
			<th class="th">Apellido</th>
			<th class="th">Teléfono</th>
			<th class="th">Correo</th>
			<th class="th">Asunto</th>
		</tr>
		<?php

		require_once("../../../backend/class/formulario.class.php");

		$obj_usu = new formulario;
		$obj_usu->puntero = $obj_usu->getAll();

		while (($formulario = $obj_usu->extractData()) > 0) {

			echo "
						<tr class='tr'>
							<td class='td'>$formulario[cod_for]</td>
							<td class='td'>$formulario[nom_for]</td>
							<td class='td'>$formulario[ape_for]</td>
							<td class='td'>$formulario[tel_for]</td>
							<td class='td'>$formulario[cor_for]</td>
							<td class='td'>$formulario[asu_for]</td>
						</tr>
			";
		}
		?>
	</table>
</body>

</html>