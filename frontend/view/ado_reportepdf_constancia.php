<?php

setlocale(LC_ALL, "es_ES");

// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once '../../library/dompdf/autoload.inc.php';

require_once("../../backend/class/empleado.class.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/empresa.class.php");

$cod_ado = $_REQUEST['cod_ado'];

$obj_ado = new empleado;
$obj_ado->cod_ado = $cod_ado;
$obj_ado->puntero = $obj_ado->getByCode();
$empleado = $obj_ado->extractData();

$obj_emp = new empresa;
$obj_emp->puntero = $obj_emp->getByCode();
$empresa = $obj_emp->extractData();

$obj_car = new cargo;
$obj_car->cod_car = $empleado["cod_car"];
$obj_car->puntero = $obj_car->filter();
$cargo = $obj_car->extractData();

$contrato = date("d-m-Y", strtotime($empleado['cre_ado']));

$dia = date("d");
$mes = date("m");
$anio = date("Y");

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml("
<html>
	<head>
		<meta charset='UTF-8' />
		<title>Reporte del Empleado N° $cod_ado</title>
		<link rel='stylesheet' href='../css/estilospdf.css' />
	</head>

	<body>
		<table>
			<tr class='head'>
				<th class='head' colspan='6' style='text-align: center'>
					<h3>Constancia de Trabajo</h3>
				</th>
			</tr>
			<tr class='espacio'>
				<th class='espacio' colspan='6'></th>
			</tr>
			<tr class='nada'>
				<th class='nada' colspan='6'></th>
			</tr>
			<tr class='footer'>
				<td class='footer' colspan='1'></td>
				<td class='footer' colspan='4' style='text-align: justify'>
					<p style='text-align: justify;'>
						El suscrito propietario de <b>ALCOR C.A.</b> ciudadano <b>MARIO ALCEDO</b>, titular de la Cédula de Identidad No. <b>V-5.682.978</b>, hago constar por medio del presente que el señor(a): $empleado[nom_ado] $empleado[ape_ado], venezolano, mayor de edad, titular de la Cédula de Identidad No. $empleado[tip_ado]-$empleado[ced_ado], se desempeña desde el $contrato como empleado(a) de la empresa.
					</p>
					<p style='text-align: justify;'>
						Constancia que se expide a petición de parte del interesado en San Cristóbal a los $dia días del mes $mes del $anio.<br /><br /><br /><br />
					</p>
				</td>
				<td class='footer' colspan='1'></td>
			</tr>
			<tr class='espacio'>
				<th class='espacio' colspan='6'></th>
			</tr>
			<tr class='footer'>
				<td class='footer' colspan='2'></td>
				<td class='footer' colspan='2' style='text-align: center'>
					<p>
						Atentamente<br /><br /><br /><br />
						________________________<br /><br />
						<b>MARIO ALCEDO</b><br />
						<b>V-5.682.978</b>
					</p>
				</td>
				<td class='footer' colspan='2'></td>
			</tr>
			<tr class='espacio'>
				<th class='espacio' colspan='6'></th>
			</tr>
			<tr class='nada'>
				<th class='nada' colspan='6'></th>
			</tr>
			<tr class='espacio'>
				<th class='espacio' colspan='6'></th>
			</tr>
			<tr class='nada'>
				<th class='nada' colspan='6'></th>
			</tr>
			<tr class='footer'>
				<td class='footer' colspan='6' style='text-align: left'>
					<p style='text-align: center;'>
						<b>$empresa[nom_emp]</b><br>
						<b>$empresa[rif_emp]</b><br><br>
						<b>Dirección: </b>$empresa[dir_emp] <b>E-mail: </b>$empresa[cor_emp] <b>Teléfono: </b>$empresa[tel_emp]
					</p>
				</td>
			</tr>
		</table>
	</body>
</html>
");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'vertical');

// Render the HTML as PDF
$dompdf->render();

$nombre = "Constancia_de_Trabajo_del_Empleado_$cod_ado.pdf";

// Output the generated PDF to Browser
$dompdf->stream($nombre);