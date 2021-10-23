<?php

require_once("../class/pedido_relacion.class.php");

$obj_ped_rel = new pedido_relacion;

$obj_ped_rel->assignValue();

switch ($_REQUEST["run"]) {
	case 'create':
		$obj_ped_rel->resultado = $obj_ped_rel->create();

		if ($obj_ped_rel->resultado == false) {
			$message = "Error al realizar el pedido";
			echo $message;
		} else {
			$message = "Pedido registrada exitosamente";
			echo $message;
		}
		break;
}
