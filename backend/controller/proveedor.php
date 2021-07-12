<?php

require_once("../class/proveedor.class.php");

$obj_edo = new proveedor;

$obj_edo->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_edo->resultado = $obj_edo->create();

		if ($obj_edo->resultado == false) {
			$message = "Este proveedor ya existe, por favor ingrese otro";
			$obj_edo->message($message) == false;
			header("refresh:2; url=../../frontend/view/edo_registrar.php");
		} else {
			$message = "Proveedor registrado exitosamente";
			$obj_edo->message($message) == true;
			header("refresh:1; url=../../frontend/view/edo_registrar.php");
		}
		break;

	case 'update':
		$obj_edo->resultado = $obj_edo->update();

		if ($obj_edo->resultado == false) {
			$message = "Este proveedor ya existe, por favor ingrese otro";
			$obj_edo->message($message) == false;
			header("refresh:2; url=../../frontend/view/edo_listartodo.php");
		} else {
			$message = "Proveedor actualizado exitosamente";
			$obj_edo->message($message) == true;
			header("refresh:1; url=../../frontend/view/edo_listartodo.php");
		}
		header("refresh:1; url=../../frontend/view/edo_menu.php");
		break;

	case 'restore':
		$obj_edo->restore();
		header("Location: ../../frontend/view/edo_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_edo->firstDelete();
		header("Location: ../../frontend/view/edo_listartodo.php");
		break;

	case 'updateStatusI':
		$obj_edo->updateStatusI();
		header("Location: ../../frontend/view/edo_listartodo.php");
		break;

	case 'updateStatusA':
		$obj_edo->updateStatusA();
		header("Location: ../../frontend/view/edo_listartodo.php");
		break;

	case 'delete':
		$obj_edo->resultado = $obj_edo->delete();

		if ($obj_edo->resultado == false) {
			$message = "Problemas para eliminar el proveedor, puede que este proveedor este asignado a algun usuario";
			$obj_edo->message($message) == false;
			header("refresh:3; url=../../frontend/view/edo_listartodo.php");
		} else {
			$message = "Proveedor eliminado exitosamente";
			$obj_edo->message($message) == true;
			header("refresh:3; url=../../frontend/view/edo_listartodo.php");
		}
		break;
}