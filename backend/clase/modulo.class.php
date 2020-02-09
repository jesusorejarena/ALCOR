<?php 

	/*

		cod_mod, nom_mod, des_mod, cod_car, cod_opc

		cod_mod			INT(11)			NO		A_I		PK			->	Codigo del modulo
		nom_mod			VARCHAR(20)		NO							->	Nombre del modulo
		des_mod			VARCHAR(50)		Si							->	Descripcion del modulo
		cod_car		VARCHAR(100)	NO							->	FKY del Cargo
		cod_opc		VARCHAR(100)	NO							->	FKY de la Opcion
		
	*/

	require_once("utilidad.class.php");

	class modulo extends utilidad
	{

		public $cod_mod;
		public $cod_car;
		public $cod_opc;
		public $est_mod;
		public $bas_mod;

		
		function insertar()
		{
			$cre_mod = date("y-m-d h:i:s");

			$this->que_bda = "insert into modulo
								(cod_car,
								cod_opc,
								cre_mod,
								est_mod,
								bas_mod)
							values
								('$this->cod_car',
								'$this->cod_opc',
								'$cre_mod',
								'A',
								'A');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{
			$act_mod = date("y-m-d h:i:s");

			$this->que_bda = "update modulo
							set 
								cod_car='$this->cod_car',
								cod_opc='$this->cod_opc',
								act_mod='act_mod',
								est_mod='$this->est_mod',
								bas_mod='$this->bas_mod'
							where
								cod_mod='$this->cod_mod';";

			return $this->ejecutar();

		}// fin de modificar normal

		function modificar_restaurar()
		{
			$res_mod = date("y-m-d h:i:s");

			$this->que_bda = "update modulo
								set
									res_mod='$res_mod',
									bas_mod='A'
								where
									cod_mod='$this->cod_mod';";

			return $this->ejecutar();

		}// fin de modificar restaurar

		function modificar_eliminar()
		{
			$eli_mod = date("y-m-d h:i:s");

			$this->que_bda = "update modulo
								set
									eli_mod='$eli_mod',
									bas_mod='B'
								where
									cod_mod='$this->cod_mod';";

			return $this->ejecutar();

		}// fin de modificar eliminar

		function listar_normal()
		{
			$this->que_bda = "select * from modulo where bas_mod='A';";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_menu()
		{
			$this->que_bda = "select * from modulo where cod_car='$this->cod_car' and est_mod='A' and bas_mod='A';";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_modificar()
		{
			$this->que_bda = "select * from modulo where cod_mod='$this->cod_mod';";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_eliminar()
		{
			$this->que_bda = "select * from modulo where bas_mod='B';";

			return $this->ejecutar();

		}// fin de listar eliminar

		function eliminar()
		{
			$this->que_bda = "delete from modulo
								where
									cod_mod='$this->cod_mod';";

			return $this->ejecutar();

		}// fin de eliminar

		function filtrar()
		{
			$filtro1=($this->cod_mod!="")?"and cod_mod='$this->cod_mod'":"";
			$filtro2=($this->cod_car!="")?"and cod_car='$this->cod_car'":"";
			$filtro3=($this->cod_opc!="")?"and cod_opc='$this->cod_opc'":"";
			$filtro4=($this->est_mod!="")?"and est_mod='$this->est_mod'":"";
			$filtro5=($this->bas_mod!="")?"and bas_mod='$this->bas_mod'":"";
			
			$this->que_bda = "select * from modulo where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5;";

			return $this->ejecutar();

		}// fin de filtrar

	}

 ?>