<?php 

	require_once("utilidad.class.php");

	class formulario extends utilidad
	{
		
		public $cod_for;
		public $nom_for;
		public $ape_for;
		public $tel_for;
		public $cor_for;
		public $asu_for;


		function insertar()
		{
			$cre_for = date("y-m-d h:i:s");

			$this->que_bda="insert into formulario 
								(nom_for,
								ape_for,
								tel_for,
								cor_for,
								asu_for,
								cre_for)
							values
								('$this->nom_for',
								'$this->ape_for',
								'$this->tel_for',
								'$this->cor_for',
								'$this->asu_for',
								'$cre_for');";

			return $this->ejecutar();

		}// fin de insertar

		function listar_normal()
		{
			$this->que_bda="select * from formulario";

			return $this->ejecutar();

		}// fin de listar

		function eliminar()
		{
			$this->que_bda = "delete from formulario
								where
									cod_for='$this->cod_for';";

			return $this->ejecutar();

		}// fin de eliminar

		public function filtrar()
		{

			$filtro1=($this->cod_for!="")?"and cod_for='$this->cod_for'":"";
			$filtro2=($this->nom_for!="")?"and nom_for like '%$this->nom_for%'":"";
			$filtro3=($this->ape_for!="")?"and ape_for like '%$this->ape_for%'":"";
			$filtro4=($this->tel_for!="")?"and tel_for like '%$this->tel_for%'":"";
			$filtro5=($this->cor_for!="")?"and cor_for like '%$this->cor_for%'":"";
			$filtro6=($this->asu_for!="")?"and asu_for like '%$this->asu_for%'":"";

			$this->que_bda = "select * from formulario where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro4 $filtro5 $filtro6;";

			return $this->ejecutar();

		}// fin de filtrar

		function listar_resp()
		{
			$this->que_bda = "select * from formulario_resp;";

			return $this->ejecutar();

		}// fin de listar respaldo

		function filtrar_resp()
		{
			
			$filtro1=($this->cod_for!="")?"and cod_for='$this->cod_for'":"";
			$filtro2=($this->nom_for!="")?"and nom_for like '%$this->nom_for%'":"";
			$filtro3=($this->ape_for!="")?"and ape_for like '%$this->ape_for%'":"";
			$filtro4=($this->tel_for!="")?"and tel_for like '%$this->tel_for%'":"";
			$filtro5=($this->cor_for!="")?"and cor_for like '%$this->cor_for%'":"";
			$filtro6=($this->asu_for!="")?"and asu_for like '%$this->asu_for%'":"";

			$this->que_bda = "select * from formulario_resp where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro4 $filtro5 $filtro6;";

			return $this->ejecutar();

		}// fin de filtrar respaldo

	}

 ?>