
<?php

	// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
	require_once ("../../librerias/dompdf/autoload.inc.php");
	//require_once ("../../clases/Conexion.php");

	/*$idventa=$_GET['id_ven'];

	$c=new conectar();
	$conexion= $c->conexion();	
	$idventa=$_GET['id_ven'];



	$sql="SELECT ve.id_ven,
	ve.fch_ven,
	ve.id_cli,
	art.nom_pro,
	art.prc_pro,
	art.des_pro
	from venta  as ve 
	inner join producto as art
	on ve.id_pro=art.id_pro
	and ve.id_ven='$idventa';";*/

	/*$sql="SELECT * FROM venta;";

	$result=mysqli_query($conexion,$sql);
	$mostrar=mysqli_fetch_row($result);*/
	

	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$dompdf->loadHtml("

		<html>

			<head>

				<meta charset='UTF-8'>
				<title>Reporte</title>
				<link rel='stylesheet' href='../css/estilospdf.css'>

			</head>

			<body>
				<h1>Holaaaa</h1>
			</body>

		</html>

	");

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

	// Render the HTML as PDF
	$dompdf->render();

	$nombre="Reporte_Empleado.pdf";

	// Output the generated PDF to Browser
	$dompdf->stream($nombre);

?>