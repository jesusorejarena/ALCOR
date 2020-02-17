<?php

	require_once("../../librerias/fpdf/fpdf.php");
	require_once("../../backend/clase/permiso.class.php");
	require_once("../../backend/clase/modulo.class.php");
	require_once("../../backend/clase/cargo.class.php");
	require_once("../../backend/clase/empresa.class.php");

	$cod_per=$_REQUEST['cod_per'];

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->ALiasNbPages();
	$pdf->SetFont('Arial','B',16);	

	$obj_per = new permiso;
	$obj_per->cod_per=$cod_per;
	$obj_per->puntero=$obj_per->listar_modificar();
	$permiso=$obj_per->extraer_dato();

	$obj_car = new cargo;
	$obj_car->cod_car=$permiso['cod_car'];
	$obj_car->puntero=$obj_car->filtrar();
	$cargo=$obj_car->extraer_dato();

	$obj_mod = new modulo;
	$obj_mod->cod_mod=$permiso['cod_mod'];
	$obj_mod->puntero=$obj_mod->filtrar();
	$modulo=$obj_mod->extraer_dato();

	$obj_emp = new empresa;
	$obj_emp->puntero=$obj_emp->listar_modificar();
	$empresa=$obj_emp->extraer_dato();


	$pdf->Cell(190,1,utf8_decode("$empresa[nom_emp]"),0,1,'L',0);
	$pdf->Cell(190,10,"",0,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("Módulo N° $cod_per"),0,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Cargo"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Modulo"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$cargo[nom_car]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$modulo[nom_mod]"),1,1,'C',0);
	$pdf->Cell(190,10,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Creado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Modificado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$permiso[cre_per]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$permiso[act_per]"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Eliminado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Restaurado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$permiso[eli_per]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$permiso[res_per]"),1,1,'C',0);
	$pdf->Cell(190,140,"",0,1,'C',0);


	$pdf->Cell(95,1,utf8_decode("Teléfono: $empresa[tel_emp]"),0,0,'L',0);
	$pdf->Cell(95,1,utf8_decode("RIF: $empresa[rif_emp]"),0,0,'R',0);
	$pdf->Cell(190,15,"",0,1,'C',0);

	$pdf->Cell(190,1,utf8_decode("Dirección: $empresa[dir_emp]"),0,0,'C',0);
	
	$pdf->Output();

?>