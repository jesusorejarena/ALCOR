<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Usuarios</title>
	<style>
			.head{background-color:#fff;color:#000;border:none}.footer{font-size:15px;background-color:#fff;color:#000;border:none}table{width:100%;text-align:center;border-collapse:collapse}th{font-size:20px}td{font-size:15px}td,th{border:1px solid #000;padding:7px}.nada{border:none;padding:15px}.espacio{border:none;padding:7px}
		</style>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan='6' style='text-align: left;'>
				<h3>Lista de Usuarios</h3>
			</th>
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

		require_once("../../../backend/class/usuario.class.php");
		require_once("../../../backend/class/cargo.class.php");

		$obj_usu = new usuario;
		$obj_usu->puntero = $obj_usu->getAll();

		$obj_car = new cargo;

		while (($usuario = $obj_usu->extractData()) > 0) {

			$obj_car->cod_car = $usuario['cod_car'];
			$obj_car->puntero = $obj_car->filter();
			$cargo = $obj_car->extractData();

			echo "
						<tr class='tr'>
							<td class='td'>$usuario[cod_usu]</td>
							<td class='td'>$usuario[nom_usu]</td>
							<td class='td'>$usuario[ape_usu]</td>";

			if ($usuario['gen_usu'] == "H") {
				echo "<td class='td'>Hombre</td>";
			} else {
				echo "<td class='td'>Mujer</td>";
			}

			echo "<td class='td'>$usuario[nac_usu]</td>";

			if ($usuario['tip_usu'] == "V") {
				echo "<td class='td'>Venezolano</td>";
			} else {
				echo "<td class='td'>Extranjero</td>";
			}
			echo "
							<td class='td'>$usuario[ced_usu]</td>
							<td class='td'>$usuario[tel_usu]</td>
							<td class='td'>$usuario[cor_usu]</td>
							<td class='td'>$cargo[nom_car]</td>";

			if ($usuario['cod_usu'] == 1 || $usuario['cod_car'] == 1) {
				echo "
							<td class='td'></td>
				";
			} else {
				echo "
							<td class='td'>$usuario[dir_usu]</td>
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