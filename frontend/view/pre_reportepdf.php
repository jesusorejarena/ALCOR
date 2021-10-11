<?php

// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once '../../library/dompdf/autoload.inc.php';

require_once("../../backend/class/prenda.class.php");
require_once("../../backend/class/empresa.class.php");

$cod_pre = $_REQUEST['cod_pre'];

$obj_pre = new prenda;
$obj_pre->cod_pre = $cod_pre;
$obj_pre->puntero = $obj_pre->getByCode();
$prenda = $obj_pre->extractData();

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
				<title>Reporte del Prenda N° $cod_pre</title>
				<style>
			.head{background-color:#fff;color:#000;border:none}.footer{font-size:15px;background-color:#fff;color:#000;border:none}table{width:100%;text-align:center;border-collapse:collapse}th{font-size:20px}td{font-size:15px}td,th{border:1px solid #000;padding:7px}.nada{border:none;padding:15px}.espacio{border:none;padding:7px}
		</style>

			</head>

			<body>
				<table>
					<tr class='head'>
						<th class='head' colspan='1' style='text-align: left;'><img src='../img/logo3.png' width='250px'></th>
						<th class='head' colspan='3' style='text-align: center;'><h3>Reporte del Prenda <br> N° $cod_pre</h3></th>
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
						<td class='td' colspan='3'>$prenda[cod_pre]</td>
						<td class='td' colspan='3'>$prenda[nom_pre]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='4'>Descripción</th>
						<th class='th' colspan='2'>Precio</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='4'>$prenda[des_pre]</td>
						<td class='td' colspan=''>$prenda[pre_pre]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='2'>Estatus</th>
						<th class='th' colspan='2'>Fecha de Ingreso</th>
						<th class='th' colspan='2'>Modificado</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='2'>$prenda[est_pre]</td>
						<td class='td' colspan='2'>$prenda[cre_pre]</td>
						<td class='td' colspan='2'>$prenda[act_pre]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='2'>Estado</th>
						<th class='th' colspan='2'>Eliminado</th>
						<th class='th' colspan='2'>Restaurado</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='2'>$prenda[bas_pre]</td>
						<td class='td' colspan='2'>$prenda[eli_pre]</td>
						<td class='td' colspan='2'>$prenda[res_pre]</td>
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

$nombre = "Reporte_preducto_$cod_pre.pdf";

// Output the generated PDF to Browser
$dompdf->stream($nombre);
