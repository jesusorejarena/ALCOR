<?php
	
	require_once("../clase/proveedor.class.php");

	$obj_edo = new proveedor;

	$obj_edo->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_edo->insertar();
									header("Location: ../../frontend/vista/edo_registrar.php");
		break;

		case 'modificar_normal':	$obj_edo->modificar_normal();
									header("Location: ../../frontend/vista/edo_menu.php");
		break;

		case 'modificar_restaurar':	$obj_edo->modificar_restaurar();
									header("Location: ../../frontend/vista/edo_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_edo->modificar_eliminar();
									header("Location: ../../frontend/vista/edo_listartodo.php");
		break;

		case 'eliminar':			$obj_edo->eliminar();
									header("Location: ../../frontend/vista/edo_listarpapelera.php");
		break;
	}
	
?>