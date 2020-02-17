<?php

	require_once("../../librerias/fpdf/fpdf.php");
	require_once("../../backend/clase/cargo.class.php");
	require_once("../../backend/clase/empresa.class.php");

	$cod_car=$_REQUEST['cod_car'];

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->ALiasNbPages();
	$pdf->SetFont('Arial','B',16);	

	$obj_car = new cargo;
	$obj_car->cod_car=$cod_car;
	$obj_car->puntero=$obj_car->listar_modificar();
	$cargo=$obj_car->extraer_dato();

	$obj_emp = new empresa;
	$obj_emp->puntero=$obj_emp->listar_modificar();
	$empresa=$obj_emp->extraer_dato();


	$pdf->Cell(190,1,utf8_decode("$empresa[nom_emp]"),0,1,'L',0);
	$pdf->Cell(190,10,"",0,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("Cargo N° $cod_car"),0,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(190,10,utf8_decode("Nombre del cargo"),1,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("$cargo[nom_car]"),1,1,'C',0);
	$pdf->Cell(190,10,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Creado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Modificado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$cargo[cre_car]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$cargo[act_car]"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Eliminado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Restaurado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$cargo[eli_car]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$cargo[res_car]"),1,1,'C',0);
	$pdf->Cell(190,15,"",0,1,'C',0);


	$pdf->Cell(95,1,utf8_decode("Teléfono: $empresa[tel_emp]"),0,0,'L',0);
	$pdf->Cell(95,1,utf8_decode("RIF: $empresa[rif_emp]"),0,0,'R',0);
	$pdf->Cell(190,15,"",0,1,'C',0);

	$pdf->Cell(190,1,utf8_decode("Dirección: $empresa[dir_emp]"),0,0,'C',0);
	
	$pdf->Output();

?>