<?php 

	/*

		cod_per, cod_mod, des_per, cod_mod, cod_opc

		cod_per			INT(11)			NO		A_I		PK			->	Codigo del permiso
		cod_mod			VARCHAR(20)		NO							->	Nombre del permiso
		des_per			VARCHAR(50)		Si							->	Descripcion del permiso
		cod_mod		VARCHAR(100)	NO							->	FKY del Cargo
		cod_opc		VARCHAR(100)	NO							->	FKY de la Opcion
		
	*/

	require_once("utilidad.class.php");

	class permiso extends utilidad
	{

		public $cod_per;
		public $cod_car;
		public $cod_opc;
		public $cod_mod;
		public $est_per;
		public $bas_per;

		
		function insertar()
		{
			$cre_per = date("y-m-d h:i:s");

			$this->que_bda = "insert into permiso
								(cod_car,
								cod_mod,
								cod_opc,
								cre_per,
								est_per,
								bas_per)
							values
								('$this->cod_car',
								'$this->cod_mod',
								'$this->cod_opc',
								'$cre_per',
								'A',
								'A');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{
			$act_per = date("y-m-d h:i:s");

			$this->que_bda = "update permiso
							set 
								cod_car='$this->cod_car',
								cod_mod='$this->cod_mod',
								cod_opc='$this->cod_opc',
								act_per='act_per',
								est_per='$this->est_per',
								bas_per='$this->bas_per'
							where
								cod_per='$this->cod_per';";

			return $this->ejecutar();

		}// fin de modificar normal

		function modificar_restaurar()
		{
			$res_per = date("y-m-d h:i:s");

			$this->que_bda = "update permiso
								set
									res_per='$res_per',
									bas_per='A'
								where
									cod_per='$this->cod_per';";

			return $this->ejecutar();

		}// fin de modificar restaurar

		function modificar_eliminar()
		{
			$eli_per = date("y-m-d h:i:s");

			$this->que_bda = "update permiso
								set
									eli_per='$eli_per',
									bas_per='B'
								where
									cod_per='$this->cod_per';";

			return $this->ejecutar();

		}// fin de modificar eliminar

		function listar_normal()
		{
			$this->que_bda = "select * from permiso where bas_per='A';";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_menu()
		{
			$this->que_bda = "select * from permiso where cod_car='$this->cod_car' and est_per='A' and bas_per='A';";

			return $this->ejecutar();

		}// fin de listar menu

		function listar_modificar()
		{
			$this->que_bda = "select * from permiso where cod_per='$this->cod_per';";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_eliminar()
		{
			$this->que_bda = "select * from permiso where bas_per='B';";

			return $this->ejecutar();

		}// fin de listar eliminar

		function eliminar()
		{
			$this->que_bda = "delete from permiso
								where
									cod_per='$this->cod_per';";

			return $this->ejecutar();

		}// fin de eliminar

		function filtrar()
		{
			$filtro1=($this->cod_per!="")?"and cod_per='$this->cod_per'":"";
			$filtro2=($this->cod_car!="")?"and cod_car='$this->cod_car'":"";
			$filtro3=($this->cod_mod!="")?"and cod_mod='$this->cod_mod'":"";
			$filtro4=($this->cod_opc!="")?"and cod_opc='$this->cod_opc'":"";
			$filtro5=($this->est_per!="")?"and est_per='$this->est_per'":"";
			$filtro6=($this->bas_per!="")?"and bas_per='$this->bas_per'":"";
			
			$this->que_bda = "select * from permiso where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6;";

			return $this->ejecutar();

		}// fin de filtrar

	}

 ?>