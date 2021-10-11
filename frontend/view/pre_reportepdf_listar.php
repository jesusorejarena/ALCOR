<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Prendas</title>
	<link rel='stylesheet' href='../../css/estilospdf.css'>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan="3" style='text-align: left;'><img src='../../img/logo3.png' width='250px'></th>
			<th class='head' colspan="3" style='text-align: right;'>
				<h3>Lista de Prendas</h3>
			</th>
			<th class='head'></th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class="th">Código</th>
			<th class="th">Nombre</th>
			<th class="th">Descripción</th>
			<th class="th">Precio</th>
		</tr>
		<?php

		require_once("../../../backend/class/prenda.class.php");

		$obj_pre = new prenda;
		$obj_pre->puntero = $obj_pre->getAll();

		while (($prenda = $obj_pre->extractData()) > 0) {
			echo "
						<tr class='tr'>
							<td class='td'>$prenda[cod_pre]</td>
							<td class='td'>$prenda[nom_pre]</td>
							<td class='td'>$prenda[des_pre]</td>
							<td class='td'>$prenda[pre_pre]</td>
						</tr>
			";
		}
		?>
	</table>
</body>

</html>