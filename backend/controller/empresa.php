<?php

require_once("../class/empresa.class.php");

$obj_emp = new empresa();

$obj_emp->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_emp->create();
		header("Location: ../../frontend/view/usu_login.php");
		break;

	case 'update':
		$obj_emp->resultado = $obj_emp->update();

		if ($obj_emp->resultado == false) {
			$message = "Problemas para actualizar la información";
			$obj_emp->message($message) == false;
		} else {
			$message = "Datos actualizados exitosamente";
			$obj_emp->message($message) == true;
		}
		header("refresh:1; url=../../frontend/view/emp_modificar.php");
		break;
}
