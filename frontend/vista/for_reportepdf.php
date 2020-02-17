<?php

	require_once("../../librerias/fpdf/fpdf.php");
	require_once("../../backend/clase/formulario.class.php");
	require_once("../../backend/clase/empresa.class.php");

	$cod_for=$_REQUEST['cod_for'];

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->ALiasNbPages();
	$pdf->SetFont('Arial','B',16);	

	$obj_for = new formulario;
	$obj_for->cod_for=$cod_for;
	$obj_for->puntero=$obj_for->filtrar();
	$formulario=$obj_for->extraer_dato();

	$obj_emp = new empresa;
	$obj_emp->puntero=$obj_emp->listar_modificar();
	$empresa=$obj_emp->extraer_dato();


	$pdf->Cell(190,1,utf8_decode("$empresa[nom_emp]"),0,1,'L',0);
	$pdf->Cell(190,10,"",0,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("Formulario N° $cod_for"),0,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Nombre"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Apellido"),1,1,'C',0);

	$pdf->Cell(95,15,utf8_decode("$formulario[nom_for]"),1,0,'C',0);
	$pdf->Cell(95,15,utf8_decode("$formulario[ape_for]"),1,1,'C',0);	
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Teléfono"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Correo"),1,1,'C',0);

	$pdf->Cell(95,15,utf8_decode("$formulario[tel_for]"),1,0,'C',0);
	$pdf->Cell(95,15,utf8_decode("$formulario[cor_for]"),1,1,'C',0);
	$pdf->Cell(95,5,"",0,1,'C',0);

	$pdf->Cell(190,10,utf8_decode("Asunto"),1,1,'C',0);

	$pdf->Cell(190,50,utf8_decode("$formulario[asu_for]"),1,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(190,10,utf8_decode("Creado"),1,1,'C',0);

	$pdf->Cell(190,10,utf8_decode("$formulario[cre_for]"),1,1,'C',0);
	$pdf->Cell(190,70,"",0,1,'C',0);

	$pdf->Cell(95,1,utf8_decode("Teléfono: $empresa[tel_emp]"),0,0,'L',0);
	$pdf->Cell(95,1,utf8_decode("RIF: $empresa[rif_emp]"),0,0,'R',0);
	$pdf->Cell(190,15,"",0,1,'C',0);

	$pdf->Cell(190,1,utf8_decode("Dirección: $empresa[dir_emp]"),0,0,'C',0);
	
	$pdf->Output();

?>