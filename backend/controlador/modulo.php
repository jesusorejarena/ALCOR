<?php
	
	require_once("../clase/modulo.class.php");

	$obj_mod = new modulo;

	$obj_mod->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':			switch ($obj_mod->url_mod)
									{
										case 'ado_menu.php': $obj_mod->nom_mod="Empleados";
										break;

										case 'edo_menu.php': $obj_mod->nom_mod="Proveedores";
										break;

										case 'pro_menu.php': $obj_mod->nom_mod="Productos";
										break;

										case 'ven_menu.php': $obj_mod->nom_mod="Ventas";
										break;

										case 'for_menu.php': $obj_mod->nom_mod="Formularios";
										break;
									}

									$obj_mod->insertar();
									header("Location: ../../frontend/vista/mod_registrar.php");
		break;

		case 'modificar_normal':	$obj_mod->modificar_normal();
									header("Location: ../../frontend/vista/rol_menu.php");
		break;

		case 'modificar_restaurar':	$obj_mod->modificar_restaurar();
									header("Location: ../../frontend/vista/mod_listarpapelera.php");
		break;

		case 'modificar_eliminar':	$obj_mod->modificar_eliminar();
									header("Location: ../../frontend/vista/mod_listartodo.php");
		break;

		case 'eliminar':			$obj_mod->eliminar();
									header("Location: ../../frontend/vista/mod_listarpapelera.php");
		break;
	}
	
?>