<?php

require_once("../class/empleado.class.php");

$obj_ado = new empleado;

$obj_ado->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_ado->resultado = $obj_ado->create();

		if ($obj_ado->resultado == false) {
			$message = "El empleado que intenta registrar ya existe o puede que algunos datos ya esten registrados en el sistema, por favor ingrese otro";
			$obj_ado->message($message) == false;
			header("refresh:3; url=../../frontend/view/usu_registrar.php");
		} else {
			$message = "Usuario registrado exitosamente";
			$obj_ado->message($message) == true;
			header("refresh:1; url=../../frontend/view/usu_registrar.php");
		}
		break;

	case 'finishRegistration':
		$obj_ado->contador = $obj_ado->verifyNewUser();
		if ($obj_ado->count() == 1) {
			$obj_ado->resultado = $obj_ado->finishRegistration();
			$message = "Registro terminado exitosamente";
			$obj_ado->message($message) == true;
			header("refresh:1; url=../../frontend/view/login.php");
		} else {
			$message = "No se puede terminar de registrar el empleado, porque ya existe";
			$obj_ado->message($message) == false;
			header("refresh:2; url=../../frontend/view/login.php");
		}
		break;

	case 'updatePassword':
		$obj_ado->contador = $obj_ado->verifyUser();
		if ($obj_ado->count() == 1) {
			$obj_ado->resultado = $obj_ado->updatePassword();
			$message = "Contraseña recuperada exitosamente";
			$obj_ado->message($message) == true;
			header("refresh:1; url=../../frontend/view/login.php");
		} else {
			$message = "Información invalida";
			$obj_ado->message($message) == false;
			header("refresh:1; url=../../frontend/view/login.php");
		}
		break;

	case 'changePassword':
		$obj_ado->resultado = $obj_ado->changePassword();

		if ($obj_ado->resultado == false) {
			$message = "Hubo un error al actualizar la contraseña";
			$obj_ado->message($message) == false;
		} else {
			$message = "Contraseña actualizada exitosamente";
			$obj_ado->message($message) == true;
		}
		header("refresh:1; url=../../frontend/view/inicio.php");
		break;

	case 'updateQuestions':
		$obj_ado->resultado = $obj_ado->updateQuestions();

		if ($obj_ado->resultado == false) {
			$message = "Hubo un error al actualizar las preguntas de seguridad";
			$obj_ado->message($message) == false;
		} else {
			$message = "Preguntas de seguridad actualizadas exitosamente";
			$obj_ado->message($message) == true;
		}
		header("refresh:1; url=../../frontend/view/inicio.php");
		break;

	case 'update':
		$obj_ado->resultado = $obj_ado->update();

		if ($obj_ado->resultado == false) {
			$message = "El empleado que intenta actualizar puede que tenga información registrada en otro empleado en el sistema, por favor verifique";
			$obj_ado->message($message) == false;
			header("refresh:3; url=../../frontend/view/ado_listartodo.php");
		} else {
			$message = "Usuario actualizado exitosamente";
			$obj_ado->message($message) == true;
			header("refresh:1; url=../../frontend/view/ado_listartodo.php");
		}
		break;

	case 'updateStatusI':
		$obj_ado->updateStatusI();
		header("Location: ../../frontend/view/ado_listartodo.php");
		break;

	case 'updateStatusA':
		$obj_ado->updateStatusA();
		header("Location: ../../frontend/view/ado_listartodo.php");
		break;

	case 'delete':
		$obj_ado->resultado = $obj_ado->delete();

		if ($obj_ado->resultado == false) {
			$message = "Problemas para eliminar el empleado";
			$obj_ado->message($message) == false;
		} else {
			$message = "Usuario eliminado exitosamente";
			$obj_ado->message($message) == true;
		}
		header("refresh:1; url=../../frontend/view/ado_listartodo.php");
		break;

	case 'restore':
		$obj_ado->restore();
		header("Location: ../../frontend/view/ado_listarpapelera.php");
		break;

	case 'firstDelete':
		$obj_ado->firstDelete();
		header("Location: ../../frontend/view/ado_listartodo.php");
		break;
}