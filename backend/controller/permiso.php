<?php

require_once("../class/permiso.class.php");

$obj_per = new permiso;

$obj_per->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_per->resultado = $obj_per->create();
		$obj_per->message();
		header("refresh:1; url=../../frontend/view/per_registrar.php");
		break;

	case 'update':
		$obj_per->resultado = $obj_per->update();
		$obj_per->message();
		header("refresh:1; url=../../frontend/view/rol_menu.php");
		break;

	case 'restore':
		$obj_per->resultado = $obj_per->restore();
		$obj_per->message();
		header("refresh:1; url=../../frontend/view/per_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_per->resultado = $obj_per->firstDelete();
		$obj_per->message();
		header("refresh:1; url=../../frontend/view/per_listartodo.php");
		break;

	case 'delete':
		$obj_per->resultado = $obj_per->delete();
		$obj_per->message();
		header("refresh:1; url=../../frontend/view/per_listarpapelera.php");
		break;
}