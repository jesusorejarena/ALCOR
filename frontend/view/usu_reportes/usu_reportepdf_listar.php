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
			<th class='head' colspan='11' style='text-align: left;'>
				<h3>Lista de Usuarios</h3>
			</th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class='th' colspan='1'>Código</th>
			<th class='th' colspan='1'>Nombre</th>
			<th class='th' colspan='1'>Apellido</th>
			<th class='th' colspan='1'>Genero</th>
			<th class='th' colspan='1'>Fecha de Nacimiento</th>
			<th class='th' colspan='1'>Tipo</th>
			<th class='th' colspan='1'>Cédula</th>
			<th class='th' colspan='1'>Teléfono</th>
			<th class='th' colspan='1'>Correo</th>
			<th class='th' colspan='1'>Cargo</th>
			<th class='th' colspan='1'>Dirección</th>
			<th class='th' colspan='1'>Estatus</th>
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

			

			if ($usuario['est_usu'] == "A") {
				$estatus = "Activo";
			} else {
				$estatus = "Inactivo";
			}

			echo "
						<tr class='tr'>
							<td class='td' colspan='1'>$usuario[cod_usu]</td>
							<td class='td' colspan='1'>$usuario[nom_usu]</td>
							<td class='td' colspan='1'>$usuario[ape_usu]</td>";

			if ($usuario['gen_usu'] == "H") {
				echo "<td class='td' colspan='1'>Hombre</td>";
			} else {
				echo "<td class='td' colspan='1'>Mujer</td>";
			}

			echo "<td class='td' colspan='1'>$usuario[nac_usu]</td>";

			if ($usuario['tip_usu'] == "V") {
				echo "<td class='td' colspan='1'>Venezolano</td>";
			} else {
				echo "<td class='td' colspan='1'>Extranjero</td>";
			}
			echo "
							<td class='td' colspan='1'>$usuario[ced_usu]</td>
							<td class='td' colspan='1'>$usuario[tel_usu]</td>
							<td class='td' colspan='1'>$usuario[cor_usu]</td>
							<td class='td' colspan='1'>$cargo[nom_car]</td>";

			if ($usuario['cod_usu'] == 1 || $usuario['cod_car'] == 1) {
				echo "
							<td class='td' colspan='1'></td>
				";
			} else {
				echo "
							<td class='td' colspan='1'>$usuario[dir_usu]</td>
				";
			}
			echo "
							<td class='td' colspan='1'>$estatus</td>
						</tr>
			";
		}
		?>
	</table>
</body>

</html>