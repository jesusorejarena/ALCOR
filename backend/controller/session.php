<?php

require_once("../class/usuario.class.php");

$obj_usu = new usuario;

$correo = $_POST['cor_usu'];
$clave = $_POST['cla_usu'];

$obj_usu->puntero = $obj_usu->getSession($correo, $clave);

switch ($_REQUEST["run"]) {
	case 'session':
		$usuario = $obj_usu->extractData();

		if ($usuario['cor_usu'] == $correo && $usuario['cla_usu'] == sha1($clave) && $usuario['est_usu'] == 'A' && $usuario['bas_usu'] == 'A') {
			session_start();
			$_SESSION['activo'] = true;
			$_SESSION['codigo'] = $usuario['cod_usu'];
			$_SESSION['cargo'] = $usuario['cod_car'];
			$_SESSION["time"] = time();

			header('Location: ../../frontend/view/usu_inicio.php');
		} else {
			header('Location: ../../frontend/view/usu_login.php');
		}
		break;
}
