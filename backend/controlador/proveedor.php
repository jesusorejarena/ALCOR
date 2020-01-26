<?php
	
	require("../clase/proveedor.class.php");

	$obj_edo = new proveedor;

	$obj_edo->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_edo->insertar();
		break;

		case 'modificar_normal':	$obj_edo->modificar_normal();
		break;

		case 'modificar_eliminar':	$obj_edo->modificar_eliminar();
		break;

		case 'eliminar':			$obj_edo->eliminar();
		break;
	}
	
?>