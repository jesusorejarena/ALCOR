<?php
	
	require_once("../clase/formulario.class.php");

	$obj_for = new formulario;

	$obj_for->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_for->resultado=$obj_for->insertar();
									$obj_for->mensaje();
									header("Location: ../../frontend/vista/inicio.php");
		break;

		case 'eliminar':			$obj_for->resultado=$obj_for->eliminar();
									$obj_for->mensaje();
									header("refresh:1; url=../../frontend/vista/for_listartodo.php");
		break;
	}
	
?>