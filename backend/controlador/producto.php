<?php
	
	require("../clase/producto.class.php");

	$obj_pro = new producto;

	$obj_pro->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_pro->insertar();
		break;

		case 'modificar_normal':	$obj_pro->modificar_normal();
		break;

		case 'modificar_restaurar':	$obj_pro->modificar_restaurar();
		break;

		case 'modificar_eliminar':	$obj_pro->modificar_eliminar();
		break;

		case 'eliminar':			$obj_pro->eliminar();
		break;
	}
	
?>