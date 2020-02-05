<?php

	require("../../librerias/fpdf/fpdf.php");
	require("../../backend/clase/empleado.class.php");

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->ALiasNbPages();
	$pdf->SetFont('Arial','B',16);	

	$obj_ado = new empleado;
	$obj_ado->puntero=$obj_ado->listar_normal();
	
	//$empleado=$obj_ado->extraer_dato();

	while(($empleado=$obj_ado->extraer_dato())>0)
	{
		$pdf->Cell(40,10,$empleado['nom_ado'],1,0,'C',0);
		$pdf->Cell(40,10,$empleado['ape_ado'],1,0,'C',0);
		$pdf->Cell(40,10,$empleado['tel_ado'],1,0,'C',0);
		$pdf->Cell(40,10,$empleado['cor_ado'],1,0,'C',0);
		$pdf->Cell(40,10,$empleado['nac_ado'],1,1,'C',0);
	}
	
	
		//echo $empleado['nom_ado'];
	

	$pdf->Output();

?>