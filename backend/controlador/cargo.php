<?php
	
	require_once("../clase/cargo.class.php");

	$obj_car = new cargo;

	$obj_car->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_car->insertar();
									header("Location: ../../frontend/vista/car_registrar.php");
		break;

		case 'modificar_normal':	$obj_car->modificar_normal();
									header("Location: ../../frontend/vista/rol_menu.php");
		break;

		case 'modificar_restaurar':	$obj_car->modificar_restaurar();
									header("Location: ../../frontend/vista/car_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_car->modificar_eliminar();
									header("Location: ../../frontend/vista/car_listartodo.php");
		break;

		case 'eliminar':			$obj_car->eliminar();
									header("Location: ../../frontend/vista/car_listarpapelera.php");
		break;
	}
	
?>