<?php

session_start();

require_once("../class/pedido.class.php");

$obj_ped = new pedido;

$obj_ped->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_ped->resultado = $obj_ped->create();

		if ($obj_ped->resultado == false) {
			echo "Error al realizar el pedido";
		} else {
			$obj_ped->puntero = $obj_ped->getLastOrderP($_POST['cod_usu']);
			$pedido = $obj_ped->extractData();

			echo $pedido['cod_ped'];
		}
		break;

	case 'updateStatusV':
		$obj_ped->resultado = $obj_ped->updateStatusV();

		if ($obj_ped->resultado == false) {
			$message = "Error al actualizar el pedido";
			$obj_ped->message($message) == false;
			header("refresh:2; url=../../frontend/view/usu_inicio.php");
		} else {
			$message = "Pedido actualizado exitosamente";
			$obj_ped->message($message) == true;
			header("refresh:1; url=../../frontend/view/usu_inicio.php");
		}
		break;

	case 'updateStatusT':
		$obj_ped->resultado = $obj_ped->updateStatusT();

		if ($obj_ped->resultado == false) {
			$message = "Error al actualizar el pedido";
			$obj_ped->message($message) == false;
			header("refresh:2; url=../../frontend/view/usu_inicio.php");
		} else {
			$message = "Pedido actualizado exitosamente";
			$obj_ped->message($message) == true;
			header("refresh:1; url=../../frontend/view/usu_inicio.php");
		}
		break;

	case 'delete':
		$obj_ped->delete();
		header("Location: ../../frontend/view/ped_listartodo.php");
		break;
}
