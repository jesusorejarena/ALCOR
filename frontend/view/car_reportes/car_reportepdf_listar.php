<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Cargos</title>
	<link rel='stylesheet' href='../../css/estilospdf.css'>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan="1" style='text-align: left;'><img src='../../img/logo3.png' width='250px'></th>
			<th class='head' colspan="1" style='text-align: right;'>
				<h3>Lista de Cargos</h3>
			</th>
			<th class='head'></th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class="th">Código</th>
			<th class="th">Cargo</th>
		</tr>
		<?php
		
		require_once("../../../backend/class/cargo.class.php");

		$obj_car = new cargo;
		$obj_car->puntero = $obj_car->getAll();

		while (($cargo = $obj_car->extractData()) > 0) {

			echo "
						<tr class='tr'>
							<td class='td'>$cargo[cod_car]</td>
							<td class='td'>$cargo[nom_car]</td
						</tr>
			";
		}
		?>
	</table>
</body>

</html>