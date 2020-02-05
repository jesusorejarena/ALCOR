<?php 

	/*

		cod_car, nom_car

		cod_car			INT(11)			NO		A_I		PK			->	Codigo del Cargo
		nom_car			VARCHAR(30)		NO		Unique				->	Nombre del Cargo
		cre_car			DATETIME		NO							->	Fecha de Creado del Cargo
		act_car			DATETIME		SI							->	Fecha de Modificado del Cargo
		eli_car			DATETIME		SI							->	Fecha de Eliminado del Cargo
		res_car			DATETIME		SI							->	Fecha de Restauración del Cargo
		bas_car			VARCHAR(1)		NO							->	Basura del Cargo
		
	*/

	require_once("utilidad.class.php");

	class cargo extends utilidad
	{

		public $cod_car;
		public $nom_car;
		public $bas_car;

		
		function insertar()
		{
			$cre_car = date("y-m-d h:i:s");

			$this->que_bda = "insert into cargo
								(nom_car,
								cre_car,
								bas_car)
							values
								('$this->nom_car',
								'$cre_car',
								'A');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{
			$act_car = date("y-m-d h:i:s");

			$this->que_bda = "update cargo
							set 
								nom_car='$this->nom_car',
								act_car='$act_car'
							where
								cod_car='$this->cod_car';";

			return $this->ejecutar();

		}// fin de modificar normal

		function modificar_restaurar()
		{
			$res_car = date("y-m-d h:i:s");

			$this->que_bda = "update cargo
								set
									res_car='$res_car',
									bas_car='A'
								where
									cod_car='$this->cod_car';";

			return $this->ejecutar();

		}// fin de modificar restaurar

		function modificar_eliminar()
		{
			$eli_car = date("y-m-d h:i:s");

			$this->que_bda = "update cargo
								set
									eli_car='$eli_car',
									bas_car='B'
								where
									cod_car='$this->cod_car';";

			return $this->ejecutar();

		}// fin de modificar eliminar

		function listar_normal()
		{
			$this->que_bda = "select * from cargo where bas_car='A';";

			return $this->ejecutar();

		}// fin de listar normal

		function listar_modificar()
		{
			$this->que_bda = "select * from cargo where cod_car='$this->cod_car';";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_eliminar()
		{
			$this->que_bda = "select * from cargo where bas_car='B';";

			return $this->ejecutar();

		}// fin de listar eliminar

		function eliminar()
		{
			$this->que_bda = "delete from cargo
								where
									cod_car='$this->cod_car';";

			return $this->ejecutar();

		}// fin de eliminar

		function filtrar()
		{

			$filtro1=($this->cod_car!="")?"and cod_car='$this->cod_car'":"";
			$filtro2=($this->nom_car!="")?"and nom_car like '%$this->nom_car%'":"";
			$filtro3=($this->bas_car!="")?"and bas_car like '%$this->bas_car%'":"";
			
			$this->que_bda = "select * from cargo where	1=1 $filtro1 $filtro2 $filtro3;";

			return $this->ejecutar();

		}// fin de filtrar

	}

 ?>