<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Proveedores</title>
	<style>
			.head{background-color:#fff;color:#000;border:none}.footer{font-size:15px;background-color:#fff;color:#000;border:none}table{width:100%;text-align:center;border-collapse:collapse}th{font-size:20px}td{font-size:15px}td,th{border:1px solid #000;padding:7px}.nada{border:none;padding:15px}.espacio{border:none;padding:7px}
		</style>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan='1' style='text-align: left;'><img src='../img/logo3.png' width='250px'></th>
			<th class='head' colspan='5' style='text-align: right;'>
				<h3>Lista de Proveedores</h3>
			</th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class='th'>Código</th>
			<th class='th'>Nombre</th>
			<th class='th'>Descripción</th>
			<th class='th'>Dirección</th>
			<th class='th'>Teléfono</th>
			<th class='th'>Correo</th>
			<th class='th'>Tipo</th>
			<th class='th'>RIF</th>
		</tr>
		<?php

		require_once("../../../backend/class/proveedor.class.php");

		$obj_edo = new proveedor;
		$obj_edo->puntero = $obj_edo->getAll();

		while (($proveedor = $obj_edo->extractData()) > 0) {

			echo "
					<tr>
						<td class='td'>$proveedor[cod_edo]</td>
						<td class='td'>$proveedor[nom_edo]</td>
						<td class='td'>$proveedor[des_edo]</td>
						<td class='td'>$proveedor[dir_edo]</td>
						<td class='td'>$proveedor[tel_edo]</td>
						<td class='td'>$proveedor[cor_edo]</td>
						<td class='td'>$proveedor[tip_edo]</td>
						<td class='td'>$proveedor[rif_edo]</td>
					</tr>
			";
		}
		?>
	</table>
</body>

</html>