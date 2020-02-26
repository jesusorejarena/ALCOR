<?php
	
	require_once("../clase/permiso.class.php");

	$obj_per = new permiso;

	$obj_per->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_per->resultado=$obj_per->insertar();
									$obj_per->mensaje();
									header("refresh:1; url=../../frontend/vista/per_registrar.php");
		break;

		case 'modificar_normal':	$obj_per->resultado=$obj_per->modificar_normal();
									$obj_per->mensaje();
									header("refresh:1; url=../../frontend/vista/rol_menu.php");
		break;

		case 'modificar_restaurar':	$obj_per->resultado=$obj_per->modificar_restaurar();
									$obj_per->mensaje();
									header("refresh:1; url=../../frontend/vista/per_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_per->resultado=$obj_per->modificar_eliminar();
									$obj_per->mensaje();
									header("refresh:1; url=../../frontend/vista/per_listartodo.php");
		break;

		case 'eliminar':			$obj_per->resultado=$obj_per->eliminar();
									$obj_per->mensaje();
									header("refresh:1; url=../../frontend/vista/per_listarpapelera.php");
		break;
	}
	
?>