<?php

	require_once("../../librerias/fpdf/fpdf.php");
	require_once("../../backend/clase/proveedor.class.php");
	require_once("../../backend/clase/empresa.class.php");

	$cod_edo=$_REQUEST['cod_edo'];

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->ALiasNbPages();
	$pdf->SetFont('Arial','B',16);	

	$obj_edo = new proveedor;
	$obj_edo->cod_edo=$cod_edo;
	$obj_edo->puntero=$obj_edo->listar_modificar();
	$proveedor=$obj_edo->extraer_dato();

	$obj_emp = new empresa;
	$obj_emp->puntero=$obj_emp->listar_modificar();
	$empresa=$obj_emp->extraer_dato();


	$pdf->Cell(190,1,utf8_decode("$empresa[nom_emp]"),0,1,'L',0);
	$pdf->Cell(190,10,"",0,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("Proveedor N° $cod_edo"),0,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Nombre"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Descripción"),1,1,'C',0);

	$pdf->Cell(95,15,utf8_decode("$proveedor[nom_edo]"),1,0,'C',0);
	$pdf->Cell(95,15,utf8_decode("$proveedor[des_edo]"),1,1,'C',0);	
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Dirección"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Teléfono"),1,1,'C',0);

	$pdf->Cell(95,15,utf8_decode("$proveedor[dir_edo]"),1,0,'C',0);
	$pdf->Cell(95,15,utf8_decode("$proveedor[tel_edo]"),1,1,'C',0);
	$pdf->Cell(95,5,"",0,1,'C',0);

	$pdf->Cell(190,10,utf8_decode("Correo"),1,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("$proveedor[cor_edo]"),1,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(20,10,utf8_decode("Tipo"),1,0,'C',0);
	$pdf->Cell(85,10,utf8_decode("RIF"),1,0,'C',0);
	$pdf->Cell(85,10,utf8_decode("Fecha de Incorporación"),1,1,'C',0);	

	$pdf->Cell(20,15,utf8_decode("$proveedor[tip_edo]"),1,0,'C',0);
	$pdf->Cell(85,15,utf8_decode("$proveedor[rif_edo]"),1,0,'C',0);
	$pdf->Cell(85,15,utf8_decode("$proveedor[cre_edo]"),1,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Creado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Modificado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$proveedor[cre_edo]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$proveedor[act_edo]"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Eliminado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Restaurado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$proveedor[eli_edo]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$proveedor[res_edo]"),1,1,'C',0);
	$pdf->Cell(190,15,"",0,1,'C',0);

	$pdf->Cell(95,1,utf8_decode("Teléfono: $empresa[tel_emp]"),0,0,'L',0);
	$pdf->Cell(95,1,utf8_decode("RIF: $empresa[rif_emp]"),0,0,'R',0);
	$pdf->Cell(190,15,"",0,1,'C',0);

	$pdf->Cell(190,1,utf8_decode("Dirección: $empresa[dir_emp]"),0,0,'C',0);
	
	$pdf->Output();

?>