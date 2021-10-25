<?php

setlocale(LC_ALL, "es_ES");

// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once '../../library/dompdf/autoload.inc.php';

require_once("../../backend/class/usuario.class.php");
require_once("../../backend/class/cargo.class.php");
require_once("../../backend/class/empresa.class.php");

$cod_usu = $_REQUEST['cod_usu'];

$obj_usu = new usuario;
$obj_usu->cod_usu = $cod_usu;
$obj_usu->puntero = $obj_usu->getByCode();
$usuario = $obj_usu->extractData();

$obj_emp = new empresa;
$obj_emp->puntero = $obj_emp->getByCode();
$empresa = $obj_emp->extractData();

$obj_car = new cargo;
$obj_car->cod_car = $usuario["cod_car"];
$obj_car->puntero = $obj_car->filter();
$cargo = $obj_car->extractData();


$obj_usu->cod_usu = 1;
$obj_usu->puntero = $obj_usu->getByCode();
$usuarioAdmin = $obj_usu->extractData();

$contratoDia = date("d", strtotime($usuario['cre_usu']));
$contratoMes = date("m", strtotime($usuario['cre_usu']));
$contratoAnio = date("Y", strtotime($usuario['cre_usu']));

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
		<title>Constancia de empleado</title>
		<style>
			.head{background-color:#fff;color:#000;border:none}.footer{font-size:15px;background-color:#fff;color:#000;border:none}table{width:100%;text-align:center;border-collapse:collapse}th{font-size:20px}td{font-size:15px}td,th{border:1px solid #000;padding:7px}.nada{border:none;padding:15px}.espacio{border:none;padding:7px}
		</style>
	</head>

	<body>
		<table>
			<tr class='head'>
				<th class='head' colspan='6' style='text-align: center'>
					<h1>Constancia de Trabajo</h1>
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
						El suscrito propietario de <b>$empresa[nom_emp]</b> ciudadano <b>$usuarioAdmin[nom_usu] $usuarioAdmin[ape_usu]</b>, titular de la Cédula de Identidad No. <b>$usuarioAdmin[tip_usu]-$usuarioAdmin[ced_usu]</b>, hago constar por medio del presente que el señor(a): $usuario[nom_usu] $usuario[ape_usu], venezolano, mayor de edad, titular de la Cédula de Identidad No. $usuario[tip_usu]-$usuario[ced_usu], se desempeña desde el día $contratoDia del mes $contratoMes del $contratoAnio como empleado(a) de la empresa.
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
						Atentamente
						<br /><br /><br /><br /><br /><br /><br /><br /><br />
						______________________________________
						<br /><br />
						<b>$usuarioAdmin[nom_usu] $usuarioAdmin[ape_usu]</b><br />
						<b>$usuarioAdmin[tip_usu]-$usuarioAdmin[ced_usu]</b>
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
					</p>
				</td>
			</tr>
			<tr class='espacio'>
				<th class='espacio' colspan='6'></th>
			</tr>
			<tr class='nada'>
				<th class='nada' colspan='6'></th>
			</tr>
			<tr class='footer'>
				<td class='footer' colspan='6' style='text-align: left'>
					<p style='text-align: left;'>
						<b>Dirección: </b>$empresa[dir_emp]<br>
						<b>E-mail: </b>$empresa[cor_emp]<br>
						<b>Teléfono: </b>$empresa[tel_emp]<br>
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

$nombre = "Constancia_de_Trabajo_del_Empleado_$usuario[nom_usu]_$usuario[ape_usu].pdf";

// Output the generated PDF to Browser
$dompdf->stream($nombre);
