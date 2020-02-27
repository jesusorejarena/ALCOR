<?php
	
	require_once("../clase/producto.class.php");

	$obj_pro = new producto;

	$obj_pro->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_pro->resultado=$obj_pro->insertar();
									$obj_pro->mensaje();
									header("refresh:1; url=../../frontend/vista/pro_registrar.php");
		break;

		case 'modificar_normal':	$obj_pro->resultado=$obj_pro->modificar_normal();
									$obj_pro->mensaje();
									header("refresh:1; url=../../frontend/vista/pro_menu.php");
		break;

		case 'modificar_restaurar':	$obj_pro->resultado=$obj_pro->modificar_restaurar();
									$obj_pro->mensaje();
									header("refresh:1; url=../../frontend/vista/pro_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_pro->resultado=$obj_pro->modificar_eliminar();
									$obj_pro->mensaje();
									header("refresh:1; url=../../frontend/vista/pro_listartodo.php");
		break;

		case 'venta':				
									$obj_pro->cod_pro=$obj_pro->cod_pro;
									$obj_pro->puntero=$obj_pro->listar_modificar();
									$producto=$obj_pro->extraer_dato();
									if (($producto['can_pro'])>=$obj_pro->com_pro)
									{
										$can_pro=($producto['can_pro'])-($obj_pro->com_pro);
										$obj_pro->can_pro=$can_pro;
										$obj_pro->resultado=$obj_pro->venta();
										$obj_pro->mensaje();
										header("refresh:1; url=../../frontend/vista/ven_menu.php");
									}
									else
									{
										$obj_pro->mensaje();
										header("refresh:1; url=../../frontend/vista/ven_menu.php");
									}
		break;

		case 'eliminar':			$obj_pro->resultado=$obj_pro->eliminar();
									$obj_pro->mensaje();
									header("refresh:1; url=../../frontend/vista/pro_listarpapelera.php");
		break;
	}
	
?>