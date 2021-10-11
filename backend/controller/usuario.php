<?php

require_once("../class/usuario.class.php");

$obj_usu = new usuario;

$obj_usu->assignValue();

switch ($_REQUEST["run"]) {
	case 'createEmployee':
		$obj_usu->resultado = $obj_usu->createEmployee();

		if ($obj_usu->resultado == false) {
			$message = "El usuario que intenta registrar ya existe o puede que algunos datos ya esten registrados en el sistema, por favor ingrese otro";
			$obj_usu->message($message) == false;
			header("refresh:3; url=../../frontend/view/usu_registrar.php");
		} else {
			$message = "Usuario registrado exitosamente";
			$obj_usu->message($message) == true;
			header("refresh:1; url=../../frontend/view/usu_registrar.php");
		}
		break;

	case 'createClient':
		$obj_usu->resultado = $obj_usu->createClient();

		if ($obj_usu->resultado == false) {
			$message = "El usuario que intenta registrar ya existe";
			$obj_usu->message($message) == false;
			header("refresh:3; url=../../frontend/view/usu_signup.php");
		} else {
			$message = "Usuario registrado exitosamente";
			$obj_usu->message($message) == true;
			header("refresh:1; url=../../frontend/view/usu_signup.php");
		}
		break;

	case 'finishRegistration':
		$obj_usu->contador = $obj_usu->verifyNewUser();
		if ($obj_usu->count() == 1) {
			$obj_usu->resultado = $obj_usu->finishRegistration();
			$message = "Registro terminado exitosamente";
			$obj_usu->message($message) == true;
			header("refresh:1; url=../../frontend/view/usu_login.php");
		} else {
			$message = "No se puede terminar de registrar el usuario, porque ya existe";
			$obj_usu->message($message) == false;
			header("refresh:2; url=../../frontend/view/usu_login.php");
		}
		break;

	case 'updatePassword':
		$obj_usu->contador = $obj_usu->verifyUser();
		if ($obj_usu->count() == 1) {
			$obj_usu->resultado = $obj_usu->updatePassword();
			$message = "Contraseña recuperada exitosamente";
			$obj_usu->message($message) == true;
			header("refresh:1; url=../../frontend/view/usu_login.php");
		} else {
			$message = "Información invalida";
			$obj_usu->message($message) == false;
			header("refresh:1; url=../../frontend/view/usu_login.php");
		}
		break;

	case 'changePassword':
		$obj_usu->resultado = $obj_usu->changePassword();

		if ($obj_usu->resultado == false) {
			$message = "Hubo un error al actualizar la contraseña";
			$obj_usu->message($message) == false;
		} else {
			$message = "Contraseña actualizada exitosamente";
			$obj_usu->message($message) == true;
		}
		header("refresh:1; url=../../frontend/view/usu_inicio.php");
		break;

	case 'updateQuestions':
		$obj_usu->resultado = $obj_usu->updateQuestions();

		if ($obj_usu->resultado == false) {
			$message = "Hubo un error al actualizar las preguntas de seguridad";
			$obj_usu->message($message) == false;
		} else {
			$message = "Preguntas de seguridad actualizadas exitosamente";
			$obj_usu->message($message) == true;
		}
		header("refresh:1; url=../../frontend/view/usu_inicio.php");
		break;

	case 'update':
		$obj_usu->resultado = $obj_usu->update();

		if ($obj_usu->resultado == false) {
			$message = "El usuario que intenta actualizar puede que tenga información registrada en otro usuario en el sistema, por favor verifique";
			$obj_usu->message($message) == false;
			header("refresh:3; url=../../frontend/view/usu_listartodo.php");
		} else {
			$message = "Usuario actualizado exitosamente";
			$obj_usu->message($message) == true;
			header("refresh:1; url=../../frontend/view/usu_listartodo.php");
		}
		break;

	case 'updateStatusI':
		$obj_usu->updateStatusI();
		header("Location: ../../frontend/view/usu_listartodo.php");
		break;

	case 'updateStatusA':
		$obj_usu->updateStatusA();
		header("Location: ../../frontend/view/usu_listartodo.php");
		break;

	case 'delete':
		$obj_usu->resultado = $obj_usu->delete();

		if ($obj_usu->resultado == false) {
			$message = "Problemas para eliminar el usuario";
			$obj_usu->message($message) == false;
		} else {
			$message = "Usuario eliminado exitosamente";
			$obj_usu->message($message) == true;
		}
		header("refresh:1; url=../../frontend/view/usu_listartodo.php");
		break;

	case 'restore':
		$obj_usu->restore();
		header("Location: ../../frontend/view/usu_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_usu->firstDelete();
		header("Location: ../../frontend/view/usu_listartodo.php");
		break;
}