<?php
	
	require_once("../clase/permiso.class.php");

	$obj_per = new permiso;

	$obj_per->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_per->insertar();
									header("Location: ../../frontend/vista/per_registrar.php");
		break;

		case 'modificar_normal':	$obj_per->modificar_normal();
									header("Location: ../../frontend/vista/rol_menu.php");
		break;

		case 'modificar_restaurar':	$obj_per->modificar_restaurar();
									//header("Location: ../../frontend/vista/per_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_per->modificar_eliminar();
									//header("Location: ../../frontend/vista/per_listartodo.php");
		break;

		case 'eliminar':			$obj_per->eliminar();
									header("Location: ../../frontend/vista/per_listarpapelera.php");
		break;
	}
	
?>