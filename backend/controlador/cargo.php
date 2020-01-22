<?php
	
	require("../clase/cargo.class.php");

	$obj_car = new cargo;

	$obj_car->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':	$obj_car->insertar();
		break;

		case 'modificar':	$obj_car->modificar();
		break;

		case 'eliminar':	$obj_car->eliminar();
		break;
	}
	
?>