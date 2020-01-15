<?php
	
	require("../clase/producto.class.php");

	$obj_pro = new producto;

	$obj_pro->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':	$obj_pro->insertar();
		break;

		case 'modificar':	$obj_pro->modificar();
		break;

		case 'eliminar':	$obj_pro->eliminar();
		break;
	}
	
?>