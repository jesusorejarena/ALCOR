<?php

require_once("../class/empleado.class.php");

$obj_ado = new empleado;

$correo = $_POST['cor_ado'];
$clave = $_POST['cla_ado'];

$obj_ado->puntero = $obj_ado->getSession($correo, $clave);


switch ($_REQUEST["run"]) {
	case 'session':
		$usuarios = $obj_ado->extractData();

		if ($usuarios['cor_ado'] == $correo && $usuarios['cla_ado'] == $clave && $usuarios['est_ado'] == 'A' && $usuarios['bas_ado'] == 'A') {
			session_start();
			$_SESSION['activo'] = true;
			$_SESSION['codigo'] = $usuarios['cod_ado'];
			$_SESSION['cargo'] = $usuarios['fky_cargo'];
			$_SESSION["time"] = time();

			header('Location: ../../frontend/view/ado_inicio.php');
		} else {
			header('Location: ../../frontend/view/ado_login.php');
		}
		break;
}
