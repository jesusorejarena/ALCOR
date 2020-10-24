<?php

// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once '../../librerias/dompdf/autoload.inc.php';

require_once("../../backend/class/producto.class.php");
require_once("../../backend/class/proveedor.class.php");
require_once("../../backend/class/empresa.class.php");

$cod_pro = $_REQUEST['cod_pro'];

$obj_pro = new producto;
$obj_pro->cod_pro = $cod_pro;
$obj_pro->puntero = $obj_pro->getByCode();
$producto = $obj_pro->extractData();

$obj_edo = new proveedor;
$obj_edo->cod_edo = $producto['cod_edo'];
$obj_edo->puntero = $obj_edo->getByCode();
$proveedor = $obj_edo->extractData();

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
				<title>Reporte del Producto N° $cod_pro</title>
				<link rel='stylesheet' href='../css/estilospdf.css'>

			</head>

			<body>
				<table>
					<tr class='head'>
						<th class='head' colspan='1' style='text-align: center;'><img src='../img/logo3.png' width='250px'></th>
						<th class='head' colspan='3' style='text-align: center;'><h3>Reporte del Producto <br> N° $cod_pro</h3></th>
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
						<td class='td' colspan='3'>$producto[cod_pro]</td>
						<td class='td' colspan='3'>$producto[nom_pro]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='2'>Descripción</th>
						<th class='th' colspan='2'>Precio</th>
						<th class='th' colspan='2'>Cantidad</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='2'>$producto[des_pro]</td>
						<td class='td' colspan='2'>$producto[pre_pro]</td>
						<td class='td' colspan='2'>$producto[can_pro]</td>
					</tr>
					<tr class='espacio'>
						<th class='espacio' colspan='6'></th>
					</tr>
					<tr class='tr'>
						<th class='th' colspan='6'>Proveedor</th>
					</tr>
					<tr class='tr'>
						<td class='td' colspan='6'>$proveedor[nom_edo]</td>
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
						<td class='td' colspan='2'>$producto[est_pro]</td>
						<td class='td' colspan='2'>$producto[cre_pro]</td>
						<td class='td' colspan='2'>$producto[act_pro]</td>
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
						<td class='td' colspan='2'>$producto[bas_pro]</td>
						<td class='td' colspan='2'>$producto[eli_pro]</td>
						<td class='td' colspan='2'>$producto[res_pro]</td>
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

$nombre = "Reporte_Producto_$cod_pro.pdf";

// Output the generated PDF to Browser
$dompdf->stream($nombre);