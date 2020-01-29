<?php
	
	require("../clase/cargo.class.php");

	$obj_car = new cargo;

	$obj_car->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_car->insertar();
		break;

		case 'modificar_normal':	$obj_car->modificar_normal();
		break;

		case 'eliminar':			$obj_car->eliminar();
		break;
	}
	
?>