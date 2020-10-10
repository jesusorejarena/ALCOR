<?php

require_once("../class/producto.class.php");

$obj_pro = new producto;

$obj_pro->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_pro->resultado = $obj_pro->create();
		$obj_pro->message();
		header("refresh:1; url=../../frontend/view/pro_registrar.php");
		break;

	case 'update':
		$obj_pro->resultado = $obj_pro->update();
		$obj_pro->message();
		header("refresh:1; url=../../frontend/view/pro_menu.php");
		break;

	case 'restore':
		$obj_pro->resultado = $obj_pro->restore();
		$obj_pro->message();
		header("refresh:1; url=../../frontend/view/pro_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_pro->resultado = $obj_pro->firstDelete();
		$obj_pro->message();
		header("refresh:1; url=../../frontend/view/pro_listartodo.php");
		break;

	case 'sale':
		$obj_pro->cod_pro = $obj_pro->cod_pro;
		$obj_pro->puntero = $obj_pro->getByCode();
		$producto = $obj_pro->extractData();
		if (($producto['can_pro']) >= $obj_pro->com_pro) {
			$can_pro = ($producto['can_pro']) - ($obj_pro->com_pro);
			$obj_pro->can_pro = $can_pro;
			$obj_pro->resultado = $obj_pro->sale();
			$obj_pro->message();
			header("refresh:1; url=../../frontend/view/ven_menu.php");
		} else {
			$obj_pro->message();
			header("refresh:1; url=../../frontend/view/ven_menu.php");
		}
		break;

	case 'delete':
		$obj_pro->resultado = $obj_pro->delete();
		$obj_pro->message();
		header("refresh:1; url=../../frontend/view/pro_listarpapelera.php");
		break;
}