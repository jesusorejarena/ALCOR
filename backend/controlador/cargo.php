<?php
	
	require_once("../clase/cargo.class.php");

	$obj_car = new cargo;

	$obj_car->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_car->resultado=$obj_car->insertar();
									$obj_car->mensaje();
									header("refresh:1; url=../../frontend/vista/car_registrar.php");
		break;

		case 'modificar_normal':	$obj_car->resultado=$obj_car->modificar_normal();
									$obj_car->mensaje();
									header("refresh:1; url=../../frontend/vista/rol_menu.php");
		break;

		case 'modificar_restaurar':	$obj_car->resultado=$obj_car->modificar_restaurar();
									$obj_car->mensaje();
									header("refresh:1; url=../../frontend/vista/car_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_car->resultado=$obj_car->modificar_eliminar();
									$obj_car->mensaje();
									header("refresh:1; url=../../frontend/vista/car_listartodo.php");
		break;

		case 'eliminar':			$obj_car->resultado=$obj_car->eliminar();
									$obj_car->mensaje();
									header("refresh:1; url=../../frontend/vista/car_listarpapelera.php");
		break;
	}
	
?>