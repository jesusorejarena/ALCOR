<?php
	
	/*

		cod_emp, nom_emp, des_emp, tel_emp, dir_emp, cor_emp, rif_emp, hou_emp, hod_emp

		cod_emp		INT(11)			NO		A_I		PK		->	Codigo de la Empresa
		nom_emp		VARCHAR(50)		NO						->	Nombre de la Empresa
		des_emp		VARCHAR(100)	SI						->	Descripcion de la Empresa
		tel_emp		VARCHAR(12)		NO						->	Teléfono de la Empresa
		dir_emp		VARCHAR(100)	NO						->	Direccion de la Empresa
		cor_emp		VARCHAR(100)	NO						->	Correo de la Empresa
		tip_emp		VARCHAR(1)		NO						->	Tipo de RIF de la Empresa
		rif_emp		VARCHAR(9)	 	NO						->	RIF de la Empresa
		hou_emp		VARCHAR(19) 	NO						->	Horario 1 de la Empresa
		hod_emp		VARCHAR(19) 	SI						->	Horario 2 de la Empresa

	*/

	require_once("utilidad.class.php");

	class empresa extends utilidad
	{

		public $cod_emp;
		public $nom_emp;
		public $tel_emp;
		public $dir_emp;
		public $cor_emp;
		public $rif_emp;
		public $hou_emp;
		public $hod_emp;
		

		function insertar()
		{

			$this->que_bda = "insert into empresa
								(nom_emp,
								tel_emp, 
								dir_emp, 
								cor_emp,
								rif_emp, 
								hou_emp, 
								hod_emp)
							values
								('$this->nom_emp', 
								'$this->tel_emp', 
								'$this->dir_emp', 
								'$this->cor_emp',
								'$this->rif_emp', 
								'$this->hou_emp', 
								'$this->hod_emp');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{

			$this->que_bda = "update empresa
								set
									nom_emp='$this->nom_emp',
									tel_emp='$this->tel_emp',
									dir_emp='$this->dir_emp',
									cor_emp='$this->cor_emp',
									rif_emp='$this->rif_emp',
									hou_emp='$this->hou_emp',
									hod_emp='$this->hod_emp'
								where
									cod_emp='1';";

			return $this->ejecutar();

		}// fin de modificar normal

		function listar_modificar()
		{
			$this->que_bda = "select * from empresa where cod_emp='1';";

			return $this->ejecutar();

		}// fin de listar modificar
		
	}
	
?>