<?php

	// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
	require_once '../../librerias/dompdf/autoload.inc.php';

	require_once("../../backend/clase/proveedor.class.php");
	require_once("../../backend/clase/empresa.class.php");

	$cod_edo=$_REQUEST['cod_edo'];

	$obj_edo = new proveedor;
	$obj_edo->cod_edo=$cod_edo;
	$obj_edo->puntero=$obj_edo->listar_modificar();
	$proveedor=$obj_edo->extraer_dato();

	$obj_emp = new empresa;
	$obj_emp->puntero=$obj_emp->listar_modificar();
	$empresa=$obj_emp->extraer_dato();

	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$dompdf->loadHtml("

		<html>

			<head>

				<meta charset='UTF-8'>
				<title>Reporte del Proveedor N° $cod_edo</title>
				<link rel='stylesheet' href='../css/estilospdf.css'>

			</head>

			<body>
				<table>
					<tr class='head'>
						<th class='head' colspan='1' style='text-align: center;'><img src='../img/logo2.png' width='150px'></th>
						<th class='head' colspan='3' style='text-align: center;'><h3>Reporte del Proveedor <br> N° $cod_edo</h3></th>
						<th class='head' colspan='2'></th>
					</tr>
					<tr class='nada'>
						<th class='nada' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='3'>Código</th>
						<th class='th' colspan='3'>Nombre</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='3'>$proveedor[cod_edo]</td>
						<td class='td' colspan='3'>$proveedor[nom_edo]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='3'>Descripción</th>
						<th class='th' colspan='3'>Dirección</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='3'>$proveedor[dir_edo]</td>
						<td class='td' colspan='3'>$proveedor[des_edo]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='2'>Teléfono</th>
						<th class='th' colspan='1'>Tipo</th>
						<th class='th' colspan='1'>RIF</th>
						<th class='th' colspan='2'>Correo</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='2'>$proveedor[tel_edo]</td>
						<td class='td' colspan='1'>$proveedor[tip_edo]</td>
						<td class='td' colspan='1'>$proveedor[rif_edo]</td>
						<td class='td' colspan='2'>$proveedor[cor_edo]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='2'>Estatus</th>
						<th class='th' colspan='2'>Fecha de Registro</th>
						<th class='th' colspan='2'>Ultima Modificación</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='2'>$proveedor[est_edo]</td>
						<td class='td' colspan='2'>$proveedor[cre_edo]</td>
						<td class='td' colspan='2'>$proveedor[act_edo]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='2'>Estado</th>
						<th class='th' colspan='2'>Fecha de Eliminación</th>
						<th class='th' colspan='2'>Fecha de Restauración</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='2'>$proveedor[bas_edo]</td>
						<td class='td' colspan='2'>$proveedor[eli_edo]</td>
						<td class='td' colspan='2'>$proveedor[res_edo]</td>
					</tr>
					<tr class='nada'>
						<th class='nada' colspan='6'></th>
					</tr>
					<tr class='footer'>
							<td class='footer' colspan='1' style='text-align: left;'>
								<p><b>Dirección: </b>$empresa[dir_emp]<br>
								<b>E-mail: </b>$empresa[cor_emp]<br>
								<b>Teléfono: </b>$empresa[tel_emp]</p>
							</td>
							<td class='footer' colspan='3' style='text-align: center;'>
								<p>
									$empresa[nom_emp]<br>
									$empresa[rif_emp]<br>
								</p>
							</td>
							<td class='footer' colspan='2' style='text-align: right;'>
								<p>
									<b>Horario:</b><br>
									$empresa[hou_emp]<br>
									$empresa[hod_emp]<br>
								</p>
							</td>
						</tr>
				</table>
			</body>

		</html>

	");

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

	// Render the HTML as PDF
	$dompdf->render();

	$nombre="Reporte_Proveedor_$cod_edo.pdf";

	// Output the generated PDF to Browser
	$dompdf->stream($nombre);

?>