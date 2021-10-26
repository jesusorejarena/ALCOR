<?php

require_once("../class/permiso.class.php");

$obj_per = new permiso;

$obj_per->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_per->resultado = $obj_per->create();

		if ($obj_per->resultado == false) {
			$message = "Este permiso ya existe, por favor ingrese otro";
			$obj_per->message($message) == false;
			header("refresh:2; url=../../frontend/view/per_registrar.php");
		} else {
			$message = "Permiso registrado exitosamente";
			$obj_per->message($message) == true;
			header("refresh:1; url=../../frontend/view/per_registrar.php");
		}
		break;

	case 'update':
		$obj_per->resultado = $obj_per->update();

		if ($obj_per->resultado == false) {
			$message = "Este permiso ya existe, por favor ingrese otro";
			$obj_per->message($message) == false;
			header("refresh:2; url=../../frontend/view/per_listartodo.php");
		} else {
			$message = "Permiso actualizado exitosamente";
			$obj_per->message($message) == true;
			header("refresh:1; url=../../frontend/view/per_listartodo.php");
		}
		break;

	case 'updateStatusI':
		$obj_per->updateStatusI();
		header("Location: ../../frontend/view/per_listartodo.php");
		break;

	case 'updateStatusA':
		$obj_per->updateStatusA();
		header("Location: ../../frontend/view/per_listartodo.php");
		break;

	case 'delete':
		$obj_per->resultado = $obj_per->delete();

		if ($obj_per->resultado == false) {
			$message = "Problemas para eliminar el permiso, puede que este permiso este asignado a algun usuario";
			$obj_per->message($message) == false;
			header("refresh:2; url=../../frontend/view/per_listarpapelera.php");
		} else {
			$message = "Permiso eliminado exitosamente";
			$obj_per->message($message) == true;
			header("refresh:1; url=../../frontend/view/per_listarpapelera.php");
		}
		break;

	case 'restore':
		$obj_per->restore();
		header("Location: ../../frontend/view/per_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_per->firstDelete();
		header("Location: ../../frontend/view/per_listartodo.php");
		break;
}
