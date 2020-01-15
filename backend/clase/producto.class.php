<?php

	/*

		cod_pro, nom_pro, des_pro, pre_pro, can_pro, fky_proveedor

		cod_pro				INT(11)			NO		A_I		PK		->	Codigo del Producto
		nom_pro				VARCHAR(50)		NO						->	Nombre del Producto
		des_pro				TEXT			SI						->	Descripcion del Producto
		pre_pro				FLOAT			NO						->	Precio del Producto
		can_pro				INT(11)			NO						->	Cantidad del Producto
		fky_proveedor		INT(11)			NO						->	FKY del Proveedor

	*/
	
	require_once("utilidad.class.php");

	class producto extends utilidad
	{

		public $cod_pro;
		public $nom_pro;
		public $des_pro;
		public $pre_pro;
		public $can_pro;
		public $fky_proveedor;


		function insertar()
		{

			$this->que_bda = "insert into producto
								(nom_pro, 
								des_pro, 
								pre_pro, 
								can_pro,
								fky_proveedor)
							values
								('$this->nom_pro', 
								'$this->des_pro', 
								'$this->pre_pro', 
								'$this->can_pro',
								'$this->fky_proveedor');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar()
		{
			
			$this->que_bda = "update producto
								set
									nom_pro='$this->nom_pro',
									des_pro='$this->des_pro',
									pre_pro='$this->pre_pro',
									can_pro='$this->can_pro',
									fky_proveedor='$this->fky_proveedor'
								where
									cod_pro='$this->cod_pro';";

			return $this->ejecutar();

		}// fin de modificar

		function listar()
		{
			
			$this->que_bda = "select * from producto;";

			return $this->ejecutar();

		}// fin de listar

		function eliminar()
		{
			
			$this->que_bda = "delete from producto
								where
									cod_pro='$this->cod_pro';";

			return $this->ejecutar();

		}// fin de eliminar

		public function filtrar()
        {

            $filtro1=($this->cod_pro!="")?"and cod_pro like '%$this->cod_pro%'":"";
            $filtro2=($this->nom_pro!="")?"and nom_pro like '%$this->nom_pro%'":"";
            $filtro3=($this->des_pro!="")?"and des_pro like '%$this->des_pro%'":"";
            $filtro4=($this->pre_pro!="")?"and pre_pro like '%$this->pre_pro%'":"";
            $filtro5=($this->can_pro!="")?"and can_pro like '%$this->can_pro%'":"";

            $this->que_bda = "select * from producto where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5;";

            return $this->ejecutar();

        }// fin de filtrar

	}
	
?>