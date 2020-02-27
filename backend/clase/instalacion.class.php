<?php 

	require_once("utilidad.class.php");

	class instalacion extends utilidad
	{
		
		public $cod_ado;
		public $nom_ado;
		public $ape_ado;
		public $gen_ado;
		public $nac_ado;
		public $tip_ado;
		public $ced_ado;
		public $tel_ado;
		public $cor_ado;
		public $cla_ado;
		public $dir_ado;

		
		function cargo_admin()
		{
			$cre_car = date("y-m-d h:i:s");

			$this->que_bda = "insert into cargo
								(nom_car,
								cre_car,
								bas_car)
							values
								('Administrador',
								'$cre_car',
								'A');";

			return $this->ejecutar();

		}// fin de agregar cargo admin

		function empleado_admin()
		{
			$cre_ado = date("y-m-d h:i:s");

			$this->que_bda = "insert into empleado
								(nom_ado, 
								ape_ado, 
								gen_ado, 
								nac_ado,
								tip_ado, 
								ced_ado, 
								tel_ado, 
								cor_ado, 
								cla_ado, 
								dir_ado, 
								cod_car, 
								cre_ado,
								est_ado,
								bas_ado)
							values
								('$this->nom_ado', 
								'$this->ape_ado', 
								'$this->gen_ado', 
								'$this->nac_ado',  
								'$this->tip_ado',  
								'$this->ced_ado', 
								'$this->tel_ado', 
								'$this->cor_ado',  
								'$this->cla_ado', 
								'$this->dir_ado', 
								'1', 
								'$cre_ado',
								'A',
								'A');";

			return $this->ejecutar();

		}// fin de agregar empleado admin

		function comprobar()
		{
			$this->que_bda = "select * from cargo;";

			return $this->ejecutar();

		}// fin de comprobar
	}

 ?>