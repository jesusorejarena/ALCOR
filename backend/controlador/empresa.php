<?php
	
	require_once("../clase/empresa.class.php");

	$obj_emp = new empresa;

	$obj_emp->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_emp->insertar();
									header("Location: ../../frontend/vista/inicio.php");
		break;

		case 'modificar_normal':	$obj_emp->modificar_normal();
									header("Location: ../../frontend/vista/emp_menu.php");
		break;
	}
	
?>