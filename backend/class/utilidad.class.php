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
	public  $contador;
	public  $resultado;

	public function __construct()
	{
		$this->nom_ser = "localhost";
		$this->usu_ser = "root";
		$this->cla_ser = "";
		$this->nom_bda = "alcor_copia";
		$this->connect();
		ini_set("date.timezone", "America/Caracas");
	}

	public function connect()
	{
		$this->con_bda = new mysqli($this->nom_ser, $this->usu_ser, $this->cla_ser, $this->nom_bda);
	}

	public function run()
	{
		//echo $this->que_bda;
		return $this->con_bda->query($this->que_bda);
	}

	public function assignValue()
	{
		foreach ($_REQUEST as $atributo => $valor) {
			$this->$atributo = $valor;
		}
	}

	public function extractData()
	{
		return $this->puntero->fetch_assoc();
	}

	public function count()
	{
		return $this->contador->num_rows;
	}

	public function message()
	{
		require_once("../../frontend/view/tema_controladores.php");

		encabezado("Comprobando...");

		if ($this->resultado == true) {
			echo "
					<div class='alert alert-success py-5 my-5'>
						<strong>¡Enhorabuena!</strong> Procesado exitosamente.
					</div>
				";
		} else {
			echo "
					<div class='alert alert-danger py-5 my-5'>
						<strong>¡Fallo!</strong> Hubo un error inesperado, verifique los campos y vuelve a intentar.
					</div>
				";
		}

		pie();
	}

	public function classBootstrap()
	{
		// Clases para el Bootstrap 4

		// Inicio Clases Generales
		$this->container		= "container-fluid py-5 mt-5 bg-white";
		$this->container2		= "container-fluid pt-4 mt-4 bg-light";
		$this->container3		= "container-fluid pt-1 mt-1 bg-light";
		$this->titulos			= "h1 text-dark p-4 text-center big-text";
		// Fin Clases Generales

		// Inicio Cards Generales
		$this->card				= "card bg-light border border-info shadow-lg animated pulse m-2";
		$this->titulocard		= "card-title text-dark text-center pt-3";
		$this->subtitulocard	= "card-subtitle text-muted px-5 text-right";
		$this->footercard		= "card-footer text-right";
		// Fin Cards Generales


		// Inicio Tabla Generales
		$this->tabla			= "table table-hover table-bordered text-center";
		// Fin Tabla Generales

		// Inicio Inputs Generales
		$this->for 				= "text-dark text-left h5";
		$this->small 			= "form-text text-muted";
		$this->input_normal		= "text-dark form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-info";
		$this->input_text		= "text-dark form-control bg-transparent border border-top-0 border-info";
		// Fin Inputs Generales

		// Inicio Botones Normales Generales
		$this->btn_limpiar		= "btn btn-outline-info btn-lg";
		$this->btn_enviar		= "btn btn-sesion btn-lg";
		$this->btn_editar		= "btn btn-warning";
		$this->btn_restaurar	= "btn btn-success";
		$this->btn_eliminar		= "btn btn-danger";
		$this->btn_pdf			= "btn btn-pdf";
		$this->btn_atras		= "btn btn-atras btn-lg";
		// Fin Botones Normales Generales


		// Inicio Botones Block Generales
		$this->btn_limpiarg		= "btn btn-outline-info btn-lg btn-block";
		$this->btn_enviarg		= "btn btn-primary btn-menu btn-lg btn-block";
		$this->btn_editarg		= "btn btn-warning btn-lg btn-block";
		$this->btn_restaurarg	= "btn btn-success btn-lg btn-block";
		$this->btn_eliminarg	= "btn btn-danger btn-lg btn-block";
		$this->btn_atrasg		= "btn btn-dark btn-lg btn-block";
		// Fin Botones Block Generales
	}
}