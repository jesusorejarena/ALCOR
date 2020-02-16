<?php
	
	require_once("../clase/producto.class.php");

	$obj_pro = new producto;

	$obj_pro->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			$obj_pro->insertar();
									header("Location: ../../frontend/vista/pro_registrar.php");
		break;

		case 'modificar_normal':	$obj_pro->modificar_normal();
									header("Location: ../../frontend/vista/pro_menu.php");
		break;

		case 'modificar_restaurar':	$obj_pro->modificar_restaurar();
									header("Location: ../../frontend/vista/pro_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_pro->modificar_eliminar();
									header("Location: ../../frontend/vista/pro_listartodo.php");
		break;

		case 'venta':				
									$obj_pro->cod_pro=$obj_pro->cod_pro;
									$obj_pro->puntero=$obj_pro->listar_modificar();
									$producto=$obj_pro->extraer_dato();
									if (($producto['can_pro'])>=$obj_pro->com_pro)
									{
										$can_pro=($producto['can_pro'])-($obj_pro->com_pro);
										$obj_pro->can_pro=$can_pro;
										$obj_pro->venta();
										header("Location: ../../frontend/vista/ven_menu.php");
									}
									else
									{
										echo "<script>alert('Hola');</script>";	
									}
									header("Location: ../../frontend/vista/ven_smenu.php");
									
		break;

		case 'eliminar':			$obj_pro->eliminar();
									header("Location: ../../frontend/vista/pro_listarpapelera.php");
		break;
	}
	
?>