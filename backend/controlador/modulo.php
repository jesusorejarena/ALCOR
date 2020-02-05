<?php
	
	require("../clase/modulo.class.php");

	$obj_mod = new modulo;

	$obj_mod->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_mod->insertar();
		break;

		case 'modificar_normal':	$obj_mod->modificar_normal();
		break;

		case 'eliminar':			$obj_mod->eliminar();
		break;
	}
	
?>