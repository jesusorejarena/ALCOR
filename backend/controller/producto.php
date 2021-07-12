<?php

require_once("../class/producto.class.php");

$obj_pro = new producto;

$obj_pro->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_pro->resultado = $obj_pro->create();

		if ($obj_pro->resultado == false) {
			$message = "Este producto ya existe, por favor ingrese otro";
			$obj_pro->message($message) == false;
			header("refresh:2; url=../../frontend/view/pro_registrar.php");
		} else {
			$message = "Producto registrado exitosamente";
			$obj_pro->message($message) == true;
			header("refresh:1; url=../../frontend/view/pro_registrar.php");
		}
		break;

	case 'update':
		$obj_pro->resultado = $obj_pro->update();

		if ($obj_pro->resultado == false) {
			$message = "Este producto ya existe, por favor ingrese otro";
			$obj_pro->message($message) == false;
			header("refresh:2; url=../../frontend/view/pro_listartodo.php");
		} else {
			$message = "Producto actualizado exitosamente";
			$obj_pro->message($message) == true;
			header("refresh:1; url=../../frontend/view/pro_listartodo.php");
		}
		break;

	case 'restore':
		$obj_pro->restore();
		header("Location: ../../frontend/view/pro_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_pro->firstDelete();
		header("Location: ../../frontend/view/pro_listartodo.php");
		break;

	case 'updateStatusI':
		$obj_pro->resultado = $obj_pro->updateStatusI();
		header("Location: ../../frontend/view/pro_listartodo.php");
		break;

	case 'updateStatusA':
		$obj_pro->resultado = $obj_pro->updateStatusA();
		header("Location: ../../frontend/view/pro_listartodo.php");
		break;

	case 'sale':
		$obj_pro->cod_pro = $obj_pro->cod_pro;
		$obj_pro->puntero = $obj_pro->getByCode();
		$producto = $obj_pro->extractData();
		if (($producto['can_pro']) >= $obj_pro->com_pro) {
			$can_pro = ($producto['can_pro']) - ($obj_pro->com_pro);
			$obj_pro->can_pro = $can_pro;
			$obj_pro->resultado = $obj_pro->sale();
			$message = "Venta realizada exitosamente";
			$obj_pro->message($message) == false;
			header("refresh:1; url=../../frontend/view/ven_menu.php");
		} else {
			$message = "Error al realizar la venta, revisa la cantidad";
			$obj_pro->message($message) == false;
			header("refresh:1; url=../../frontend/view/ven_menu.php");
		}
		break;

	case 'delete':
		$obj_pro->delete();
		header("Location: ../../frontend/view/pro_listarpapelera.php");
		break;
}