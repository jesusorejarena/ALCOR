<?php 

	/*

		cod_mod, nom_mod, des_mod, fky_cargo, fky_opcion

		cod_mod			INT(11)			NO		A_I		PK			->	Codigo del modulo
		nom_mod			VARCHAR(20)		NO							->	Nombre del modulo
		des_mod			VARCHAR(50)		Si							->	Descripcion del modulo
		fky_cargo		VARCHAR(100)	NO							->	FKY del Cargo
		fky_opcion		VARCHAR(100)	NO							->	FKY de la Opcion
		
	*/

	require_once("utilidad.class.php");

	class modulo extends utilidad
	{

		public $cod_mod;
		public $fky_cargo;
		public $fky_modulo;

		
		function insertar()
		{

			$this->que_bda = "insert into modulo
								(fky_cargo,
								fky_opcion)
							values
								('$this->fky_cargo',
								'$this->fky_opcion');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{

			$this->que_bda = "update modulo
							set 
								fky_cargo='$this->fky_cargo',
								fky_opcion='$this->fky_opcion'
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

	}

 ?>