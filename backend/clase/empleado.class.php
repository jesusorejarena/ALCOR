<?php
	
	/*

		cod_ado, nom_ado, ape_ado, ced_ado, tel_ado, cor_ado, dir_ado, car_ado, con_ado

		cod_ado		INT(11)			NO		A_I		PK		->	Codigo del Empleado
		nom_ado		VARCHAR(50)		NO						->	Nombre del Empleado
		ape_ado		VARCHAR(50)		NO						->	Apellido del Empleado
		ced_ado		VARCHAR(10)		NO						->	Cedula del Empleado
		tel_ado		VARCHAR(12)		NO						->	Telefono del Empleado
		cor_ado		VARCHAR(100)	NO						->	Correo del Empleado
		dir_ado		TEXT 			NO						->	Direccion del Empleado
		car_ado		VARCHAR(20) 	NO						->	Cargo del Empleado
		con_ado		DATE 			NO						->	Contrato del Empleado
		est_ado		VARCHAR(1) 		NO					->	Estatus del Empleado

	*/

	require_once("utilidad.class.php");

	class empleado extends utilidad
	{

		public $cod_ado;
		public $nom_ado;
		public $ape_ado;
		public $ced_ado;
		public $tel_ado;
		public $cor_ado;
		public $dir_ado;
		public $car_ado;
		public $con_ado;
		public $est_ado;
		

		function insertar()
		{

			$this->que_bda = "insert into empleado
								(nom_ado, 
								ape_ado, 
								ced_ado, 
								tel_ado, 
								cor_ado, 
								dir_ado, 
								car_ado, 
								con_ado,
								est_ado)
							values
								('$this->nom_ado', 
								'$this->ape_ado', 
								'$this->ced_ado', 
								'$this->tel_ado', 
								'$this->cor_ado', 
								'$this->dir_ado', 
								'$this->car_ado', 
								'$this->con_ado',
								'A');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar()
		{

			$this->que_bda = "update empleado
								set
									nom_ado='$this->nom_ado',
									ape_ado='$this->ape_ado',
									ced_ado='$this->ced_ado',
									tel_ado='$this->tel_ado',
									cor_ado='$this->cor_ado',
									dir_ado='$this->dir_ado',
									car_ado='$this->car_ado',
									con_ado='$this->con_ado',
									est_ado='$this->est_ado'
								where
									cod_ado='$this->cod_ado';";

			return $this->ejecutar();

		}// fin de modificar

		function listar()
		{

			$this->que_bda = "select * from empleado;";

			return $this->ejecutar();

		}// fin de listar

		function eliminar()
		{

			$this->que_bda = "delete from empleado
								where
									cod_ado='$this->cod_ado';";

			return $this->ejecutar();

		}// fin de eliminar

		public function filtrar()
        {

            $filtro1=($this->cod_ado!="")?"and cod_ado like '%$this->cod_ado%'":"";
            $filtro2=($this->nom_ado!="")?"and nom_ado like '%$this->nom_ado%'":"";
            $filtro3=($this->ape_ado!="")?"and ape_ado like '%$this->ape_ado%'":"";
            $filtro4=($this->ced_ado!="")?"and ced_ado like '%$this->ced_ado%'":"";
			$filtro5=($this->tel_ado!="")?"and tel_ado like '%$this->tel_ado%'":"";
			$filtro6=($this->cor_ado!="")?"and cor_ado like '%$this->cor_ado%'":"";
			$filtro7=($this->dir_ado!="")?"and dir_ado like '%$this->dir_ado%'":"";
			$filtro8=($this->car_ado!="")?"and car_ado like '%$this->car_ado%'":"";
			$filtro9=($this->con_ado!="")?"and con_ado like '%$this->con_ado%'":"";
			$filtro10=($this->est_ado!="")?"and est_ado like '%$this->est_ado%'":"";

            $this->que_bda = "select * from empleado where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6 $filtro7 $filtro8 $filtro9 $filtro10;";

            return $this->ejecutar();

        }// fin de filtrar

	}
	
?>