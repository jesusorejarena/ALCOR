<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Productos</title>
	<link rel='stylesheet' href='../../css/estilospdf.css'>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan="3" style='text-align: left;'><img src='../../img/logo3.png' width='250px'></th>
			<th class='head' colspan="3" style='text-align: right;'>
				<h3>Lista de Productos</h3>
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