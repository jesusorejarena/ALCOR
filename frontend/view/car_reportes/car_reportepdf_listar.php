<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Cargos</title>
	<style>
			.head{background-color:#fff;color:#000;border:none}.footer{font-size:15px;background-color:#fff;color:#000;border:none}table{width:100%;text-align:center;border-collapse:collapse}th{font-size:20px}td{font-size:15px}td,th{border:1px solid #000;padding:7px}.nada{border:none;padding:15px}.espacio{border:none;padding:7px}
		</style>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan='6' style='text-align: left;'>
				<h3>Lista de Cargos</h3>
			</th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class='th' colspan='1'>Código</th>
			<th class='th' colspan='5'>Nombre</th>
		</tr>
		<?php

		require_once("../../../backend/class/cargo.class.php");

		$obj_car = new cargo;
		$obj_car->puntero = $obj_car->getAll();

		while (($cargo = $obj_car->extractData()) > 0) {

			echo "
						<tr class='tr'>
							<td class='td' colspan='1'>$cargo[cod_car]</td>
							<td class='td' colspan='5'>$cargo[nom_car]</td
						</tr>
			";
		}
		?>
	</table>
</body>

</html>