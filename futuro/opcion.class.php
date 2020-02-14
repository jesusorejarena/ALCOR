<?php 

	/*

		cod_opc, cod_mod, acc_opc, url_opc

		cod_opc			INT(11)			NO		A_I		PK			->	Codigo del Opcion
		cod_mod			VARCHAR(20)		NO							->	Nombre del Opcion
		acc_opc			VARCHAR(20)		Si							->	Acción de la Opcion
		url_opc			VARCHAR(100)	NO							->	URL del Opcion
		
	*/

	require_once("utilidad.class.php");

	class opcion extends utilidad
	{

		public $cod_opc;
		public $cod_mod;
		public $acc_opc;
		public $url_opc;

		
		function insertar()
		{

			$this->que_bda = "insert into opcion
								(cod_mod,
								acc_opc,
								url_opc)
							values
								('$this->cod_mod',
								'$this->acc_opc',
								'$this->url_opc');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{

			$this->que_bda = "update opcion
							set 
								cod_mod='$this->cod_mod',
								acc_opc='$this->acc_opc',
								url_opc='$this->url_opc'
							where
								cod_opc='$this->cod_opc';";

			return $this->ejecutar();

		}// fin de modificar normal

		function listar_normal()
		{
			$this->que_bda = "select * from opcion;";

			return $this->ejecutar();

		}// fin de listar normal
		
		function listar_modificar()
		{
			$this->que_bda = "select * from opcion where cod_opc='$this->cod_opc'";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_menu()
		{
			$this->que_bda = "select * from opcion where cod_mod='$this->cod_mod';";

			return $this->ejecutar();

		}// fin de listar menu


		function eliminar()
		{
			$this->que_bda = "delete from opcion
								where
									cod_opc='$this->cod_opc';";

			return $this->ejecutar();

		}// fin de eliminar

		function filtrar()
		{

			$filtro1=($this->cod_opc!="")?"and cod_opc='$this->cod_opc'":"";
			$filtro2=($this->cod_mod!="")?"and cod_mod like '%$this->cod_mod%'":"";
			$filtro3=($this->acc_opc!="")?"and acc_opc like '%$this->acc_opc%'":"";
			
			$this->que_bda = "select * from opcion where	1=1 $filtro1 $filtro2 $filtro3;";

			return $this->ejecutar();

		}// fin de filtrar

	}

 ?>