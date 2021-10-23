<?php

require_once("../class/prenda.class.php");

$obj_pre = new prenda;

$obj_pre->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_pre->resultado = $obj_pre->create();

		if ($obj_pre->resultado == false) {
			$message = "Esta prenda ya existe, por favor ingrese otro";
			$obj_pre->message($message) == false;
			header("refresh:2; url=../../frontend/view/pre_registrar.php");
		} else {
			$message = "Prenda registrada exitosamente";
			$obj_pre->message($message) == true;
			header("refresh:1; url=../../frontend/view/pre_registrar.php");
		}
		break;

	case 'update':
		$obj_pre->resultado = $obj_pre->update();

		if ($obj_pre->resultado == false) {
			$message = "Esta prenda ya existe, por favor ingrese otro";
			$obj_pre->message($message) == false;
			header("refresh:2; url=../../frontend/view/pre_listartodo.php");
		} else {
			$message = "Prenda actualizada exitosamente";
			$obj_pre->message($message) == true;
			header("refresh:1; url=../../frontend/view/pre_listartodo.php");
		}
		break;

	case 'updateStatusI':
		$obj_pre->resultado = $obj_pre->updateStatusI();
		header("Location: ../../frontend/view/pre_listartodo.php");
		break;

	case 'updateStatusA':
		$obj_pre->resultado = $obj_pre->updateStatusA();
		header("Location: ../../frontend/view/pre_listartodo.php");
		break;

	case 'delete':
		$obj_pre->delete();
		header("Location: ../../frontend/view/pre_listartodo.php");
		break;
}