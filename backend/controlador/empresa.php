<?php
	
	require_once("../clase/empresa.class.php");

	$obj_emp = new empresa;

	$obj_emp->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_emp->resultado=$obj_emp->insertar();
									$obj_emp->mensaje();
									header("refresh:1; url=../../frontend/vista/usu_sesion.php");
		break;

		case 'modificar_normal':	$obj_emp->resultado=$obj_emp->modificar_normal();
									$obj_emp->mensaje();
									header("refresh:1; url=../../frontend/vista/emp_menu.php");
		break;
	}
	
?>