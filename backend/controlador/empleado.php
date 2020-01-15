<?php
	
	require("../clase/empleado.class.php");

	$obj_ado = new empleado;

	$obj_ado->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':	$obj_ado->insertar();
		break;

		case 'modificar':	$obj_ado->modificar();
		break;

		case 'eliminar':	$obj_ado->eliminar();
		break;
	}
	
?>