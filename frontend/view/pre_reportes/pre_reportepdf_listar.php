<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Prendas</title>
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
			<th class='head' colspan='6' style='text-align: left;'>
				<h3>Lista de Prendas</h3>
			</th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class="th" colspan='1'>Código</th>
			<th class="th" colspan='1'>Nombre</th>
			<th class="th" colspan='2'>Descripción</th>
			<th class="th" colspan='1'>Precio</th>
			<th class="th" colspan='1'>Precio</th>
		</tr>
		<?php

		require_once("../../../backend/class/prenda.class.php");

		$obj_pre = new prenda;
		$obj_pre->puntero = $obj_pre->getAll();

		while (($prenda = $obj_pre->extractData()) > 0) {

			

			if ($prenda['est_pre'] == "A") {
				$estatus = "Activo";
			} else {
				$estatus = "Inactivo";
			}

			echo "
						<tr class='tr'>
							<td class='td' colspan='1'>$prenda[cod_pre]</td>
							<td class='td' colspan='1'>$prenda[nom_pre]</td>
							<td class='td' colspan='2'>$prenda[des_pre]</td>
							<td class='td' colspan='1'>$prenda[pre_pre]</td>
							<td class='td' colspan='1'>$estatus</td>
						</tr>
			";
		}
		?>
	</table>
</body>

</html>