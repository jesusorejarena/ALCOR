<?php

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

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

if ($usuario['est_usu'] == "A") {
	$estatus = "Activo";
} else {
	$estatus = "Inactivo";
}

if ($usuario['bas_usu'] == "A") {
	$estado = "Activo";
} else {
	$estado = "Papelera";
}

$dompdf->loadHtml("

		<html>

			<head>

				<meta charset='UTF-8'>
				<title>Reporte del Empleado N° $cod_usu</title>
				<style>
			.head{background-color:#fff;color:#000;border:none}.footer{font-size:15px;background-color:#fff;color:#000;border:none}table{width:100%;text-align:center;border-collapse:collapse}th{font-size:20px}td{font-size:15px}td,th{border:1px solid #000;padding:7px}.nada{border:none;padding:15px}.espacio{border:none;padding:7px}
		</style>

			</head>

			<body>
				<table>
					<tr class='head'>
					
						<th class='head' colspan='6'><h3 style='text-align: center;'>Reporte del Empleado<br> N° $cod_usu</h3></th>
					</tr>
					<tr class='nada'>
						<th class='nada' colspan='6'></th>
					</tr>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='1'>Código</th>
						<th class='th' colspan='1'>Nombre</th>
						<th class='th' colspan='1'>Apellido</th>
						<th class='th' colspan='1'>Genero</th>
						<th class='th' colspan='1'>Fecha de Nacimiento</th>
						<th class='th' colspan='1'>Teléfono</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='1'>$usuario[cod_usu]</td>
						<td class='td' colspan='1'>$usuario[nom_usu]</td>
						<td class='td' colspan='1'>$usuario[ape_usu]</td>
						<td class='td' colspan='1'>$usuario[gen_usu]</td>
						<td class='td' colspan='1'>$usuario[nac_usu]</td>
						<td class='td' colspan='1'>$usuario[tel_usu]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='1'>Tipo</th>
						<th class='th' colspan='1'>Cédula</th>
						<th class='th' colspan='1'>Correo</th>
						<th class='th' colspan='1'>Cargo</th>
						<th class='th' colspan='2'>Dirección</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='1'>$usuario[tip_usu]</td>
						<td class='td' colspan='1'>$usuario[ced_usu]</td>
						<td class='td' colspan='1'>$usuario[cor_usu]</td>
						<td class='td' colspan='1'>$cargo[nom_car]</td>
						<td class='td' colspan='2'>$usuario[dir_usu]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='2'>Estatus</th>
						<th class='th' colspan='2'>Fecha de Contrato</th>
						<th class='th' colspan='2'>Modificado</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='2'>$estatus</td>
						<td class='td' colspan='2'>$usuario[cre_usu]</td>
						<td class='td' colspan='2'>$usuario[act_usu]</td>
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
						<td class='td' colspan='2'>$estado</td>
						<td class='td' colspan='2'>$usuario[eli_usu]</td>
						<td class='td' colspan='2'>$usuario[res_usu]</td>
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

$nombre = "Reporte_Empleado_$cod_usu.pdf";

// Output the generated PDF to Browser
$dompdf->stream($nombre);
