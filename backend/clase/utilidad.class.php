<?php

	class utilidad
	{
		
		private $nom_ser;
		private $usu_ser;
		private $cla_ser;
		private $nom_bda;
		private $con_bda;
		public  $que_bda;
		public  $puntero;

		public function __construct()
		{
			$this->nom_ser = "localhost";
			$this->usu_ser = "root";
			$this->cla_ser = "";
			$this->nom_bda = "ALCOR";
			$this->conectar();
		}
		
		public function conectar()
		{
			$this->con_bda = new mysqli($this->nom_ser, $this->usu_ser, $this->cla_ser, $this->nom_bda);
		}
		
		public function ejecutar()
		{
			echo $this->que_bda;
			return $this->con_bda->query($this->que_bda);
		}

		public function asignar_valor()
		{
			foreach ($_REQUEST as $atributo => $valor)
			{
				$this->$atributo = $valor;
			}
		}

		public function extraer_dato()
		{
			return $this->puntero->fetch_assoc();
		}
		
	}
	
?>