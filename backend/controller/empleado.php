<?php

require_once("../class/empleado.class.php");

$obj_ado = new empleado;

$obj_ado->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_ado->resultado = $obj_ado->create();
		$obj_ado->message();
		header("refresh:1; url=../../frontend/view/ado_registrar.php");
		break;

	case 'update':
		$obj_ado->resultado = $obj_ado->update();
		$obj_ado->message();
		header("refresh:1; url=../../frontend/view/ado_menu.php");
		break;

	case 'restore':
		$obj_ado->resultado = $obj_ado->restore();
		header("Location : ../../frontend/view/ado_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_ado->resultado = $obj_ado->firstDelete();
		header("Location : ../../frontend/view/ado_listartodo.php");
		break;

	case 'updateData':
		$obj_ado->resultado = $obj_ado->updateData();
		$obj_ado->message();
		header("refresh:1; url=../../frontend/view/menu_principal.php");
		break;

	case 'updatePassword':
		$obj_ado->resultado = $obj_ado->updatePassword();
		$obj_ado->message();
		header("refresh:1; url=../../frontend/view/menu_principal.php");
		break;

	case 'delete':
		$obj_ado->resultado = $obj_ado->delete();
		header("Location : ../../frontend/view/ado_listarpapelera.php");
		break;

	case 'checkData':
		$obj_ado->puntero = $obj_ado->checkData();
		$empleado = $obj_ado->extractData();

		if ($empleado['cor_ado'] == $obj_ado->cor_ado && $empleado['ced_ado'] == $obj_ado->ced_ado && $empleado['tel_ado'] == $obj_ado->tel_ado && $empleado['nac_ado'] == $obj_ado->nac_ado && $empleado['est_ado'] == "A" && $empleado['bas_ado'] == "A") {
			$obj_ado->cod_ado = $empleado['cod_ado'];
			$obj_ado->updatePassword();

			header("Location: ../../frontend/view/usu_login.php");
		} else {
			$obj_ado->message();
			header("Location: ../../frontend/view/ado_olvidocontrasena.php");
		}


		break;
}