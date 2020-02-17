<?php

	require_once("../../librerias/fpdf/fpdf.php");
	require_once("../../backend/clase/empleado.class.php");
	require_once("../../backend/clase/empresa.class.php");

	$cod_ado=$_REQUEST['cod_ado'];

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->ALiasNbPages();
	$pdf->SetFont('Arial','B',16);	

	$obj_ado = new empleado;
	$obj_ado->cod_ado=$cod_ado;
	$obj_ado->puntero=$obj_ado->listar_modificar();
	$empleado=$obj_ado->extraer_dato();

	$obj_emp = new empresa;
	$obj_emp->puntero=$obj_emp->listar_modificar();
	$empresa=$obj_emp->extraer_dato();


	$pdf->Cell(190,1,utf8_decode("$empresa[nom_emp]"),0,1,'L',0);
	$pdf->Cell(190,10,"",0,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("Empleado N° $cod_ado"),0,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Nombre"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Apellido"),1,1,'C',0);

	$pdf->Cell(95,15,utf8_decode("$empleado[nom_ado]"),1,0,'C',0);
	$pdf->Cell(95,15,utf8_decode("$empleado[ape_ado]"),1,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Genero"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Fecha de Nacimiento"),1,1,'C',0);

	$pdf->Cell(95,15,utf8_decode("$empleado[gen_ado]"),1,0,'C',0);
	$pdf->Cell(95,15,utf8_decode("$empleado[nac_ado]"),1,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(40,10,utf8_decode("Nacionalidad"),1,0,'C',0);
	$pdf->Cell(75,10,utf8_decode("Cédula"),1,0,'C',0);
	$pdf->Cell(75,10,utf8_decode("Teléfono"),1,1,'C',0);

	$pdf->Cell(40,15,utf8_decode("$empleado[tip_ado]"),1,0,'C',0);
	$pdf->Cell(75,15,utf8_decode("$empleado[ced_ado]"),1,0,'C',0);
	$pdf->Cell(75,15,utf8_decode("$empleado[tel_ado]"),1,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(190,10,utf8_decode("Correo"),1,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("$empleado[cor_ado]"),1,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(190,10,utf8_decode("Dirección"),1,1,'C',0);

	$pdf->Cell(190,15,utf8_decode("$empleado[dir_ado]"),1,1,'C',0);
	$pdf->Cell(190,5,"",0,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Creado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Modificado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$empleado[cre_ado]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$empleado[act_ado]"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("Eliminado"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("Restaurado"),1,1,'C',0);

	$pdf->Cell(95,10,utf8_decode("$empleado[eli_ado]"),1,0,'C',0);
	$pdf->Cell(95,10,utf8_decode("$empleado[res_ado]"),1,1,'C',0);
	$pdf->Cell(190,15,"",0,1,'C',0);


	$pdf->Cell(95,1,utf8_decode("Teléfono: $empresa[tel_emp]"),0,0,'L',0);
	$pdf->Cell(95,1,utf8_decode("RIF: $empresa[rif_emp]"),0,0,'R',0);
	$pdf->Cell(190,15,"",0,1,'C',0);

	$pdf->Cell(190,1,utf8_decode("Dirección: $empresa[dir_emp]"),0,0,'C',0);
	
	$pdf->Output();

?>