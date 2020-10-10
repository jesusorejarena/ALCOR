<?php

require_once("../class/modulo.class.php");

$obj_mod = new modulo;

$obj_mod->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		switch ($obj_mod->url_mod) {
			case 'ado_menu.php':
				$obj_mod->nom_mod = "Empleados";
				break;

			case 'edo_menu.php':
				$obj_mod->nom_mod = "Proveedores";
				break;

			case 'pro_menu.php':
				$obj_mod->nom_mod = "Productos";
				break;

			case 'ven_menu.php':
				$obj_mod->nom_mod = "Ventas";
				break;

			case 'for_menu.php':
				$obj_mod->nom_mod = "Formularios";
				break;
		}

		$obj_mod->resultado = $obj_mod->create();
		$obj_mod->message();
		header("refresh:1; url=../../frontend/view/mod_registrar.php");
		break;

	case 'update':
		$obj_mod->resultado = $obj_mod->update();
		$obj_mod->message();
		header("refresh:1; url=../../frontend/view/rol_menu.php");
		break;

	case 'restore':
		$obj_mod->resultado = $obj_mod->restore();
		$obj_mod->message();
		header("refresh:1; url=../../frontend/view/mod_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_mod->resultado = $obj_mod->firstDelete();
		$obj_mod->message();
		header("refresh:1; url=../../frontend/view/mod_listartodo.php");
		break;

	case 'delete':
		$obj_mod->resultado = $obj_mod->delete();
		$obj_mod->message();
		header("refresh:1; url=../../frontend/view/mod_listarpapelera.php");
		break;
}