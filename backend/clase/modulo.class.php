<?php

	/*

		cod_mod, url_mod, cre_mod, act_mod, eli_mod, est_mod, bas_mod

		cod_mod				INT(11)			NO		A_I		PK		->	Codigo del modulo
		nom_mod				INR(10)			NO		UNIQUE			->	Numero de Serie del modulo
		url_mod				VARCHAR(50)		NO						->	URL del modulo
		cre_mod				DATETIME		NO						->	Fecha de Creación del modulo
		act_mod				DATETIME  		SI						->	Fecha de Actulizacion del modulo
		eli_mod				DATETIME  		SI						->	Fecha de Eliminado del modulo
		res_mod				DATETIME  		SI						->	Fecha de Restaurar del modulo
		est_mod				VARCHAR(1)		NO						->	Estatus del modulo
		bas_mod				VARCHAR(1) 		NO						->	Basura del modulo

	*/
	
	require_once("utilidad.class.php");

	class modulo extends utilidad
	{

		public $cod_mod;
		public $cod_car;
		public $nom_mod;
		public $url_mod;
		public $est_mod;
		public $bas_mod;


		function insertar()
		{
			$cre_mod = date("y-m-d h:i:s");

			$this->que_bda = "insert into modulo
								(nom_mod,
								url_mod,
								cre_mod,
								est_mod,
								bas_mod)
							values
								('$this->nom_mod',
								'$this->url_mod',
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
									act_mod='$act_mod',
									est_mod='$this->est_mod'
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

		function venta()
		{
			$this->que_bda = "update modulo
								set
									est_mod='$this->est_mod'
								where
									cod_mod='$this->cod_mod';";

			return $this->ejecutar();

		}// fin de venta

		function listar_normal()
		{
			$this->que_bda = "select * from modulo where bas_mod='A'";

			return $this->ejecutar();

		}// fin de listar normal

		function listar_lista()
		{
			$this->que_bda = "select * from modulo where est_mod='A' and bas_mod='A';";

			return $this->ejecutar();

		}// fin de listar lista

		function listar_modificar()
		{
			$this->que_bda = "select * from modulo where cod_mod='$this->cod_mod'";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_menu()
		{
			$this->que_bda = "select * from modulo where cod_car='$this->cod_car' and est_mod='A' and bas_mod='A';";

			return $this->ejecutar();

		}// fin de listar menu

		function listar_eliminar()
		{
			$this->que_bda = "select * from modulo where bas_mod='B'";

			return $this->ejecutar();

		}// fin de listar eliminar

		function eliminar()
		{
			$this->que_bda = "delete from modulo
								where
									cod_mod='$this->cod_mod';";

			return $this->ejecutar();

		}// fin de eliminar

		public function filtrar()
		{			
			$filtro1=($this->cod_mod!="")?"and cod_mod='$this->cod_mod'":"";
			$filtro2=($this->nom_mod!="")?"and nom_mod like '%$this->nom_mod%'":"";
			$filtro3=($this->est_mod!="")?"and est_mod='$this->est_mod'":"";
			$filtro4=($this->bas_mod!="")?"and bas_mod='$this->bas_mod'":"";

			$this->que_bda = "select * from modulo where 1=1 $filtro1 $filtro2 $filtro3 $filtro4;";

			return $this->ejecutar();

		}// fin de filtrar

	}
	
?>