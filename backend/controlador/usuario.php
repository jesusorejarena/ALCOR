<?php
	
	require("../clase/usuario.class.php");

	$obj_usu = new usuario;

	$obj_usu->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':	$obj_usu->insertar();
		break;

		case 'modificar':	$obj_usu->modificar();
		break;

		case 'eliminar':	$obj_usu->eliminar();
		break;
	}
	
?>