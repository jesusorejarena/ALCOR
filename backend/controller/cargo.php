<?php

require_once("../class/cargo.class.php");

$obj_car = new cargo;

$obj_car->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_car->resultado = $obj_car->create();
		$obj_car->message();
		header("refresh:1; url=../../frontend/view/car_registrar.php");
		break;

	case 'update':
		$obj_car->resultado = $obj_car->update();
		$obj_car->message();
		header("refresh:1; url=../../frontend/view/rol_menu.php");
		break;

	case 'restore':
		$obj_car->resultado = $obj_car->restore();
		$obj_car->message();
		header("refresh:1; url=../../frontend/view/car_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_car->resultado = $obj_car->firstDelete();
		$obj_car->message();
		header("refresh:1; url=../../frontend/view/car_listartodo.php");
		break;

	case 'delete':
		$obj_car->resultado = $obj_car->delete();
		$obj_car->message();
		header("refresh:1; url=../../frontend/view/car_listarpapelera.php");
		break;
}