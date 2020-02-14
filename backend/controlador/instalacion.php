<?php

	switch ($_REQUEST["ejecutar"])
	{
		case 'instalacion':			require_once("../clase/instalacion.class.php");
									$obj_ins = new instalacion;
									$obj_ins->cargo_admin();

									$obj_ins->asignar_valor();
									$obj_ins->empleado_admin();
									header("Location: ../../frontend/vista/usu_sesion.php");
		break;
		
	}

?>