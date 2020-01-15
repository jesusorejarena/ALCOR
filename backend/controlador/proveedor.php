<?php
	
	require("../clase/edoveedor.class.php");

	$obj_edo = new proveedor;

	$obj_edo->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':	$obj_edo->insertar();
		break;

		case 'modificar':	$obj_edo->modificar();
		break;

		case 'eliminar':	$obj_edo->eliminar();
		break;
	}
	
?>