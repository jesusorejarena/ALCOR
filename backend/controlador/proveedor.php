<?php
	
	require_once("../clase/proveedor.class.php");

	$obj_edo = new proveedor;

	$obj_edo->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_edo->resultado=$obj_edo->insertar();
									$obj_edo->mensaje();
									header("refresh:1; url=../../frontend/vista/edo_registrar.php");
		break;

		case 'modificar_normal':	$obj_edo->resultado=$obj_edo->modificar_normal();
									$obj_edo->mensaje();
									header("refresh:1; url=../../frontend/vista/edo_menu.php");
		break;

		case 'modificar_restaurar':	$obj_edo->resultado=$obj_edo->modificar_restaurar();
									$obj_edo->mensaje();
									header("refresh:1; url=../../frontend/vista/edo_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_edo->resultado=$obj_edo->modificar_eliminar();
									$obj_edo->mensaje();
									header("refresh:1; url=../../frontend/vista/edo_listartodo.php");
		break;

		case 'eliminar':			$obj_edo->resultado=$obj_edo->eliminar();
									$obj_edo->mensaje();
									header("refresh:1; url=../../frontend/vista/edo_listarpapelera.php");
		break;
	}
	
?>