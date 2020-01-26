<?php
	
	require("../clase/empleado.class.php");

	$obj_ado = new empleado;

	$obj_ado->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_pro->insertar();
		break;

		case 'modificar_normal':	$obj_pro->modificar_normal();
		break;

		case 'modificar_eliminar':	$obj_pro->modificar_eliminar();
		break;

		case 'eliminar':			$obj_pro->eliminar();
		break;
	}
	
?>