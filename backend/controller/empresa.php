<?php

require_once("../class/empresa.class.php");

$obj_emp = new empresa;

$obj_emp->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_emp->resultado = $obj_emp->create();
		$obj_emp->message();
		header("refresh:1; url=../../frontend/view/usu_sesion.php");
		break;

	case 'update':
		$obj_emp->resultado = $obj_emp->update();
		$obj_emp->message();
		header("refresh:1; url=../../frontend/view/emp_menu.php");
		break;
}