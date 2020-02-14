<?php
	
	require_once("../clase/opcion.class.php");

	$obj_opc = new opcion;

	$obj_opc->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_opc->insertar();
									header("Location: ../../frontend/vista/edo_registrar.php");
		break;

		case 'modificar_normal':	$obj_opc->modificar_normal();
									header("Location: ../../frontend/vista/edo_menu.php");
		break;

		case 'eliminar':			$obj_opc->eliminar();
		break;
	}
	
?>