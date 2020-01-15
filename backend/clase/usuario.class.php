<?php 

	/*

		cod_usu, nom_usu, ced_usu, cla_usu

		cod_usu		INT(11)			NO		A_I		PK		->	Codigo del Usuario
		nom_usu		VARCHAR(80)		NO						->	Nombre del Usuario
		ced_usu		VARCHAR(10)		NO						->	Cedula del Usuario
		cla_usu		VARCHAR(20)		NO						->	Clave del Usuario

	*/

	require_once("utilidad.class.php");

	class usuario extends utilidad
	{

		public $cod_usu;
		public $nom_usu;
		public $ced_usu;
		public $cla_usu;

		
		function insertar()
		{

			$this->que_bda="insert into usuario
								(nom_usu, 
							 	ced_usu,  
							 	cla_usu)
							values
								('$this->nom_usu', 
								 '$this->ced_usu', 
								 '$this->cla_usu');";

			return $this->ejecutar();

		}

		//se puede ahorrar esta parte y colocarlo en uno solo 

		function modificar_root()
		{

			$this->que_bda="update usuario
							set 
								nom_usu='$this->nom_usu',
								ced_usu='$this->ced_usu',
								cla_usu='$this->cla_usu'
							where
								cod_usu='$this->cod_usu';";

			return $this->ejecutar();

		}

		function modificar_user()
		{

			$this->que_bda="update usuario
							set 
								cla_usu='$this->cla_usu'
							where
								cod_usu='$this->cod_usu';";

			return $this->ejecutar();

		}

		function listar()
		{

			$this->que_dba="select * from usuario";

			return $this->ejecutar();

		}// fin de listar

		// hasta aqui el modificar

		function eliminar()
		{

			$this->que_bda="delete from usuario
								where
									cod_usu='$this->cod_usu';";

			return $this->ejecutar();

		}

		function filtar()
		{

			$filtro1=($this->cod_usu!="")?"and cod_usu='$this->cod_usu'":"";
			$filtro2=($this->nom_usu!="")?"and nom_usu like '%$this->nom_usu%'":"";
			$filtro3=($this->ced_usu!="")?"and ced_usu like '%$this->ced_usu%'":"";

			$this->que_bda="select * from usuario where	1=1 $filtro1 $filtro2 $filtro3;";

			return $this->ejecutar();

		}

	}

 ?>