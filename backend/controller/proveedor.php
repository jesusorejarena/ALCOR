<?php

require_once("../class/proveedor.class.php");

$obj_edo = new proveedor;

$obj_edo->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_edo->resultado = $obj_edo->create();
		$obj_edo->message();
		header("refresh:1; url=../../frontend/view/edo_registrar.php");
		break;

	case 'update':
		$obj_edo->resultado = $obj_edo->update();
		$obj_edo->message();
		header("refresh:1; url=../../frontend/view/edo_menu.php");
		break;

	case 'restore':
		$obj_edo->resultado = $obj_edo->restore();
		header("Location: ../../frontend/view/edo_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_edo->resultado = $obj_edo->firstDelete();
		header("Location: ../../frontend/view/edo_listartodo.php");
		break;

	case 'delete':
		$obj_edo->resultado = $obj_edo->delete();
		header("Location: ../../frontend/view/edo_listarpapelera.php");
		break;
}