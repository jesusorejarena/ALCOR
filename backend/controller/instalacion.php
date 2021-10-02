<?php

switch ($_REQUEST["run"]) {
	case 'instalacion':
		require_once("../class/instalacion.class.php");
		$obj_ins = new instalacion;
		$obj_ins->positionAdmin();

		$obj_ins->assignValue();
		$obj_ins->employeeAdmin();
		header("Location: ../../frontend/view/emp_registrar.php");
		break;
}