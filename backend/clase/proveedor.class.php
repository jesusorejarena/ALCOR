<?php

	/*

		cod_edo, nom_edo, des_edo, dir_edo, tel_edo, cor_edo, rif_edo

		cod_edo				INT(11)			NO		A_I		PK		->	Codigo del Proveedor
		nom_edo				VARCHAR(50)		NO						->	Nombre del Proveedor
		des_edo				TEXT			SI						->	Descripcion del Proveedor
		dir_edo				TEXT			NO						->	Direccion del Proveedor
		tel_edo				VARCHAR(12)		NO						->	Telefono del Proveedor
		cor_edo				VARCHAR(100)	NO						->	Correo del Proveedor
		tip_edo				VARCHAR(1)		NO						->	Tipo de Rif del Proveedor
		rif_edo				VARCHAR(9)		NO						->	RIF del Proveedor
		cre_edo				DATETIME		NO						->	Creación del Proveedor
		act_edo				DATETIME  		SI						->	Actulizacion del Proveedor
		eli_edo				DATETIME  		SI						->	Eliminado del Proveedor
		est_edo				VARCHAR(1) 		NO						->	Estatus del Proveedor
		bas_edo				VARCHAR(1) 		NO						->	Basura del Proveedor

	*/
	
	require_once("utilidad.class.php");

	class proveedor extends utilidad
	{

		public $cod_edo;
		public $nom_edo;
		public $des_edo;
		public $dir_edo;
		public $tel_edo;
		public $cor_edo;
		public $tip_edo;
		public $rif_edo;
		public $cre_edo = date("y-m-d h:m:s");
		public $act_edo = date("y-m-d h:m:s");
		public $eli_edo = date("y-m-d h:m:s");
		public $bas_edo;


		function insertar()
		{

			$this->que_bda = "insert into proveedor
								(nom_edo, 
								des_edo, 
								dir_edo, 
								tel_edo, 
								cor_edo, 
								tip_edo, 
								rif_edo,
								cre_edo,
								bas_edo)
							values
								('$this->nom_edo', 
								'$this->des_edo', 
								'$this->dir_edo', 
								'$this->tel_edo', 
								'$this->cor_edo', 
								'$this->tip_edo', 
								'$this->rif_edo',
								'$this->cre_edo',
								'A');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{
			
			$this->que_bda = "update proveedor
								set
									nom_edo='$this->nom_edo',
									des_edo='$this->des_edo',
									dir_edo='$this->dir_edo',
									tel_edo='$this->tel_edo',
									cor_edo='$this->cor_edo',
									rif_edo='$this->tip_edo',
									rif_edo='$this->rif_edo',
									act_edo='$this->act_edo'
								where
									cod_edo='$this->cod_edo';";

			return $this->ejecutar();

		}// fin de modificar normal

		function modificar_eliminar()
		{

			$this->que_bda = "update proveedor
								set
									eli_edo='$this->eli_edo',
									bas_edo='B',
								where
									cod_edo='$this->cod_edo';";

			return $this->ejecutar();

		}// fin de modificar eliminar

		function eliminar()
		{
			
			$this->que_bda = "delete from proveedor
								where
									cod_edo='$this->cod_edo';";

			return $this->ejecutar();

		}// fin de eliminar

		public function filtrar()
        {

            $filtro1=($this->cod_edo!="")?"and cod_edo like '%$this->cod_edo%'":"";
            $filtro2=($this->nom_edo!="")?"and nom_edo like '%$this->nom_edo%'":"";
            $filtro3=($this->des_edo!="")?"and des_edo like '%$this->des_edo%'":"";
            $filtro4=($this->dir_edo!="")?"and dir_edo like '%$this->dir_edo%'":"";
			$filtro5=($this->tel_edo!="")?"and tel_edo like '%$this->tel_edo%'":"";
			$filtro6=($this->cor_edo!="")?"and cor_edo like '%$this->cor_edo%'":"";
			$filtro7=($this->tip_edo!="")?"and tip_edo='$this->tip_edo'":"";
			$filtro8=($this->rif_edo!="")?"and rif_edo like '%$this->rif_edo%'":"";
			$filtro9=($this->bas_edo!="")?"and bas_edo='$this->bas_edo'":"";

            $this->que_bda = "select * from proveedor where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6 $filtro7 $filtro8 $filtro9;";

            return $this->ejecutar();

        }// fin de filtrar

	}
	
?>