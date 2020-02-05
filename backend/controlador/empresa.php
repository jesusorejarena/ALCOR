<?php
	
	require("../clase/empresa.class.php");

	$obj_emp = new empresa;

	$obj_emp->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_emp->insertar();
		break;

		case 'modificar_normal':	$obj_emp->modificar_normal();
		break;
	}
	
?>