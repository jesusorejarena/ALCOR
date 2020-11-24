<?php

require_once("../class/empleado.class.php");

$obj_ado = new empleado;

$correo = $_POST['cor_ado'];
$clave = $_POST['cla_ado'];

$obj_ado->puntero = $obj_ado->getSession($correo, $clave);

switch ($_REQUEST["run"]) {
	case 'session':
		$empleado = $obj_ado->extractData();

		if ($empleado['cor_ado'] == $correo && $empleado['cla_ado'] == sha1($clave) && $empleado['est_ado'] == 'A' && $empleado['bas_ado'] == 'A') {
			session_start();
			$_SESSION['activo'] = true;
			$_SESSION['codigo'] = $empleado['cod_ado'];
			$_SESSION['cargo'] = $empleado['cod_car'];
			$_SESSION["time"] = time();

			header('Location: ../../frontend/view/ado_inicio.php');
		} else {
			header('Location: ../../frontend/view/ado_login.php');
		}
		break;
}