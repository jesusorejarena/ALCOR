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

		
		function insertar()
		{

			$this->que_bda = "insert into modulo
								(cod_car,
								cod_opc)
							values
								('$this->cod_car',
								'$this->cod_opc');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{

			$this->que_bda = "update modulo
							set 
								cod_car='$this->cod_car',
								cod_opc='$this->cod_opc'
							where
								cod_mod='$this->cod_mod';";

			return $this->ejecutar();

		}// fin de modificar normal

		function listar_normal()
		{
			$this->que_bda = "select * from modulo;";

			return $this->ejecutar();

		}// fin de listar normal

		function listar_modificar()
		{
			$this->que_bda = "select * from modulo where cod_mod='$this->cod_mod';";

			return $this->ejecutar();

		}// fin de listar normal

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
			$filtro3=($this->cod_car!="")?"and cod_car='$this->cod_car'":"";
			$filtro2=($this->cod_opc!="")?"and cod_opc='$this->cod_opc'":"";
			
			$this->que_bda = "select * from modulo where 1=1 $filtro1 $filtro2 $filtro3;";

			return $this->ejecutar();

		}// fin de filtrar

	}

 ?>