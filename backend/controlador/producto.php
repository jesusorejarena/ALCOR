<?php
	
	require_once("../clase/producto.class.php");

	$obj_pro = new producto;

	$obj_pro->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_pro->insertar();
									header("Location: ../../frontend/vista/edo_registrar.php");
		break;

		case 'modificar_normal':	$obj_pro->modificar_normal();
									header("Location: ../../frontend/vista/edo_menu.php");
		break;

		case 'modificar_restaurar':	$obj_pro->modificar_restaurar();
									header("Location: ../../frontend/vista/edo_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_pro->modificar_eliminar();
									header("Location: ../../frontend/vista/edo_listartodo.php");
		break;

		case 'compra':				$obj_pro->compra();
									header("Location: ../../frontend/vista/ven_menu.php");
		break;

		case 'eliminar':			$obj_pro->eliminar();
									header("Location: ../../frontend/vista/edo_listarpapelera.php");
		break;
	}
	
?>