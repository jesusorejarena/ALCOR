<?php

	require_once("../../librerias/fpdf/fpdf.php");
	require_once("../../backend/clase/producto.class.php");
	require_once("../../backend/clase/proveedor.class.php");
	require_once("../../backend/clase/empresa.class.php");

	$cod_pro=$_REQUEST['cod_pro'];

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->ALiasNbPages();
	$pdf->SetFont('Arial','B',16);	

	$obj_pro = new producto;
	$obj_pro->cod_pro=$cod_pro;
	$obj_pro->puntero=$obj_pro->listar_modificar();
	$producto=$obj_pro->extraer_dato();

	$obj_edo = new proveedor;
	$obj_edo->cod_edo=$producto['cod_edo'];
	$obj_edo->puntero=$obj_edo->listar_modificar();
	$proveedor=$obj_edo->extraer_dato();

	$obj_emp = new empresa;
	$obj_emp->puntero=$obj_emp->listar_modificar();
	$empresa=$obj_emp->extraer_dato();


	$pdf->Cell(190,1,utf8_decode("$empresa[nom_emp]"),0,1,'L',0);
	$pdf->Cell(190,10,"",0,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("Producto N° $cod_pro"),0,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Nombre"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Descripción"),1,1,'C',0);

	$pdf->Cell(95,15,utf8_decode("$producto[nom_pro]"),1,0,'C',0);
	$pdf->Cell(95,15,utf8_decode("$producto[des_pro]"),1,1,'C',0);	
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Precio"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Cantidad"),1,1,'C',0);

	$pdf->Cell(95,15,utf8_decode("$producto[pre_pro]"),1,0,'C',0);
	$pdf->Cell(95,15,utf8_decode("$producto[can_pro]"),1,1,'C',0);
	$pdf->Cell(95,5,"",0,1,'C',0);

	$pdf->Cell(190,10,utf8_decode("Proveedor"),1,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("$proveedor[nom_edo]"),1,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Creado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Modificado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$producto[cre_pro]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$producto[act_pro]"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Eliminado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Restaurado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$producto[eli_pro]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$producto[res_pro]"),1,1,'C',0);
	$pdf->Cell(190,80,"",0,1,'C',0);

	$pdf->Cell(95,1,utf8_decode("Teléfono: $empresa[tel_emp]"),0,0,'L',0);
	$pdf->Cell(95,1,utf8_decode("RIF: $empresa[rif_emp]"),0,0,'R',0);
	$pdf->Cell(190,15,"",0,1,'C',0);

	$pdf->Cell(190,1,utf8_decode("Dirección: $empresa[dir_emp]"),0,0,'C',0);
	
	$pdf->Output();

?>