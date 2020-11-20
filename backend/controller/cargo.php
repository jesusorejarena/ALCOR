<?php

require_once("../class/cargo.class.php");

$obj_car = new cargo;

$obj_car->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_car->resultado = $obj_car->create();

		if ($obj_car->resultado == false) {
			$message = "Este nombre de cargo ya existe, por favor ingrese otro";
			$obj_car->message($message) == false;
		} else {
			$message = "Cargo registrado exitosamente";
			$obj_car->message($message) == true;
		}
		header("refresh:1; url=../../frontend/view/car_registrar.php");
		break;

	case 'update':
		$obj_car->resultado = $obj_car->update();

		if ($obj_car->resultado == false) {
			$message = "Este nombre de cargo ya existe, por favor ingrese otro";
			$obj_car->message($message) == false;
		} else {
			$message = "Cargo actualizado exitosamente";
			$obj_car->message($message) == true;
		}
		header("refresh:1; url=../../frontend/view/car_listartodo.php");
		break;

	case 'updateStatusI':
		$obj_car->updateStatusI();
		header("Location: ../../frontend/view/car_listartodo.php");
		break;

	case 'updateStatusA':
		$obj_car->updateStatusA();
		header("Location: ../../frontend/view/car_listartodo.php");
		break;

	case 'delete':
		$obj_car->resultado = $obj_car->delete();

		if ($obj_car->resultado == false) {
			$message = "Problemas para eliminar el cargo, puede que este cargo este asignado a algun usuario";
			$obj_car->message($message) == false;
			header("refresh:3; url=../../frontend/view/car_listartodo.php");
		} else {
			$message = "Cargo eliminado exitosamente";
			$obj_car->message($message) == true;
			header("refresh:1; url=../../frontend/view/car_listartodo.php");
		}
		break;

	case 'restore':
		$obj_car->restore();
		header("Location: ../../frontend/view/car_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_car->firstDelete();
		header("Location: ../../frontend/view/car_listartodo.php");
		break;
}
