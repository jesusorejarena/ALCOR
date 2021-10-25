<html>

<head>
	<meta charset='UTF-8'>
	<title>Listado de Pedidos</title>
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
				<h3>Listado de Pedidos</h3>
			</th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class="th" colspan='1'>Código</th>
			<th class="th" colspan='1'>Precio total</th>
			<th class="th" colspan='2'>Cliente</th>
			<th class="th" colspan='1'>Ingreso</th>
			<th class="th" colspan='1'>Salida</th>
		</tr>
		<?php

		require_once("../../../backend/class/pedido.class.php");
		require_once("../../../backend/class/usuario.class.php");

		$obj_ped = new pedido;
		$obj_ped->puntero = $obj_ped->getAllOrderT();

		$obj_usu = new usuario;


		while (($pedidos = $obj_ped->extractData()) > 0) {

			$obj_usu->cod_usu = $pedidos['cod_usu'];
			$obj_usu->puntero = $obj_usu->getByCode();
			$usuario = $obj_usu->extractData();

			echo "
						<tr class='tr'>
							<td class='td' colspan='1'>$pedidos[cod_ped]</td>
							<td class='td' colspan='1'>$pedidos[pre_ped]</td>
							<td class='td' colspan='2'>$usuario[nom_usu] $usuario[ape_usu]</td>
							<td class='td' colspan='1'>$pedidos[cre_ped]</td>
							<td class='td' colspan='1'>$pedidos[act_ped]</td>
						</tr>
			";
		}
		?>
	</table>
</body>

</html>