<?php
	
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
		public $est_edo;
		public $bas_edo;


		function insertar()
		{
			$cre_edo = date("y-m-d h:i:s");

			$this->que_bda = "insert into proveedor
								(nom_edo, 
								des_edo, 
								dir_edo, 
								tel_edo, 
								cor_edo, 
								tip_edo, 
								rif_edo,
								cre_edo,
								est_edo,
								bas_edo)
							values
								('$this->nom_edo', 
								'$this->des_edo', 
								'$this->dir_edo', 
								'$this->tel_edo', 
								'$this->cor_edo', 
								'$this->tip_edo', 
								'$this->rif_edo',
								'$cre_edo',
								'A',
								'A');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{
			$act_edo = date("y-m-d h:i:s");
			
			$this->que_bda = "update proveedor
								set
									nom_edo='$this->nom_edo',
									des_edo='$this->des_edo',
									dir_edo='$this->dir_edo',
									tel_edo='$this->tel_edo',
									cor_edo='$this->cor_edo',
									rif_edo='$this->tip_edo',
									rif_edo='$this->rif_edo',
									act_edo='$act_edo',
									est_edo='$this->est_edo',
								where
									cod_edo='$this->cod_edo';";

			return $this->ejecutar();

		}// fin de modificar normal

		function modificar_restaurar()
		{
			$res_edo = date("y-m-d h:i:s");

			$this->que_bda = "update proveedor
								set
									res_edo='$res_edo',
									bas_edo='A'
								where
									cod_edo='$this->cod_edo';";

			return $this->ejecutar();

		}// fin de modificar restaurar

		function modificar_eliminar()
		{
			$eli_edo = date("y-m-d h:i:s");

			$this->que_bda = "update proveedor
								set
									eli_edo='$eli_edo',
									bas_edo='B'
								where
									cod_edo='$this->cod_edo';";

			return $this->ejecutar();

		}// fin de modificar eliminar

		function listar_normal()
		{
			$this->que_bda = "select * from proveedor where bas_edo='A';";

			return $this->ejecutar();

		}// fin de listar normal

		function listar_lista()
		{
			$this->que_bda = "select * from proveedor where est_edo='A' and bas_edo='A';";

			return $this->ejecutar();

		}// fin de listar lista

		function listar_modificar()
		{
			$this->que_bda = "select * from proveedor where cod_edo='$this->cod_edo'";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_eliminar()
		{
			$this->que_bda = "select * from proveedor where bas_edo='B'";

			return $this->ejecutar();

		}// fin de listar eliminar

		function eliminar()
		{
			$this->que_bda = "delete from proveedor
								where
									cod_edo='$this->cod_edo';";

			return $this->ejecutar();

		}// fin de eliminar

		public function filtrar()
		{
			$filtro1=($this->cod_edo!="")?"and cod_edo='$this->cod_edo'":"";
			$filtro2=($this->nom_edo!="")?"and nom_edo like '%$this->nom_edo%'":"";
			$filtro3=($this->des_edo!="")?"and des_edo like '%$this->des_edo%'":"";
			$filtro4=($this->dir_edo!="")?"and dir_edo like '%$this->dir_edo%'":"";
			$filtro5=($this->tel_edo!="")?"and tel_edo like '%$this->tel_edo%'":"";
			$filtro6=($this->cor_edo!="")?"and cor_edo like '%$this->cor_edo%'":"";
			$filtro7=($this->tip_edo!="")?"and tip_edo='$this->tip_edo'":"";
			$filtro8=($this->rif_edo!="")?"and rif_edo like '%$this->rif_edo%'":"";
			$filtro9=($this->est_edo!="")?"and est_edo='$this->est_edo'":"";
			$filtro10=($this->bas_edo!="")?"and bas_edo='$this->bas_edo'":"";

			$this->que_bda = "select * from proveedor where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6 $filtro7 $filtro8 $filtro9 $filtro10;";

			return $this->ejecutar();

		}// fin de filtrar

		function listar_resp()
		{
			$this->que_bda = "select * from proveedor_resp;";

			return $this->ejecutar();

		}// fin de listar respaldo

		function filtrar_resp()
		{
			
			$filtro1=($this->cod_edo!="")?"and cod_edo='$this->cod_edo'":"";
			$filtro2=($this->nom_edo!="")?"and nom_edo like '%$this->nom_edo%'":"";
			$filtro3=($this->des_edo!="")?"and des_edo like '%$this->des_edo%'":"";
			$filtro4=($this->dir_edo!="")?"and dir_edo like '%$this->dir_edo%'":"";
			$filtro5=($this->tel_edo!="")?"and tel_edo like '%$this->tel_edo%'":"";
			$filtro6=($this->cor_edo!="")?"and cor_edo like '%$this->cor_edo%'":"";
			$filtro7=($this->tip_edo!="")?"and tip_edo='$this->tip_edo'":"";
			$filtro8=($this->rif_edo!="")?"and rif_edo like '%$this->rif_edo%'":"";
			$filtro9=($this->est_edo!="")?"and est_edo='$this->est_edo'":"";
			$filtro10=($this->bas_edo!="")?"and bas_edo='$this->bas_edo'":"";

			$this->que_bda = "select * from proveedor_resp where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6 $filtro7 $filtro8 $filtro9 $filtro10;";

			return $this->ejecutar();

		}// fin de filtrar respaldo

	}
	
?>