<?php
	
	require_once("../clase/cargo.class.php");

	$obj_car = new cargo;

	$obj_car->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_car->insertar();
		break;

		case 'modificar_normal':	$obj_car->modificar_normal();
		break;

		case 'modificar_restaurar':	$obj_car->modificar_restaurar();
		break;

		case 'modificar_eliminar':	$obj_car->modificar_eliminar();
		break;

		case 'eliminar':			$obj_car->eliminar();
		break;
	}
	
?>