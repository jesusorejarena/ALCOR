<?php

	/*

		cod_pro, nom_pro, des_pro, pre_pro, can_pro, cre_pro, act_pro, eli_pro, bas_pro, fky_proveedor

		cod_pro				INT(11)			NO		A_I		PK		->	Codigo del Producto
		ser_pro				INR(10)			NO		UNIQUE			->	Numero de Serie del Producto
		nom_pro				VARCHAR(50)		NO						->	Nombre del Producto
		des_pro				VARCHAR(100)	SI						->	Descripcion del Producto
		pre_pro				FLOAT(11,2)		NO						->	Precio del Producto
		can_pro				FLOAR(11,2)		NO						->	Cantidad del Producto
		cre_pro				DATETIME		NO						->	Fecha de Creación del Producto
		act_pro				DATETIME  		SI						->	Fecha de Actulizacion del Producto
		eli_pro				DATETIME  		SI						->	Fecha de Eliminado del Producto
		res_pro				DATETIME  		SI						->	Fecha de Restaurar del Producto
		bas_pro				VARCHAR(1) 		NO						->	Basura del Producto

	*/
	
	require_once("utilidad.class.php");

	class producto extends utilidad
	{

		public $cod_pro;
		public $ser_pro;
		public $nom_pro;
		public $des_pro;
		public $pre_pro;
		public $can_pro;
		public $est_pro;
		public $bas_pro;


		function insertar()
		{
			$cre_pro = date("y-m-d h:i:s");

			$this->que_bda = "insert into producto
								(nom_pro,
								des_pro, 
								pre_pro, 
								can_pro, 
								cod_edo,
								cre_pro,
								est_pro, 
								bas_pro)
							values
								('$this->nom_pro', 
								'$this->des_pro', 
								'$this->pre_pro', 
								'$this->can_pro', 
								'$this->cod_edo',
								'$cre_pro',
								'A',
								'A');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{
			$act_pro = date("y-m-d h:i:s");
			
			$this->que_bda = "update producto
								set
									nom_pro='$this->nom_pro',
									des_pro='$this->des_pro',
									pre_pro='$this->pre_pro',
									can_pro='$this->can_pro',
									cod_edo='$this->cod_edo',
									act_pro='$act_pro',
									est_pro='$this->est_pro'
								where
									cod_pro='$this->cod_pro';";

			return $this->ejecutar();

		}// fin de modificar normal

		function modificar_restaurar()
		{
			$res_pro = date("y-m-d h:i:s");
			
			$this->que_bda = "update producto
								set
									res_pro='$res_pro',
									bas_pro='A'
								where
									cod_pro='$this->cod_pro';";

			return $this->ejecutar();

		}// fin de modificar restaurar

		function modificar_eliminar()
		{
			$eli_pro = date("y-m-d h:i:s");
			
			$this->que_bda = "update producto
								set
									eli_pro='$eli_pro',
									bas_pro='B'
								where
									cod_pro='$this->cod_pro';";

			return $this->ejecutar();

		}// fin de modificar eliminar

		function venta()
		{
			$this->que_bda = "update producto
								set
									can_pro='$this->can_pro'
								where
									cod_pro='$this->cod_pro';";

			return $this->ejecutar();

		}// fin de venta

		function listar_normal()
		{
			$this->que_bda = "select * from producto where bas_pro='A'";

			return $this->ejecutar();

		}// fin de listar normal

		function listar_lista()
		{
			$this->que_bda = "select * from producto where est_pro='A' and bas_pro='A';";

			return $this->ejecutar();

		}// fin de listar lista

		function listar_modificar()
		{
			$this->que_bda = "select * from producto where cod_pro='$this->cod_pro'";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_eliminar()
		{
			$this->que_bda = "select * from producto where bas_pro='B'";

			return $this->ejecutar();

		}// fin de listar eliminar

		function eliminar()
		{
			$this->que_bda = "delete from producto
								where
									cod_pro='$this->cod_pro';";

			return $this->ejecutar();

		}// fin de eliminar

		public function filtrar()
		{		
			$filtro1=($this->cod_pro!="")?"and cod_pro='$this->cod_pro'":"";	
			$filtro2=($this->nom_pro!="")?"and nom_pro like '%$this->nom_pro%'":"";
			$filtro3=($this->des_pro!="")?"and des_pro like '%$this->des_pro%'":"";
			$filtro4=($this->pre_pro!="")?"and pre_pro like '%$this->pre_pro%'":"";
			$filtro5=($this->can_pro!="")?"and can_pro like '%$this->can_pro%'":"";
			$filtro6=($this->cod_edo!="")?"and cod_edo='$this->cod_edo'":"";
			$filtro7=($this->est_pro!="")?"and est_pro='$this->est_pro'":"";
			$filtro8=($this->bas_pro!="")?"and bas_pro='$this->bas_pro'":"";

			$this->que_bda = "select * from producto where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6 $filtro7 $filtro8";

			return $this->ejecutar();

		}// fin de filtrar

		function listar_resp()
		{
			$this->que_bda = "select * from producto_resp;";

			return $this->ejecutar();

		}// fin de listar respaldo

		function filtrar_resp()
		{
			
			$filtro1=($this->cod_pro!="")?"and cod_pro='$this->cod_pro'":"";	
			$filtro2=($this->nom_pro!="")?"and nom_pro like '%$this->nom_pro%'":"";
			$filtro3=($this->des_pro!="")?"and des_pro like '%$this->des_pro%'":"";
			$filtro4=($this->pre_pro!="")?"and pre_pro like '%$this->pre_pro%'":"";
			$filtro5=($this->can_pro!="")?"and can_pro like '%$this->can_pro%'":"";
			$filtro6=($this->cod_edo!="")?"and cod_edo='$this->cod_edo'":"";
			$filtro7=($this->est_pro!="")?"and est_pro='$this->est_pro'":"";
			$filtro8=($this->bas_pro!="")?"and bas_pro='$this->bas_pro'":"";

			$this->que_bda = "select * from producto_resp where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6 $filtro7 $filtro8";

			return $this->ejecutar();

		}// fin de filtrar respaldo

	}
	
?>