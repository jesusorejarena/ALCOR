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
			$this->nom_bda = "alcor_relacionada_copia";
			$this->conectar();
			ini_set("date.timezone", "America/Caracas");
		}
		
		public function conectar()
		{
			$this->con_bda = new mysqli($this->nom_ser, $this->usu_ser, $this->cla_ser, $this->nom_bda);
		}
		
		public function ejecutar()
		{
			//echo $this->que_bda;
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
		
		/*public function rutas()
		{
			// Inicio Ruta Mis Estilos
			$this->mis_estilos_css 	="../css/estilos.css";
			// Fin Ruta Mis Estilos

			// Inicio Ruta Bootstrap 4
			$this->bootstrap_css	="<link rel='stylesheet' href='../css/bootstrap-4.4.1/css/bootstrap.min.css'>";
			$this->bootstrap1_js	="../css/bootstrap-4.4.1/js/jquery-3.4.1.min.js";
			$this->bootstrap2_js	="../css/bootstrap-4.4.1/js/popper.min.js";
			$this->bootstrap3_js	="../css/bootstrap-4.4.1/js/bootstrap.min.js";
			// Fin Ruta Bootstrap 4

			// Inicio Ruta Ionicons
			$this->ionicons 		="../css/ionicons/css/ionicons.min.css";
			// Fin Ruta Ionicons

			// Inicio Ruta Animated
			$this->animate_css		="../css/animate/animate.min.css";
			// Fin Ruta Animated

			// Inicio Ruta Wow
			$this->wow_css			="../css/wow/animate.css";
			$this->wow1_js			="../css/wow/wow.min.js";
			$this->wow2_js			="new WOW().init();";
			// Fin Ruta Wow
		}*/

		public function estandar()
		{
			// Clases para el Bootstrap 4

			// Inicio Clases Generales
			$this->container		="container-fluid p-5 mt-5 bg-white";
			$this->container2		="container-fluid pt-5 mt-4 bg-light";
			$this->titulos			="h1 text-dark text-center p-4 text-center";
			// Fin Clases Generales

			// Inicio Cards Generales
			$this->card				="card mx-auto bg-light border border-primary shadow-lg animated pulse p-4 m-4";
			$this->titulocard		="card-title text-dark text-center pt-3";
			$this->subtitulocard	="card-subtitle text-muted px-5 text-right";
			$this->footercard		="card-footer text-right";
			// Fin Cards Generales


			// Inicio Tabla Generales
			$this->tabla			="table table-hover table-bordered text-center";
			// Fin Tabla Generales

			// Inicio Inputs Generales
			$this->for 				="text-dark text-left h5";
			$this->small 			="form-text text-muted";
			$this->input_normal		="text-dark form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-primary";
			$this->input_text		="text-dark form-control bg-transparent border border-top-0 border-primary";
			// Fin Inputs Generales

			// Inicio Botones Normales Generales
			$this->btn_limpiar		="btn btn-outline-info btn-lg";
			$this->btn_enviar		="btn btn-success btn-lg";
			$this->btn_editar		="btn btn-warning";
			$this->btn_restaurar	="btn btn-success";
			$this->btn_eliminar		="btn btn-danger";
			$this->btn_atras		="btn btn-dark btn-lg";
			// Fin Botones Normales Generales


			// Inicio Botones Block Generales
			$this->btn_limpiarg		="btn btn-outline-info btn-lg btn-block";
			$this->btn_enviarg		="btn btn-primary btn-lg btn-block";
			$this->btn_editarg		="btn btn-warning btn-lg btn-block";
			$this->btn_restaurarg	="btn btn-success btn-lg btn-block";
			$this->btn_eliminarg	="btn btn-danger btn-lg btn-block";
			$this->btn_atrasg		="btn btn-dark btn-lg btn-block";
			// Fin Botones Block Generales
		}
		
	}
	
?>