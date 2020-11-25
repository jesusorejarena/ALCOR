<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Empleados</title>
	<link rel='stylesheet' href='../../css/estilospdf.css'>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan="5" style='text-align: left;'><img src='../../img/logo3.png' width='250px'></th>
			<th class='head' colspan="6" style='text-align: right;'>
				<h3>Lista de Empleados</h3>
			</th>
			<th class='head'></th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class='th'>Código</th>
			<th class='th'>Nombre</th>
			<th class='th'>Apellido</th>
			<th class='th'>Genero</th>
			<th class='th'>Fecha de Nacimiento</th>
			<th class='th'>Tipo</th>
			<th class='th'>Cédula</th>
			<th class='th'>Teléfono</th>
			<th class='th'>Correo</th>
			<th class='th'>Cargo</th>
			<th class='th'>Dirección</th>
		</tr>
		<?php

		require_once("../../../backend/class/empleado.class.php");
		require_once("../../../backend/class/cargo.class.php");

		$obj_ado = new empleado;
		$obj_ado->puntero = $obj_ado->getAll();

		$obj_car = new cargo;

		while (($empleado = $obj_ado->extractData()) > 0) {

			$obj_car->cod_car = $empleado['cod_car'];
			$obj_car->puntero = $obj_car->filter();
			$cargo = $obj_car->extractData();

			echo "
						<tr class='tr'>
							<td class='td'>$empleado[cod_ado]</td>
							<td class='td'>$empleado[nom_ado]</td>
							<td class='td'>$empleado[ape_ado]</td>";

			if ($empleado['gen_ado'] == "H") {
				echo "<td class='td'>Hombre</td>";
			} else {
				echo "<td class='td'>Mujer</td>";
			}

			echo "<td class='td'>$empleado[nac_ado]</td>";

			if ($empleado['tip_ado'] == "V") {
				echo "<td class='td'>Venezolano</td>";
			} else {
				echo "<td class='td'>Extranjero</td>";
			}
			echo "
							<td class='td'>$empleado[ced_ado]</td>
							<td class='td'>$empleado[tel_ado]</td>
							<td class='td'>$empleado[cor_ado]</td>
							<td class='td'>$cargo[nom_car]</td>";

			if ($empleado['cod_ado'] == 1 || $empleado['cod_car'] == 1) {
				echo "
							<td class='td'></td>
				";
			} else {
				echo "
							<td class='td'>$empleado[dir_ado]</td>
				";
			}
			echo "
						</tr>
			";
		}
		?>
	</table>
</body>

</html>