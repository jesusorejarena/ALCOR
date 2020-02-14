<?php
	
	require_once("../clase/formulario.class.php");

	$obj_for = new formulario;

	$obj_for->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_for->insertar();
									header("Location: ../../frontend/vista/inicio.php");
		break;

		case 'eliminar':			$obj_for->eliminar();
									header("Location: ../../frontend/vista/for_listartodo.php");
		break;
	}
	
?>