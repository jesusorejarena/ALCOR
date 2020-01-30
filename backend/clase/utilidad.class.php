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
			ini_set("date.timezone", "America/Caracas");
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

		public function hora()
		{
			
			return $this->time =date("y-m-d h:i:s");
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
		
		public function estandar()
		{
			$this->container="container-fluid p-5 mt-5 bg-white";
			$this->card="card mx-auto bg-dark border border-success shadow-lg";
			$this->titulocard="card-title text-white text-center pt-3";
			$this->tabla="table table-hover table-dark table-bordered text-center";
			$this->input_normal="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success";
			$this->input_text="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success";
			$this->btn_limpiar="btn btn-outline-info btn-lg";
			$this->btn_enviar="btn btn-success btn-lg";
			$this->btn_editar="btn btn-warning";
			$this->btn_restaurar="btn btn-success";
			$this->btn_eliminar="btn btn-danger";
			$this->btn_atras="btn btn-dark btn-lg";
		}
		
	}
	
?>