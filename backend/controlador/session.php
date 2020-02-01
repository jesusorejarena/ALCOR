<?php
	
	require("../clase/empleado.class.php");

	$obj_ado = new empleado;

	$cedula=$_POST['ced_ado'];
	$clave=$_POST['cla_ado'];

	$obj_ado->puntero=$obj_ado->listar_session($cedula, $clave);


	switch ($_REQUEST["ejecutar"])
	{
		case 'session':		$usuarios=$obj_ado->extraer_dato();

							if($usuarios['ced_ado']==$cedula && $usuarios['cla_ado']==$clave && $usuarios['est_ado']=='A' && $usuarios['bas_ado']=='A')
							{
								session_start();
								$_SESSION['activo'] = true;
								$_SESSION['cedula'] = $cedula;

								header('Location: ../../frontend/vista/menu_principal.php');
							}
							else
							{
								header('Location: ../../frontend/vista/usu_session.php');
							}						
		break;
	}
?>