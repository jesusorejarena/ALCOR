<?php
	
	require("../clase/opcion.class.php");

	$obj_opc = new opcion;

	$obj_opc->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_opc->insertar();
		break;

		case 'modificar_normal':	$obj_opc->modificar_normal();
		break;

		case 'eliminar':			$obj_opc->eliminar();
		break;
	}
	
?>