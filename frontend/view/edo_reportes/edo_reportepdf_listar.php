<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Proveedores</title>
	<style>
		.head {
			background-color: #fff;
			color: #000;
			border: none
		}

		.footer {
			font-size: 15px;
			background-color: #fff;
			color: #000;
			border: none
		}

		table {
			width: 100%;
			text-align: center;
			border-collapse: collapse
		}

		th {
			font-size: 20px
		}

		td {
			font-size: 15px
		}

		td,
		th {
			border: 1px solid #000;
			padding: 7px
		}

		.nada {
			border: none;
			padding: 15px
		}

		.espacio {
			border: none;
			padding: 7px
		}
	</style>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan='8' style='text-align: left;'>
				<h3>Lista de Proveedores</h3>
			</th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class='th' colspan='1'>Código</th>
			<th class='th' colspan='1'>Nombre</th>
			<th class='th' colspan='1'>Descripción</th>
			<th class='th' colspan='1'>Dirección</th>
			<th class='th' colspan='1'>Teléfono</th>
			<th class='th' colspan='1'>Correo</th>
			<th class='th' colspan='1'>RIF</th>
			<th class='th' colspan='1'>Estatus</th>
		</tr>
		<?php

		require_once("../../../backend/class/proveedor.class.php");

		$obj_edo = new proveedor;
		$obj_edo->puntero = $obj_edo->getAll();

		while (($proveedor = $obj_edo->extractData()) > 0) {

			

			if ($proveedor['est_edo'] == "A") {
				$estatus = "Activo";
			} else {
				$estatus = "Inactivo";
			}

			echo "
					<tr>
						<td class='td' colspan='1'>$proveedor[cod_edo]</td>
						<td class='td' colspan='1'>$proveedor[nom_edo]</td>
						<td class='td' colspan='1'>$proveedor[des_edo]</td>
						<td class='td' colspan='1'>$proveedor[dir_edo]</td>
						<td class='td' colspan='1'>$proveedor[tel_edo]</td>
						<td class='td' colspan='1'>$proveedor[cor_edo]</td>
						<td class='td' colspan='1'>$proveedor[tip_edo]-$proveedor[rif_edo]</td>
						<td class='td' colspan='1'>$estatus</td>
					</tr>
			";
		}
		?>
	</table>
</body>

</html>