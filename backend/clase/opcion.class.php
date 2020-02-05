<?php 

	/*

		cod_opc, nom_opc, des_opc, url_opc

		cod_opc			INT(11)			NO		A_I		PK			->	Codigo del Opcion
		nom_opc			VARCHAR(20)		NO							->	Nombre del Opcion
		des_opc			VARCHAR(50)		Si							->	Descripcion del Opcion
		url_opc			VARCHAR(100)	NO							->	URL del Opcion
		
	*/

	require_once("utilidad.class.php");

	class opcion extends utilidad
	{

		public $cod_opc;
		public $nom_opc;
		public $des_opc;
		public $url_opc;

		
		function insertar()
		{

			$this->que_bda = "insert into opcion
								(nom_opc,
								des_opc,
								url_opc)
							values
								('$this->nom_opc',
								'$this->des_opc',
								'$this->url_opc');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{

			$this->que_bda = "update opcion
							set 
								nom_opc='$this->nom_opc',
								des_opc='$this->des_opc',
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
			$filtro2=($this->nom_opc!="")?"and nom_opc like '%$this->nom_opc%'":"";
			$filtro3=($this->des_opc!="")?"and des_opc like '%$this->des_opc%'":"";
			
			$this->que_bda = "select * from opcion where	1=1 $filtro1 $filtro2 $filtro3;";

			return $this->ejecutar();

		}// fin de filtrar

	}

 ?>