<?php

	require_once("../../librerias/fpdf/fpdf.php");
	require_once("../../backend/clase/modulo.class.php");
	require_once("../../backend/clase/empresa.class.php");

	$cod_mod=$_REQUEST['cod_mod'];

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->ALiasNbPages();
	$pdf->SetFont('Arial','B',16);	

	$obj_mod = new modulo;
	$obj_mod->cod_mod=$cod_mod;
	$obj_mod->puntero=$obj_mod->listar_modificar();
	$modulo=$obj_mod->extraer_dato();

	$obj_emp = new empresa;
	$obj_emp->puntero=$obj_emp->listar_modificar();
	$empresa=$obj_emp->extraer_dato();


	$pdf->Cell(190,1,utf8_decode("$empresa[nom_emp]"),0,1,'L',0);
	$pdf->Cell(190,10,"",0,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("Módulo N° $cod_mod"),0,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(190,10,utf8_decode("Nombre"),1,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("Menú de $modulo[nom_mod]"),1,1,'C',0);
	$pdf->Cell(190,10,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Creado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Modificado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$modulo[cre_mod]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$modulo[act_mod]"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Eliminado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Restaurado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$modulo[eli_mod]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$modulo[res_mod]"),1,1,'C',0);
	$pdf->Cell(190,140,"",0,1,'C',0);


	$pdf->Cell(95,1,utf8_decode("Teléfono: $empresa[tel_emp]"),0,0,'L',0);
	$pdf->Cell(95,1,utf8_decode("RIF: $empresa[rif_emp]"),0,0,'R',0);
	$pdf->Cell(190,15,"",0,1,'C',0);

	$pdf->Cell(190,1,utf8_decode("Dirección: $empresa[dir_emp]"),0,0,'C',0);
	
	$pdf->Output();

?>