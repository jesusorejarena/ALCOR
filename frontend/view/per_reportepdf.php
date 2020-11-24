<?php

// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once '../../library/dompdf/autoload.inc.php';

require_once("../../backend/class/permiso.class.php");
require_once("../../backend/class/modulo.class.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/empresa.class.php");

$cod_per = $_REQUEST['cod_per'];

$obj_per = new permiso;
$obj_per->cod_per = $cod_per;
$obj_per->puntero = $obj_per->getByCode();
$permiso = $obj_per->extractData();

$obj_car = new cargo;
$obj_car->cod_car = $permiso['fky_cargo'];
$obj_car->puntero = $obj_car->filter();
$cargo = $obj_car->extractData();

$obj_mod = new modulo;
$obj_mod->cod_mod = $permiso['cod_mod'];
$obj_mod->puntero = $obj_mod->filter();
$modulo = $obj_mod->extractData();

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
				<title>Reporte del Permiso N° $cod_per</title>
				<link rel='stylesheet' href='../css/estilospdf.css'>

			</head>

			<body>
				<table>
					<tr class='head'>
						<th class='head' colspan='1' style='text-align: center;'><img src='../img/logo3.png' width='250px'></th>
						<th class='head' colspan='3' style='text-align: center;'><h3>Reporte del Permiso <br> N° $cod_per</h3></th>
						<th class='head' colspan='2'></th>
					</tr>
					<tr class='nada'>
						<th class='nada' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='2'>Código</th>
						<th class='th' colspan='2'>Nombre del Cargo</th>
						<th class='th' colspan='2'>Nombre del Módulo</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='2'>$permiso[cod_per]</td>
						<td class='td' colspan='2'>$cargo[nom_car]</td>
						<td class='td' colspan='2'>$modulo[nom_mod]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='2'>Estatus</th>
						<th class='th' colspan='2'>Fecha de Creación</th>
						<th class='th' colspan='2'>Ultima Modificación</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='2'>$permiso[est_per]</td>
						<td class='td' colspan='2'>$permiso[cre_per]</td>
						<td class='td' colspan='2'>$permiso[act_per]</td>
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
						<td class='td' colspan='2'>$permiso[bas_per]</td>
						<td class='td' colspan='2'>$permiso[eli_per]</td>
						<td class='td' colspan='2'>$permiso[res_per]</td>
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

$nombre = "Reporte_Permiso_$cod_per.pdf";

// Output the generated PDF to Browser
$dompdf->stream($nombre);
