<html>

<head>
	<meta charset='UTF-8'>
	<title>Lista de Formularios</title>
	<link rel='stylesheet' href='../../css/estilospdf.css'>
</head>

<body>
	<table>
		<tr class='head'>
			<th class='head' colspan="3" style='text-align: left;'><img src='../../img/logo3.png' width='250px'></th>
			<th class='head' colspan="3" style='text-align: right;'>
				<h3>Lista de Formularios</h3>
			</th>
			<th class='head'></th>
		</tr>
		<tr class='nada'>
			<th class='nada'></th>
		</tr>
		<tr class='tr'>
			<th class="th">Código</th>
			<th class="th">Nombre</th>
			<th class="th">Apellido</th>
			<th class="th">Teléfono</th>
			<th class="th">Correo</th>
			<th class="th">Asunto</th>
		</tr>
		<?php

		require_once("../../../backend/class/formulario.class.php");

		$obj_ado = new formulario;
		$obj_ado->puntero = $obj_ado->getAll();

		while (($formulario = $obj_ado->extractData()) > 0) {

			echo "
						<tr class='tr'>
							<td class='td'>$formulario[cod_for]</td>
							<td class='td'>$formulario[nom_for]</td>
							<td class='td'>$formulario[ape_for]</td>
							<td class='td'>$formulario[tel_for]</td>
							<td class='td'>$formulario[cor_for]</td>
							<td class='td'>$formulario[asu_for]</td>
						</tr>
			";
		}
		?>
	</table>
</body>

</html>