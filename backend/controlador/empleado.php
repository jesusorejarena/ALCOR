<?php
	
	require_once("../clase/empleado.class.php");

	$obj_ado = new empleado;

	$obj_ado->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_ado->insertar();
									header("Location: ../../frontend/vista/ado_registrar.php");
		break;

		case 'modificar_normal':	$obj_ado->modificar_normal();
									header("Location: ../../frontend/vista/ado_menu.php");
		break;

		case 'modificar_restaurar':	$obj_ado->modificar_restaurar();
									header("Location: ../../frontend/vista/ado_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_ado->modificar_eliminar();
									header("Location: ../../frontend/vista/ado_listartodo.php");
		break;

		case 'modificar_datos':		$obj_ado->modificar_datos();
									header("Location: ../../frontend/vista/menu_principal.php");
		break;

		case 'modificar_contrasena':$obj_ado->modificar_contrasena();
									header("Location: ../../frontend/vista/menu_principal.php");
		break;

		case 'eliminar':			$obj_ado->eliminar();
									header("Location: ../../frontend/vista/ado_listarpapelera.php");
		break;
	}

?>