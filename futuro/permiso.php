<?php
	
	require_once("../clase/permiso.class.php");

	$obj_per = new permiso;

	$obj_per->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_per->insertar();
		break;

		case 'modificar_normal':	$obj_per->modificar_normal();
		break;

		case 'modificar_restaurar':	$obj_per->modificar_restaurar();
		break;

		case 'modificar_eliminar':	$obj_per->modificar_eliminar();
		break;

		case 'eliminar':			$obj_per->eliminar();
		break;
	}
	
?>