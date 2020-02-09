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

		case 'modificar_restaurar':	$obj_mod->modificar_restaurar();
		break;

		case 'modificar_eliminar':	$obj_mod->modificar_eliminar();
		break;

		case 'eliminar':			$obj_mod->eliminar();
		break;
	}
	
?>