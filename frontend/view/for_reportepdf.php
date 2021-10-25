<?php

// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once '../../library/dompdf/autoload.inc.php';

require_once("../../backend/class/formulario.class.php");
require_once("../../backend/class/empresa.class.php");

$cod_for = $_REQUEST['cod_for'];

$obj_for = new formulario;
$obj_for->cod_for = $cod_for;
$obj_for->puntero = $obj_for->filter();
$formulario = $obj_for->extractData();

$obj_emp = new empresa;
$obj_emp->puntero = $obj_emp->getByCode();
$empresa = $obj_emp->extractData();

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml("

		<html>

			<head>

				<meta charset='UTF-8'>
				<title>Reporte del Formulario N° $cod_for</title>
				<style>
			.head{background-color:#fff;color:#000;border:none}.footer{font-size:15px;background-color:#fff;color:#000;border:none}table{width:100%;text-align:center;border-collapse:collapse}th{font-size:20px}td{font-size:15px}td,th{border:1px solid #000;padding:7px}.nada{border:none;padding:15px}.espacio{border:none;padding:7px}
		</style>

			</head>

			<body>
				<table>
					<tr class='head'>
						<th class='head' colspan='6' style='text-align: center;'><h3>Reporte del Formulario<br> N° $cod_for</th>
					</tr>
					<tr class='nada'>
						<th class='nada' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='2'>Código</th>
						<th class='th' colspan='2'>Nombre</th>
						<th class='th' colspan='2'>Apellido</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='2'>$formulario[cod_for]</td>
						<td class='td' colspan='2'>$formulario[nom_for]</td>
						<td class='td' colspan='2'>$formulario[ape_for]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='3'>Teléfono</th>
						<th class='th' colspan='3'>Correo</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='3'>$formulario[tel_for]</td>
						<td class='td' colspan='3'>$formulario[cor_for]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='6'>Asunto</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='6'>$formulario[asu_for]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='6'>Fecha de Registro</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='6'>$formulario[cre_for]</td>
					</tr>
					<tr class='nada'>
						<th class='nada' colspan='6'></th>
					</tr>
					<tr class='footer'>
						<td class='footer' colspan='6' style='text-align: center;'>
							<p>
								<b>
									$empresa[nom_emp]<br>
									$empresa[rif_emp]<br>
								</b>
							</p>
						</td>
					</tr>
					<tr class='footer'>
						<td class='footer' colspan='3' style='text-align: left;'>
							<p>
								<b>Dirección: </b>$empresa[dir_emp]<br>
								<b>E-mail: </b>$empresa[cor_emp]<br>
								<b>Teléfono: </b>$empresa[tel_emp]
							</p>
						</td>
						<td class='footer' colspan='3' style='text-align: right;'>
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

$nombre = "Reporte_Formulario_$cod_for.pdf";

// Output the generated PDF to Browser
$dompdf->stream($nombre);