<?php 

	/*

		cod_car, nom_car

		cod_car			INT(11)			NO		A_I		PK		->	Codigo del Cargo
		nom_car			VARCHAR(30)		NO						->	Nombre del Cargo
		
	*/

	require_once("utilidad.class.php");

	class cargo extends utilidad
	{

		public $cod_car;
		public $nom_car;

		
		function insertar()
		{

			$this->que_bda="insert into cargo
								(nom_car)
							values
								('$this->nom_car');";

			return $this->ejecutar();

		}

		function modificar()
		{

			$this->que_bda="update cargo
							set 
								nom_car='$this->nom_car'
							where
								cod_car='$this->cod_car';";

			return $this->ejecutar();

		}// hasta aqui el modificar

		function listar()
		{

			$this->que_bda="select * from cargo";

			return $this->ejecutar();

		}// fin de listar

		function eliminar()
		{

			$this->que_bda="delete from cargo
								where
									cod_car='$this->cod_car';";

			return $this->ejecutar();

		}

		function filtar()
		{

			$filtro1=($this->cod_car!="")?"and cod_car='$this->cod_car'":"";
			$filtro2=($this->nom_car!="")?"and nom_car like '%$this->nom_car%'":"";
			
			$this->que_bda="select * from cargo where	1=1 $filtro1 $filtro2;";

			return $this->ejecutar();

		}

	}

 ?>