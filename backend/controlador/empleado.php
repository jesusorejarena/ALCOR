<?php
	
	require_once("../clase/empleado.class.php");

	$obj_ado = new empleado;

	$obj_ado->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_ado->insertar();
		break;

		case 'modificar_normal':	$obj_ado->modificar_normal();
		break;

		case 'modificar_restaurar':	$obj_ado->modificar_restaurar();
		break;

		case 'modificar_eliminar':	$obj_ado->modificar_eliminar();
		break;

		case 'eliminar':			$obj_ado->eliminar();
		break;
	}

?>