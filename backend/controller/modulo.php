<?php

require_once("../class/modulo.class.php");

$obj_mod = new modulo;

$obj_mod->assignValue();

switch ($_REQUEST["run"]) {
	case 'update':
		$obj_mod->resultado = $obj_mod->update();
		$obj_mod->message();
		header("refresh:1; url=../../frontend/view/rol_menu.php");
		break;

	case 'restore':
		$obj_mod->resultado = $obj_mod->restore();
		header("Location: ../../frontend/view/mod_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_mod->resultado = $obj_mod->firstDelete();
		header("Location: ../../frontend/view/mod_listartodo.php");
		break;

	case 'delete':
		$obj_mod->resultado = $obj_mod->delete();
		header("Location: ../../frontend/view/mod_listarpapelera.php");
		break;
}