<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Productos</title>
	<style>
			.head{background-color:#fff;color:#000;border:none}.footer{font-size:15px;background-color:#fff;color:#000;border:none}table{width:100%;text-align:center;border-collapse:collapse}th{font-size:20px}td{font-size:15px}td,th{border:1px solid #000;padding:7px}.nada{border:none;padding:15px}.espacio{border:none;padding:7px}
		</style>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan='6' style='text-align: left;'>
				<h3>Lista de Productos</h3>
			</th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class="th">Código</th>
			<th class="th">Nombre</th>
			<th class="th">Descripción</th>
			<th class="th">Precio</th>
			<th class="th">Cantidad</th>
			<th class="th">Proveedor</th>
		</tr>
		<?php

		require_once("../../../backend/class/producto.class.php");
		require_once("../../../backend/class/proveedor.class.php");

		$obj_pro = new producto;
		$obj_pro->puntero = $obj_pro->getAll();

		$obj_edo = new proveedor;

		while (($producto = $obj_pro->extractData()) > 0) {

			$obj_edo->cod_edo = $producto['cod_edo'];
			$obj_edo->puntero = $obj_edo->filter();
			$proveedor = $obj_edo->extractData();

			echo "
						<tr class='tr'>
							<td class='td'>$producto[cod_pro]</td>
							<td class='td'>$producto[nom_pro]</td>
							<td class='td'>$producto[des_pro]</td>
							<td class='td'>$producto[pre_pro]</td>
							<td class='td'>$producto[can_pro]</td>
							<td class='td'>$proveedor[nom_edo]</td>
						</tr>
			";
		}
		?>
	</table>
</body>

</html>